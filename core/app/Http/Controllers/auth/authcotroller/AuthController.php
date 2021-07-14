<?php

namespace App\Http\Controllers\auth\authcotroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\PengaturanSistem;
use App\PengaturanSocialMedia;
use App\User;
use App\Instansi;
use App\Fakultas;

class AuthController extends Controller
{
    public function index(){
        // AMBIL SEMUA DATA PENGATURAN SOSIAL MEDIA
        $social_medias = PengaturanSocialMedia::all();

        return view('user-auth.user-login',compact(['social_medias']));
    }

    public function register(){

        // AMBIL SEMUA DATA PENGATURAN SOSIAL MEDIA
        $social_medias = PengaturanSocialMedia::all();

        // AMBIL SEMUA INSTANSI
        $instansis = Instansi::all();

        return view('user-auth.user-register',compact(['instansis','social_medias']));
    }

    public function loginPost(Request $request){

    }

    public function registerPost(Request $request){
        // SECURITY
            $request->validate([
                'name' => 'required|unique:users,name|min:5|max:50',
                'username' => 'required|unique:users,username|min:5|max:20',
                'password' => 'required|same:password_confirmation|min:8|max:50',
                'password_confirmation' => 'required|min:8|max:50',
                'email' => 'required|email',
                'phone_number' => 'required|numeric|digits_between:7,15',
                'line' => 'required|min:3|max:50',
                'wa' => 'required|numeric|digits_between:7,15'
            ]);
        // END

        // CHECK PENGATURAN SISTEMS
            try{
                $pengaturan_registrations = PengaturanSistem::where('nama_pengaturan','open_registration')->firstOrFail()->status;
            }catch(ModelNotFoundException $err){
                $pengaturan_registrations = false;
            }

            if(!$pengaturan_registrations){
                return redirect()->back();
            }
        // END

        // MAIN LOGIC
            // CREATE USER BARU
                User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'line' => $request->line,
                    'wa' => $request->wa,
                ]);
            // END

            // REDIRECT KE HALAMAN LOGIN
                return redirect()
                            ->route('user.landing-page')
                            ->with([
                                'message' => 'Berhasil register ke dalam sistem, silahkan login dengan akun yang telah berhasil di buat',
                                'color' => 'bg-success'
                            ]);
            // END
        // END

    }

    // AJAX GET INSTANSI TYPE
    public function getFakultas(Request $request){
        // SECURITY
            $request->validate([
                'id' => 'required|numeric'
            ]);
        // END
        
        // MAIN LOGIC
            try {
                $instansis = Instansi::with('Fakultas')->findOrFail($request->id);
                
                if($instansis->tipe_instansi == 'universitas'){
                    return response()->json([
                        'status' => 200,
                        'message' => 'berhasil mengambil fakultas',
                        'instansi' => $instansis,
                        'fakultas' => $instansis->Fakultas,
                    ]);
                }else{
                    return response()->json([
                        'status' => 200,
                        'message' => 'barhasil, instansi bukan universitas',
                        'instansi' => $instansis,
                        'fakultas' => $instansis->Fakultas,
                    ]);
                }
                

            }catch(ModelNotFoundException $err){
                $instansis = (object) ['tipe_instansi' => 'instansi_non_universitas'];

                return response()->json([
                    'status' => 400,
                    'message' => 'Gagal Data Tidak Ditemukan',
                    'instansi' => $instansis,
                    'fakultas' => null,
                ],400);
            }
        // END
            
    }

    // AJAX GET PRODI
    public function getProdi(Request $request){
        // SECURITY
            $request->validate([
                'id' => 'required|numeric'
            ]);
        // END
        
        // MAIN LOGIC
            try {
                $fakultas = Fakultas::with('Prodi')->findOrFail($request->id);

                return response()->json([
                    'status' => 200,
                    'message' => 'berhasil mengambil prodi',
                    'prodi' => $fakultas->Prodi,
                ]);

            }catch(ModelNotFoundException $err){

                return response()->json([
                    'status' => 400,
                    'message' => 'Gagal Data Tidak Ditemukan',
                    'prodi' => null,
                ],400);

            }
        // END
            
    }
}

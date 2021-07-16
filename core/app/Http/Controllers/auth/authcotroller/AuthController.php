<?php

namespace App\Http\Controllers\auth\authcotroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Crypt;

use App\PengaturanSistem;
use App\PengaturanSocialMedia;
use App\User;
use App\Universitas;
use App\Fakultas;
use App\Instansi;
use App\TipeSekolah;

class AuthController extends Controller
{
    public function index(){
        // AMBIL SEMUA DATA PENGATURAN SOSIAL MEDIA
        $social_medias = PengaturanSocialMedia::all();

        return view('user-auth.user-login',compact(['social_medias']));
    }

    public function register(){

        // AMBIL SEMUA UNIVERSITAS
        $universitas = Universitas::all();

        // AMBIL SEMUA JENJANG SEKOLAH
        $tipe_sekolahs = TipeSekolah::all();

        // AMBIL SEMUA INSTANSI
        $instansis = Instansi::all();

        return view('user-auth.user-register',compact(['universitas','tipe_sekolahs','instansis']));
    }

    public function loginPost(Request $request){

    }

    public function registerPost(Request $request){
        dd($request->all());
        // SECURITY
            $request->validate([
                'name' => 'required|unique:users,name|min:5|max:50',
                'username' => 'required|unique:users,username|min:5|max:20',
                'password' => 'required|same:password_confirmation|min:8|max:50',
                'password_confirmation' => 'required|min:8|max:50',
                'email' => 'required|email',
                'phone_number' => 'required|numeric|digits_between:7,15',
                'line' => 'required|min:3|max:50',
                'wa' => 'required|numeric|digits_between:7,15',
                'id_instansi' => 'required|numeric|exist:universitas,id',
                'id_fakultas' => 'nullable|required|numeric|exist:fakultas,id',
                'id_prodi' => 'nullable|required|numeric|exist:fakultas,id',
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

    // AJAX GET universitas TYPE
    public function getFakultas(Request $request){
        // SECURITY
            $request->validate([
                'id' => 'required|exists:universitas,id|string'
            ]);
        // END
        
        // MAIN LOGIC
            try {
                $universitas = Universitas::with('Fakultas')->findOrFail($request->id);
                    return response()->json([
                        'status' => 200,
                        'message' => 'berhasil mengambil fakultas',
                        'universitas' => $universitas,
                    ]);
            }catch(ModelNotFoundException $err){

                    return response()->json([
                        'status' => 400,
                        'message' => 'Gagal Data Tidak Ditemukan',
                        'universitas' => (object) [],
                    ],400);
            }
        // END
            
    }

    // AJAX GET PRODI
    public function getProdi(Request $request){
        // SECURITY
            $request->validate([
                'id' => 'required|exists:fakultas,id|numeric'
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
                    'prodi' => (object) [],
                ],400);
            }
        // END
            
    }

    // AJAX GET SEKOLAH
    public function getSekolah(Request $request){
        // SECURITY
            $request->validate([
                'id' => 'required|exists:tipe_sekolahs,id|numeric',
            ]);
        // END

        // MAIN LOGIC
            try{
                $tipe_sekolah = TipeSekolah::with('Sekolah')->findOrFail($request->id);

                return response()->json([
                    'status' => 200,
                    'message' => 'berhasil mengambil sekolah',
                    'sekolahs' => $tipe_sekolah->Sekolah,
                ]);

            }catch(ModelNotFoundException $err){
                return response()->json([
                    'status' => 400,
                    'message' => 'Gagal mengambil sekolah, tidak ada data yang sesuai',
                    'sekolahs' => (object) [],
                ]);
            }
            
    }
}

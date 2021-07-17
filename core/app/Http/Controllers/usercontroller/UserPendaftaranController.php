<?php

namespace App\Http\Controllers\usercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;

use App\Pendaftaran;

class UserPendaftaranController extends Controller
{
    public function index($id = null){
        $validator = Validator::make(['id' => $id],[
            'id' => 'nullable|exists:pendaftarans,id'
        ]);

        if($validator->fails()){
            return Redirect()->Route('user.pendaftaran')->with([
                'status' => 'fail',
                'icon' => 'error',
                'title' => 'Pendaftaran Tidak Ditemukan',
                'message' => 'Mohon untuk memilih opsi yang ada',
            ]);
        }

        // MAIN LOGIC
            if(Pendaftaran::where('status','aktif')->count() > 0){
                try{
                    if($id != null){
                        $pendaftaran = Pendaftaran::with([
                            'Kelas' => function($query){
                                            $query->where('status','buka')->withCount('DetailKelas')->get();
                                        }])
                                        ->whereDate('tanggal_mulai_pendaftaran','<=',date('Y-m-d'))
                                        ->whereDate('tanggal_selesai_pendaftaran','>',date('Y-m-d'))
                                        ->where('status','aktif')->findOrFail($id);
                        
                    }
                    else{
                        $pendaftaran = Pendaftaran::with([
                            'Kelas' => function($query){
                                            $query->where('status','buka')->withCount('DetailKelas')->get();
                                        }])
                                        ->whereDate('tanggal_mulai_pendaftaran','<=',date('Y-m-d'))
                                        ->whereDate('tanggal_selesai_pendaftaran','>',date('Y-m-d'))
                                        ->where('status','aktif')->firstOrFail();
                    }

                    $pendaftaran->setRelation('Kelas',$pendaftaran->Kelas->filter(function($value,$key){
                        if(
                            $value->kuota <= $value->detail_kelas_count ||
                            Carbon::create($value->tanggal_mulai)->diffInMinutes(Carbon::now(),false) >= 0
                        ){
                            return false;
                        }else{
                            return true;
                        }
                    }));

                    // AMBIL SEMUA PENDAFTARAN
                    $semua_pendaftaran = Pendaftaran::where('status','aktif')
                                                        ->whereDate('tanggal_mulai_pendaftaran','<=',date('Y-m-d'))
                                                        ->whereDate('tanggal_selesai_pendaftaran','>',date('Y-m-d'))
                                                        ->get(['id','nama_pendaftaran']);

                    return view('user-dashboard.user-pendaftaran',compact(['pendaftaran','semua_pendaftaran']));

                }catch(ModelNotFoundException $err){
                    return Redirect()->Route('user.pendaftaran')->with([
                        'status' => 'fail',
                        'icon' => 'error',
                        'title' => 'Pendaftaran Tidak Ditemukan',
                        'message' => 'Mohon untuk memilih opsi yang ada',
                    ]);
                }
            }else{
                return Redirect()->Route('user.pendaftaran')->with([
                    'status' => 'fail',
                    'icon' => 'error',
                    'title' => 'Belum Ada Pendaftaran Courses',
                    'message' => 'Mohon tunggu informasi lebih lanjut atau hubungi admin sistem',
                ]);
            }
        // END
    }
}

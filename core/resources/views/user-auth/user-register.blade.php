@extends('layout.auth.user-login-template')

@section('form')
            <img src="{{ asset('asset\image\user-login\temple.png') }}" alt="">
            <div class="form-container animated fadeInUp p-3">
                <form action="{{ Route('user.post.register') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <h4 class="font-weight-bold text-center mt-5" style="margin: auto;">Register</h4>
                    
                    <label for="exampleForm2" class="mt-5">Nama Lengkap <span class="text-danger">*</span></label>
                    @if($errors->has('name'))
                        <input name="name" type="text" placeholder="Sesuai dengan kartu KTP" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('name') }}</small></p>
                    @else
                        <input name="name" type="text" placeholder="Sesuai dengan kartu KTP" class="form-control mt-1">
                    @endif

                    <label for="exampleForm2" class="mt-2">Username <span class="text-danger">*</span></label>
                    @if($errors->has('username'))
                        <input name="username" type="text" placeholder="Penentuan username bebas" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('username') }}</small></p>
                    @else
                        <input name="username" type="text" placeholder="Penentuan username bebas" class="form-control mt-1">
                    @endif

                    <label for="exampleForm2" class="mt-2">Email <span class="text-danger">*</span></label>
                    @if($errors->has('email'))
                        <input name="email" type="text" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('email') }}</small></p>
                    @else
                        <input name="email" type="text" class="form-control mt-1">
                    @endif
                    
                    <label for="exampleForm2" class="mt-2">Phone Number <span class="text-danger">*</span></label>
                    @if($errors->has('phone_number'))
                        <input name="phone_number" type="text" placeholder="Ex. +62999999999 " class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('phone_number') }}</small></p>
                    @else
                        <input name="phone_number" type="text" placeholder="Ex. +62999999999 " class="form-control mt-1">
                    @endif 

                    <label for="exampleForm2" class="mt-2">Line ID <span class="text-danger">*</span></label>
                    @if($errors->has('line'))
                        <input name="line" type="text" placeholder="ID Line Aktif" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('line') }}</small></p>
                    @else
                        <input name="line" type="text" placeholder="ID Line Aktif" class="form-control mt-1">
                    @endif
                    
                    <label for="exampleForm2" class="mt-2" data-toggle="tooltip" title="Nomor WA yang terintegrasi dengan account WA">WA Number <span class="text-danger"> * </span><i class="fas fa-question-circle"></i></label>
                    @if($errors->has('wa'))
                        <input name="wa" type="text" placeholder="Nomor HP terhubung WA" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('wa') }}</small></p>
                    @else
                        <input name="wa" type="text" placeholder="Nomor HP terhubung WA" class="form-control mt-1">
                    @endif

                    <label for="exampleForm2" class="mt-2" data-toggle="tooltip" title="Masukkan password anda pada field ini">Password <span class="text-danger"> * </span><i class="fas fa-question-circle"></i></label>
                    @if($errors->has('password'))
                        <input name="password" type="text" placeholder="8-50 karakter" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('password') }}</small></p>
                    @else
                        <input name="password" type="text" placeholder="8-50 karakter" class="form-control mt-1">
                    @endif

                    <label for="exampleForm2" class="mt-2" data-toggle="tooltip" title="Ulangi password anda pada field ini">Password Confirmation <span class="text-danger"> * </span><i class="fas fa-question-circle"></i></label>
                    @if($errors->has('password_confirmation'))
                        <input name="password_confirmation" type="text" placeholder="8-50 karakter" class="form-control mt-1 border border-danger">
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('password_confirmation') }}</small></p>
                    @else
                        <input name="password_confirmation" type="text" placeholder="8-50 karakter" class="form-control mt-1">
                    @endif

                    <label for="exampleForm2" class="mt-2" data-toggle="tooltip" title="Instansi asal pendaftar apabila tidak berasal dari instansi yang ada silahkan pilih opsi UMUM">Instansi <span class="text-danger"> * </span><i class="fas fa-question-circle"></i></label>
                    @if($errors->has('instansi'))
                        <select name="instansi" onchange="ajaxGetFakultas(this.value)" type="text" placeholder="Pilih Instansi" class="browser-default custom-select border border-danger">
                            @foreach($instansis as $instansi)
                                <option value="{{ $instansi->id }}">{{ $instansi->nama }}</option>
                            @endforeach
                        </select>
                        <p class="text-danger animated slideInUp"><small>{{ $errors->first('instansi') }}</small></p>
                    @else
                        <select name="instansi" onchange="ajaxGetFakultas(this.value)" id="instansi" type="text" placeholder="Pilih Instansi" class="browser-default custom-select">
                            <option value="" selected>Pilih Instansi</option>
                            @foreach($instansis as $instansi)
                                <option value="{{ $instansi->id }}">{{ $instansi->nama_instansi }}</option>
                            @endforeach
                        </select>
                    @endif

                    <div id="fakultas_wrapper" style="display:none;">
                        <label class="mt-2" data-toggle="tooltip" title="Fakultas tempat pendaftar menempuh pendidikan">Fakultas <span class="text-danger"> * </span><i class="fas fa-question-circle"></i></label>
                        @if($errors->has('fakultas'))
                            <select name="fakultas" onchange="ajaxGetProdi(this.value)" id="fakultas_input" type="text" placeholder="Pilih fakultas" class="browser-default custom-select border border-danger">
                                
                            </select>
                            <p class="text-danger animated slideInUp"><small>{{ $errors->first('fakultas') }}</small></p>
                        @else
                            <select name="fakultas" onchange="ajaxGetProdi(this.value)" id="fakultas_input" type="text" placeholder="Pilih fakultas" class="browser-default custom-select">
                                
                            </select>
                        @endif
                    </div>

                    <div id="prodi_wrapper" style="display:none;">
                        <label class="mt-2" data-toggle="tooltip" title="Program Studi tempat pendaftar menempuh pendidikan">Program Studi <span class="text-danger"> * </span><i class="fas fa-question-circle"></i></label>
                        @if($errors->has('prodi'))
                            <select name="prodi" id="prodi_input" type="text" placeholder="Pilih Program Studi" class="browser-default custom-select border border-danger">
                                
                            </select>
                            <p class="text-danger animated slideInUp"><small>{{ $errors->first('prodi') }}</small></p>
                        @else
                            <select name="prodi" id="prodi_input" type="text" placeholder="Pilih Program Studi" class="browser-default custom-select">
                                
                            </select>
                        @endif
                    </div>

                    <button class="btn btn-block btn-success mt-5" type="submit">REGISTER</button>
                    <a class="btn btn-block btn-danger mt-1" href="{{ route('user.landing-page') }}">BACK</a>

                    <p class="text-center mt-4">Already have an account ? <a href="{{ Route('user.login') }}">Login Here</a></p>
                    <p class="text-center mt-4">Visit us on</p>

                    <div class="d-flex justify-content-center mb-4">
                        @if(isset($social_medias))
                            @foreach($social_medias as $social_media)
                                <a  data-toggle="tooltip" title="{{ $social_media->keterangan }}" href="{{ $social_media->link }}" class="m-1"><img style="height:30px;width:30px;position:relative;" src="{{ url('asset\image\social-media',[$social_media->social_media_image]) }}" alt="social_media_image"></a>
                            @endforeach
                        @endif
                    </div>
                </form>
            </div>
@endsection

@push('bottom_source')
<script>
    $(document).ready(function(){
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    });

    function ajaxGetFakultas(id_instansi){
        // RESET VALUE FAKULTAS DAN PRODI
        $('#fakultas_input').html('<option value="" selected>Pilih Fakultas</option>');
        $('#fakultas_wrapper').css("display","none");
        $('#prodi_input').html('<option value="" selected>Pilih Prodi</option>');
        $('#prodi_wrapper').css("display","none");

        // APABILA NILAI ID TIDAK SAMA DENGAN NULL DAN TIDAK KOSONG MAKA AKAN MENGIRIM AJAX REQUEST
        if(id_instansi != "" && id_instansi != null){
            $.ajax({
                data : {
                    '_token' : "{{ csrf_token() }}",
                    'id' : id_instansi
                },

                method: "POST",

                url: "{{ Route('user.ajax.getFakultas') }}",

                }).done(function( msg ) {
                    try{
                        console.log(msg)
                        if(msg.fakultas.length > 0 && msg.instansi.tipe_instansi == 'universitas'){
                            showFakultas(msg.fakultas);
                        }else{
                            console.log("Tidak ada data fakultas");
                        }
                    }catch(err){
                        console.log(err)
                    }
                }).fail(function(msg){
                    alert("Terjadi Kesalahan, Apabila diperlukan silahkan menghubungi contact TCI Udayana");
                });
        }

    }

    function showFakultas(fakultas){
        let fakultas_option = '<option value="" selected>Pilih Fakultas</option>';

        fakultas.forEach(function(fakult){
            try{
                fakultas_option += '<option value="'+fakult.id+'">'+fakult.nama_fakultas+'</option>'
            }catch(err){
                return
            };
        });

        $('#fakultas_input').html(fakultas_option);
        $('#fakultas_wrapper').css("display","block");
    }

    function ajaxGetProdi(id_fakultas){
        // RESET VALUE FAKULTAS DAN PRODI
        $('#prodi_input').html('<option value="" selected>Pilih Prodi</option>');
        $('#prodi_wrapper').css("display","none");

        // APABILA NILAI ID TIDAK SAMA DENGAN NULL DAN TIDAK KOSONG MAKA AKAN MENGIRIM AJAX REQUEST
        if(id_fakultas != '' && id_fakultas != null){
            $.ajax({
                data : {
                    '_token' : "{{ csrf_token() }}",
                    'id' : id_fakultas
                },

                method: "POST",

                url: "{{ Route('user.ajax.getProdi') }}",

                }).done(function( msg ) {
                    try{
                        if(msg.status == 200 && msg.prodi.length > 0){
                            showProdi(msg.prodi);
                        }else{
                            console.log('tidak ada data prodi');
                        }
                    }catch(err){
                        console.log(err)
                    }
                }).fail(function(msg){
                    alert("Terjadi Kesalahan, Apabila diperlukan silahkan menghubungi contact TCI Udayana");
                });
        }

    }

    function showProdi(prodis){
        let prodi_option = '<option value="" selected>Pilih Prodi</option>';

        prodis.forEach(function(prodi){
            try{
                prodi_option += '<option value="'+prodi.id+'">'+prodi.nama_prodi+'</option>'
            }catch(err){
                return
            };
        });

        $('#prodi_input').html(prodi_option);
        $('#prodi_wrapper').css("display","block");
    }
</script>
@endpush
@extends('layout.auth.user-login-template')

@section('form')
<img src="{{ asset('asset\image\user-login\temple.png') }}" alt="">
            <div class="form-container animated fadeInUp">
                <form action="">
                <h4 class="font-weight-bold text-center mt-5">Selamat Datang</h4>

                <label for="exampleForm2" class="mt-5">Email</label>
                <input type="text" id="exampleForm2" class="form-control mt-1">
                
                <label class="mt-3" for="exampleForm2">Password</label>
                <input type="text" id="exampleForm2" class="form-control mt-1">
                

                <div class="row mt-3">
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
                            <label class="custom-control-label" for="defaultUnchecked">Remember me</label>
                        </div>
                    </div>
                    <div class="col">
                        <a href="">
                            <p class="w-100 text-right"><u>Lupa Password ?</u></p>
                        </a>
                    </div>
                </div>

                <button class="btn btn-block btn-success mt-5">LOGIN</button>

                <p class="text-center mt-4">Dont have an account ? <a href="">Register Here</a></p>
                <p class="text-center mt-1">Visit us on</p>

                <div class="d-flex justify-content-center">
                    <div class="m-1"><img style="height:30px;width:30px;position:relative;" src="{{ asset('asset\image\main_asset\logo-fb.png') }}" alt=""></div>
                    <div class="m-1"><img style="height:30px;width:30px;position:relative;" src="{{ asset('asset\image\main_asset\logo-ig.png') }}" alt=""></div>
                    <div class="m-1"><img style="height:30px;width:30px;position:relative;" src="{{ asset('asset\image\main_asset\logo-twitter.png') }}" alt=""></div>
                </div>
                

                </form>
            </div>
@endsection

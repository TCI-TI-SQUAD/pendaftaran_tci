@extends('layout.main-layout.main-layout')

@push('css')
<link href="{{ asset('asset\css\layout-css\user-dashboard-layout.css') }}" rel="stylesheet">
@endpush

@section('navigation-wide')
                    <li>        
                        <a class="text-dark font-weight-bold" href="">Home</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Pendaftaran</a>
                    </li>
                    <li  class="pr-2">
                        <a class="text-dark" href="">Kelas Saya</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Profile</a>
                    </li>
                    <li>
                        <a href="">
                            <button type="button" class="btn btn-outline-danger waves-effect">Log Out</button>
                        </a>
                    </li>
@endsection

@section('navigation-small')
            <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="fas fa-home"></i></div>
                    <div style="flex-grow:2;margin:10px;">Home</div>
            </div>
        
            <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="fas fa-question"></i></div>
                    <div style="flex-grow:2;margin:10px;">Pendaftaran</div>
            </div>

            <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="far fa-address-book"></i></div>
                    <div style="flex-grow:2;margin:10px;">Kelas Saya</div>
            </div>

            <a href="" style="text-decoration:none;" class="text-dark">
                <div class="navigation-block-child mt-3">
                        <div class="text-center" style="margin:10px;width:50px;"><i class="fas fa-sign-in-alt"></i></div>
                        <div style="flex-grow:2;margin:10px;">Profile</div>
                </div>
            </a>

            <a href="" style="text-decoration:none;" class="text-dark">
                <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="far fa-registered"></i></div>
                    <div style="flex-grow:2;margin:10px;">Log Out</div>
                </div>
            </a>
@endsection

@push('js')
<script>
        $(document).ready(function(){

            $('#navigation-button').click(function(){
                $('#navigation-block').toggleClass('active');
            })

            $('#navigation-button-close').click(function(){
                $('#navigation-block').toggleClass('active');
            })
        });
    </script>
@endpush
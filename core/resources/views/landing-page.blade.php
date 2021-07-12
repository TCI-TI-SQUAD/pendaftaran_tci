@extends('layout.main-layout.main-layout')

@push('css')
<link href="{{ asset('asset\css\layout-css\layout-css.css') }}" rel="stylesheet">
<link href="{{ asset('asset\css\lading-page\user-landing-page.css') }}" rel="stylesheet">
@endpush

@section('navigation-small')
            <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="fas fa-home"></i></div>
                    <div style="flex-grow:2;margin:10px;">Home</div>
            </div>
        
            <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="fas fa-question"></i></div>
                    <div style="flex-grow:2;margin:10px;">About</div>
            </div>

            <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="far fa-address-book"></i></div>
                    <div style="flex-grow:2;margin:10px;">Contact</div>
            </div>

            <a href="{{ Route('user.login') }}" style="text-decoration:none;" class="text-dark">
                <div class="navigation-block-child mt-3">
                        <div class="text-center" style="margin:10px;width:50px;"><i class="fas fa-sign-in-alt"></i></div>
                        <div style="flex-grow:2;margin:10px;">Log In</div>
                </div>
            </a>

            <a href="{{ Route('user.register') }}" style="text-decoration:none;" class="text-dark">
                <div class="navigation-block-child mt-3">
                    <div class="text-center" style="margin:10px;width:50px;"><i class="far fa-registered"></i></div>
                    <div style="flex-grow:2;margin:10px;">Register</div>
                </div>
            </a>
@endsection

@section('navigation-wide')
                    <li>        
                        <a class="text-dark font-weight-bold" href="">Home</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">About</a>
                    </li>
                    <li  class="border-right pr-2">
                        <a class="text-dark" href="">Contact</a>
                    </li>
                    <li>
                        <a class="text-dark" href="{{ Route('user.login') }}">Log In</a>
                    </li>
                    <li>
                        <a href="{{ Route('user.register') }}">
                            <button type="button" class="btn btn-outline-success btn-register waves-effect">Register Here</button>
                        </a>
                    </li>
@endsection

@push('css')
<link href="{{ asset('asset\vendor\flipdown-master\dist\flipdown.min.css') }}" rel="stylesheet">
@endpush

@section('content')
            <div class="big-image"> 
                <img src="{{ asset('asset\image\landing-page\lampion.webp') }}" alt="lampion.webp" class="z-depth-2">
            </div>

            <div class="real-content">
                <div>
                    <h3><span style="color:#4B0C0D;font-weight:bold;">Belajar Bahasa Mandarin</span> Menjadi Mudah <span style="color:#4B0C0D;font-weight:bold;">Bersama Kami</span></h3>
                </div>

                <div class="swiper-container mySwiper pb-4 m-2">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <div class="m-3">
                                    <h5 class="text-center m-3"><b>Pendaftaran Batch A</b></h5>
                                    <div id="flipdown" class="flipdown"></div>
                                </div>
                        </div>

                        <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <div class="m-3">
                                    <h5 class="text-center m-3"><b>Pendaftaran Batch A</b></h5>
                                    <div id="flipdown2" class="flipdown"></div>
                                </div>
                        </div>

                        <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <div class="m-3">       
                                    <h5 class="text-center m-3"><b>Pendaftaran Batch A</b></h5>
                                    <div id="flipdown3" class="flipdown"></div>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('asset\vendor\flipdown-master\dist\flipdown.min.js') }}"></script>

<script>
    $(document).ready(function(){

        $('#navigation-button').click(function(){
            $('#navigation-block').toggleClass('active');
        })

        $('#navigation-button-close').click(function(){
            $('#navigation-block').toggleClass('active');
        })
        let flipdown = new FlipDown(1626111730,'flipdown');
            flipdown.start();
        let flipdown2 = new FlipDown(1626111730,'flipdown2');
            flipdown2.start();
        let flipdown3 = new FlipDown(1626111730,'flipdown3');
            flipdown3.start();
    });
</script>

    
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            },
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
        });
    </script>
@endpush
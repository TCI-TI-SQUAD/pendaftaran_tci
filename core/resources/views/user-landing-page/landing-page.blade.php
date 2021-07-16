@extends('layout.main-layout.main-layout')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link href="{{ asset('asset\vendor\flipdown-master\dist\flipdown.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset\css\layout-css\layout-css.css') }}" rel="stylesheet">
<link href="{{ asset('asset\css\lading-page\user-landing-page.css') }}" rel="stylesheet">
@endpush

@section('navigation-small')
    @include('user-landing-page.user-landing-page-nav.user-landing-page-nav-small',['home' => 'active'])
@endsection

@section('navigation-wide')
    @include('user-landing-page.user-landing-page-nav.user-landing-page-nav-wide',['home' => 'active'])
@endsection

@section('content')
            <div class="big-image animated slideInLeft"> 
                <img src="{{ asset('asset\image\landing-page\lampion.webp') }}" alt="lampion.webp" class="z-depth-2">
            </div>

            <div class="real-content animated slideInRight">
                <div>
                    <h3><span style="color:#4B0C0D;font-weight:bold;">Belajar Bahasa Mandarin</span> Menjadi Mudah <span style="color:#4B0C0D;font-weight:bold;">Bersama Kami</span></h3>
                </div>

                <div class="swiper-container mySwiper pb-4">

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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

        // SWEETALERT2
            @if(Session::has('status'))
                Swal.fire({
                    icon:  @if(Session::has('icon')){!! '"'.Session::get('icon').'"' !!} @else 'question' @endif,
                    title: @if(Session::has('title')){!! '"'.Session::get('title').'"' !!} @else 'Oppss...'@endif,
                    text: @if(Session::has('message')){!! '"'.Session::get('message').'"' !!} @else 'Oppss...'@endif,
                });
            @endif
        // END
    </script>
@endpush
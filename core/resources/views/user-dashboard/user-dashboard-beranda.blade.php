@extends('layout.main-layout.main-layout')

@push('css')
<link href="{{ asset('asset\vendor\flipdown-master\dist\flipdown.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset\css\layout-css\layout-css.css') }}" rel="stylesheet">
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
                            <button type="button" class="btn btn-outline-danger btn-logout waves-effect">Log Out</button>
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

@section('content')

    <!-- PROFILE -->
    <div class="profile-wrapper p-2">
        <!-- Card -->
        <div class="card z-depth-1" style="height:100%;">

        <!-- Card content -->
        <div class="card-body">

        <div class="container">
            <div class="row">
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <img class="rounded-circle z-depth-1" src="{{ asset('asset\image\main_asset\no_pic_user.png') }}" alt="" style="width:100px; height:100px;">
                </div>

                <div class="col text-left mt-3">
                    <h5 style="font-size:18px;"><b>Good Morning !</b></h5>
                    <h5 style="font-size:12px;">Alsan</h5>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <!-- Default input -->
                    <label for="exampleForm2">No Pelajar</label>
                    <input type="text" id="exampleForm2" class="form-control" value="1805551029" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <!-- Default input -->
                    <label for="exampleForm2">Nama Pelajar</label>
                    <input type="text" id="exampleForm2" class="form-control" value="I Putu Alin Winata Gotama" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <!-- Default input -->
                    <label for="exampleForm2">Email</label>
                    <input type="text" id="exampleForm2" class="form-control" value="alingotama14@gmail.com" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <!-- Default input -->
                    <label for="exampleForm2">No HP.</label>
                    <input type="text" id="exampleForm2" class="form-control" value="081246082357" readonly>
                </div>
            </div>
        </div>

        </div>

        </div>
        <!-- Card -->
    </div>
    <!-- END PROFILE -->

    <!-- COUNTDOWN -->
    <div class="countdown">
            <!-- Swiper -->
            <div class="swiper-container mySwiper pb-4 card m-2 z-depth-1">

                <div class="swiper-wrapper">
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                            <div class="m-3">
                                <h5 class="text-center m-3">Pendaftaran Batch A</h5>
                                <div id="flipdown" class="flipdown"></div>
                            </div>
                    </div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                            <div class="m-3">
                                <h5 class="text-center m-3">Pendaftaran Batch A</h5>
                                <div id="flipdown2" class="flipdown"></div>
                            </div>
                    </div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                            <div class="m-3">       
                                <h5 class="text-center m-3">Pendaftaran Batch A</h5>
                                <div id="flipdown3" class="flipdown"></div>
                            </div>
                    </div>
                </div>
                
                <div class="swiper-pagination"></div>

            </div>
    </div>
    <!-- END COUNTDOWN -->

    <!-- PENGUMUMAN -->
    <div class="pengumuman p-2" style="white-space: nowrap;">

        <div class="card card-pengumuman"  style="white-space: normal;">
            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="{{ asset('asset\image\main_asset\barong.png') }}"
                alt="Card image cap">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illum earum. Autem voluptatem alias culpa fugiat vitae quasi quibusdam voluptates explicabo dicta quaerat quam incidunt odio sint deleniti, mollitia facilis.</p>
                <!-- Button -->

            </div>
        </div>

        <div class="card card-pengumuman"  style="white-space: normal;">
            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="{{ asset('asset\image\main_asset\barong.png') }}"
                alt="Card image cap">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illum earum. Autem voluptatem alias culpa fugiat vitae quasi quibusdam voluptates explicabo dicta quaerat quam incidunt odio sint deleniti, mollitia facilis.</p>
                <!-- Button -->

            </div>
        </div>

        <div class="card card-pengumuman"  style="white-space: normal;">
            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="{{ asset('asset\image\main_asset\barong.png') }}"
                alt="Card image cap">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, illum earum. Autem voluptatem alias culpa fugiat vitae quasi quibusdam voluptates explicabo dicta quaerat quam incidunt odio sint deleniti, mollitia facilis.</p>
                <!-- Button -->

            </div>
        </div>
        
    </div>
    <!-- END PENGUMUMAN -->

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
        let flipdown = new FlipDown(1625868870,'flipdown');
            flipdown.start();
        let flipdown2 = new FlipDown(1625868870,'flipdown2');
            flipdown2.start();
        let flipdown3 = new FlipDown(1625868870,'flipdown3');
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
@extends('layout.main-layout.main-layout')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link href="{{ asset('asset\vendor\flipdown-master\dist\flipdown.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset\css\user\user-pendaftaran.css') }}" rel="stylesheet">
@endpush

@section('navigation-wide')
                    <li>        
                        <a class="text-dark" href="">Home</a>
                    </li>
                    <li>
                        <a class="text-dark font-weight-bold" href="">Pendaftaran</a>
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

@section('content')

    <!-- DROPDOWN -->
    <div class="dropdown p-2 animated slideInLeft">
        <!-- Split button -->
        <div class="btn-group">
        <button type="button" class="btn">Pendaftaran</button>
        <button type="button" class="btn dropdown-toggle px-3 bg-primary" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Kerjasama TCI A</a>
            <a class="dropdown-item" href="#">TCI Free Class B</a>
        </div>
        </div>
    </div>
    <!-- END DROPDOWN -->

    <!-- KELAS -->
    <div class="kelas p-3 m-3 animated slideInUp jumbotron border-secondary" style="border-top:10px solid;">
        <!-- Card -->
        <div class="card">

            <!-- Card image -->
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

            <!-- Card content -->
            <div class="card-body text-center">

                <!-- Title -->
                <h4 class="card-title"><a>Kelas HSK 1 (A)</a></h4>
                <!-- Text -->
                <div class="row mt-3">

                    <div class="col">
                        <img src="" alt="" class="img-thumbnail rounded-circle bg-primary" style="width:50px;height:50px;">
                    </div>

                </div>
                <div class="row">

                    <div class="col">
                        <p>Miss Luo Yang</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        Kuota 25 / 50
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-primary">Jadwal</a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-success">Ikuti</a>
                    </div>
                </div>
                <!-- Button -->

            </div>

        </div>

    </div>
    <!-- END KELAS -->
    
    <!-- PENGUMUMAN -->
    <div class="pengumuman animated slideInRight">
        <div class="swiper-container mySwiper jumbotron  m-3 p-2 border-secondary" style="border-top:10px solid;">

            <div class="swiper-wrapper mb-5" style="height:50vh;overflow-x:hidden;">

                <div class="swiper-slide">
                            
                            <!-- CARD -->
                            <div class="card-pengumuman">

                                <h5>TITLE PENGUMUMAN</h5>

                                <p>
                                    <strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.
                                </p>

                                <p>
                                    Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.
                                </p>

                                <h2>
                                    Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a>
                                </h2>

                                <p>
                                    Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:
                                </p>

                                <blockquote>
                                    <p>
                                        One small step for [a] man, one giant leap for mankind.
                                    </p>
                                </blockquote>

                                <h2>
                                    Technical details <a id="tech-details" name="tech-details"></a>
                                </h2>

                                <table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
                                    <caption>
                                        <strong>Mission crew</strong>
                                    </caption>
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                Position
                                            </th>
                                            <th scope="col">
                                                Astronaut
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Commander
                                            </td>
                                            <td>
                                                Neil A. Armstrong
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Command Module Pilot
                                            </td>
                                            <td>
                                                Michael Collins
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lunar Module Pilot
                                            </td>
                                            <td>
                                                Edwin &quot;Buzz&quot; E. Aldrin, Jr.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p>
                                    Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>&#39;s Apollo program. The Apollo spacecraft had three parts:
                                </p>

                                <ol>
                                    <li>
                                        <strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth
                                    </li>
                                    <li>
                                        <strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water
                                    </li>
                                    <li>
                                        <strong>Lunar Module</strong> for landing on the Moon.
                                    </li>
                                </ol>

                                <p>
                                    After being sent to the Moon by the Saturn V&#39;s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.
                                </p>

                                <hr>
                                <p>
                                    <small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small>
                                </p>


                            </div>
                            <!-- END CARD -->

                </div>

                <div class="swiper-slide d-flex justify-content-center align-items-center">
                        a
                            
                </div>

                <div class="swiper-slide d-flex justify-content-center align-items-center">
                               
                        b
                </div>
            </div>
            
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- END PENGUMUMAN -->

@endsection

@push('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
<script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
            delay: 3000,
            disableOnInteraction: true,
            },
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            }
        });
</script>
@endpush
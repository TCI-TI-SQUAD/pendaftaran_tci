<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('asset\css\lading-page\user-landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('asset\vendor\mdbootstrap\css\bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset\vendor\mdbootstrap\css\mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset\vendor\fontawesome\css\all.min.css') }}" rel="stylesheet">

</head>
<body>
    <!-- WRAPPER -->
    <div class="wrapper">
        <div class="nav z-depth-1">
            <div class="logo-wrapper">
                <img src="{{ asset('asset\image\main_asset\logo.png') }}" alt="">
            </div>

            <div class="nav-wrapper">
                <ul>
                    <li>
                        <a class="text-dark" href="">Home</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">About</a>
                    </li>
                    <li  class="border-right pr-2">
                        <a class="text-dark" href="">Contact</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Log In</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pendaftaran_tci/public/user/register">
                    <button type="button" class="btn btn-outline-success waves-effect">Register Here</button>
                    </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content">
            b
        </div>

        <div class="footer">
            <img src="{{ asset('asset\image\main_asset\footer.png') }}" alt="">
            
        </div>
    </div>
    <!-- END WRAPPER -->
    <script type="text/javascript" src="{{ asset('asset\vendor\mdbootstrap\js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset\vendor\mdbootstrap\js\popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset\vendor\mdbootstrap\js\bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset\vendor\mdbootstrap\js\mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset\vendor\fontawesome\js\all.min.js') }}"></script>
</body>
</html>
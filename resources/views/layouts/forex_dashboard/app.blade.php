<!DOCTYPE html>
<html lang="{{ @session('lang') }}" dir="{{ @session('lang')=='ar' ? 'rtl' : 'ltr' }}">
    <head>
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@pratikborsadiya">
        <meta property="twitter:creator" content="@pratikborsadiya">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Pro Traders">
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="A group specialized in providing the best forex services in the Arab world, educational courses, free recommendations, free strategies and indicators, and analyzes">
        <title>Pro Traders</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_files/css/main.css') }}">
        @yield('headScripts')

        <style>
            :root {
                --color-primary: #eb2f64;
                --color-primary-light: #FF3366;
                --color-primary-dark: #BA265D;

                --grey-light-1: #faf9f9;
                --grey-light-2: #f4f2f2;
                --grey-light-3: #f0eeee;
                --grey-light-4: #ccc;

                --grey-dark-1: #333;
                --grey-dark-2: #777;
                --grey-dark-3: #999;

                --shadow-dark: 0 2rem 6rem rgba(0, 0, 0, 0.3);
                --shadow-light:0 2rem 5rem rgba(0,0,0,.06);

                --line: 1px solid var(--grey-light-2);
            }
            .table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                margin:0 auto
            }
            @media(min-width:1000px) {
                .table {
                    width:80% !important;
                    margin-bottom:30px;
                }
            }
            .table td,th {
                padding-top:1rem !important;
                padding-bottom:1rem !important;
                padding-right: 5px !important ;
                padding-left: 5px !important ;
                border: 5px solid #99ccff;
                color:#fff;
                font-size:25px;
            }
            @media(max-width:700px) {
                .table td,th {
                    font-size:15px !important;

                }
                p{
                    font-size:10px !important;
                }
                .fa-arrow-up , .fa-arrow-down , .fa-arrow-right {
                    font-size:20px !important;
                }
            }

            @media(max-width:1200px) {
                .table{
                    margin-bottom:30px;
                }

                .table td,th {
                    font-size:14px !important;
                }
                p {
                    font-size:14px !important;
                }
                .fa-arrow-up , .fa-arrow-down , .fa-arrow-right {
                    font-size:20px !important;
                }
            }

            .padding-O {
                padding:18px !important
            }

            .table th{
                border: 5px solid #FFF;
                color: #fff;
            }

            .table td:nth-child(1) {
                color: yellow;
                background-color:transparent !important;
            }

            .buy{
                color: #24a69a;
            }
            .sell{
                color: #de5859;
            }

            .search_input {
                display: block;
                font-family: inherit;
                font-size: 1.3rem;
                color: black;
                background-color:  var(--grey-light-2);
                border: none;
                padding: .7rem 2rem;
                border-radius: 10rem;
                width: 10%;
                margin-left: auto;
                margin-bottom: 0.3rem;
                transition: all 0.2s;
            }

            .search_input:focus {
                background-color: var(--grey-light-3);
                outline: none;
                width: 15%;
            }

            .search_input::placeholder {
                font-weight: 100;
                color: var(--grey-dark-3);
            }

            .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav
            .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
                color: rgba(255, 255, 255, 0.9) !important;
            }

            .navbar-light .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.7);
            }

            .navbar-light .navbar-toggler {
                color: rgba(0, 0, 0, 0.5);
                border-color: rgba(0, 0, 0, 0.1);
                background-color: #FFF;
            }

            @media (min-width: 992px) {
                .navbar-expand-lg .navbar-nav .nav-link {
                    color: #FFF;
                    font-size: 14px;
                    margin-left:10px
                }
            }
        </style>
    </head>
    <body class="app sidebar-mini" style="background-color:rgb(19, 23, 34);">
        @include('layouts.forex_dashboard._header')
        @include('layouts.forex_dashboard._aside')
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 col-sm-6 ml-auto main-div">
                    <div class="pt-md-5 mt-md-3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @yield('scripts')
        <script src="{{ asset('dashboard_files/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/main.js') }}"></script>
    </body>
</html>

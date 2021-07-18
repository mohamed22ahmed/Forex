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
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="app sidebar-mini">

        @include('layouts.dashboard._header')
        @include('layouts.dashboard._aside')
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto main-div">
                    <div class="pt-md-5 mt-md-3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('dashboard_files/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/main.js') }}"></script>
    </body>
</html>

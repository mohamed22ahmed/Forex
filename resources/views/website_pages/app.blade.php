<html lang="{{ @session('lang') }}" dir="{{ @session('lang')=='ar' ? 'rtl' : 'ltr' }}">
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>

	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">

	   <!--First mobilw meta-->
       <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pro Traders</title>
        <link rel = "icon" href ="{{ asset('website_home/imag/logo.png') }}" type = "image/x-icon">
        <link rel="shortcut icon" href="{{ asset('website_home/imag/logo.png') }}">
        <!--call bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	    {{-- <link rel="stylesheet"href="{{ asset('website_home/css/bootstrap.css') }}"/> --}}
        <!--Page Style-->
        <link rel="stylesheet"href="{{ asset('website_home/css/main.css') }}"/>

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <!--Animate.css-->
       <link rel="stylesheet"href="{{ asset('website_home/css/animate.min.css') }}"/>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">


       <!--Internet Explorer-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	    <script src="{{ asset('website_home/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('website_home/js/respond.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <script> window.default_locale_lang = "{{ config('app.locale') }}"; </script>
       <!---->

        <style>
           .navbar-toggler:not(:disabled):not(.disabled) {
                cursor: pointer;
                background: #FFF;
            }
           .li-cat {
            cursor: pointer;
            top: 0px;
            overflow: visible;
            padding-bottom: 0px;
            font-family: Roboto;
            font-size: 14px;
            color: rgb(136, 136, 136);
            line-height: 1.2;
            padding-top: 1px;
            border-radius: 0px;
           }
           .dropdown-toggle::after {
                display: none;
            }
            .nav-item:last-of-type {
                padding: 0 20px;
                margin-left: 5px;
                background: -webkit-linear-gradient(left, #9473dd 0%, #1ac9e4 100%);
                border-radius: 20px;
                -o-border-radius: 20px;
                -ms-border-radius: 20px;
                -moz-border-radius: 20px;
                -webkit-border-radius: 20px;
            }
            .footer__title {
                color: #FFF;
            }
            #footer a , #footer li {
                color: #999 !important;
            }
        </style>
       @yield('header_style')
    </head>
	<body class="{{ session('mood')=='dark'?'dark-mood':'light-mood' }} change">
        @if(Session('lang')=='ar')
            {{ App::setLocale('ar') }}
        @endif
        <!--- Header Section-->
        <div class="Nav wow fadeInUp">
            <nav class="navbar navbar-expand-lg navbar-light-mood"  style="width:100%;">
                    <img src="{{asset('website_home/imag/logo.png')}}" style="width:180px;height:150px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav">
                            <li class="nav-item pr-5">
                                <a  class="nav-link nav-contact" href="/"  style="margin-top: 10px;font-weight: bold">@lang('website.home')</a>
                            </li>
                            @if(Request::is('/'))
                                <li class="nav-item pr-5">
                                    <a class="nav-link nav-contact" href="#about"  style="margin-top: 10px;font-weight: bold">@lang('website.about_us')</a>
                                </li>
                                <li class="nav-item pr-5">
                                    <a class="nav-link nav-contact"  style="margin-top: 10px;font-weight: bold" href="#services">@lang('website.services')</a>
                                </li>
                            @endif
                            <li class="nav-item pr-5">
                                <a class="nav-link nav-contact"  style="margin-top: 10px;font-weight: bold" href="/contact">@lang('website.contact')</a>
                            </li>
                            <li class="nav-item dropdown  position-relative pr-5">
                                <a class="nav-link nav-contact" data-toggle="dropdown" href="#" style="margin-top: 10px;font-weight: bold">
                                    @lang('website.mode')
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-0">
                                    <a class="dropdown-item {{ @session('mood')=='light'? 'active':''}} nav-light light" href="/mood/light" style="padding-bottom:12px;font-weight:bold;font-size:15px">@lang('website.light')</a>
                                    <a class="dropdown-item {{ @session('mood')=='dark'? 'active':''}} nav-light dark" href="/mood/dark" style="font-weight:bold;font-size:15px">@lang('website.dark')</a>
                                </div>
                            </li>
                            {{--  language settings  --}}
                            <li class="nav-item dropdown  position-relative pr-5">
                                <a class="nav-link nav-contact" data-toggle="dropdown" href="#">
                                    <i  @if(config('app.locale', 'en')=='en') class="flag-icon flag-icon-us "  @else class="flag-icon flag-icon-sa"  @endif  style="width:30px;height:30px;margin-top: 5px;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-0">
                                    <a href="/lang/en" style="font-weight:bold;font-size:18px"  class="{{ @session('lang')=='en'? 'dropdown-item active':'dropdown-item'}}">
                                    <i class="flag-icon flag-icon-us mr-2"></i> English
                                    </a>
                                    <a href="/lang/ar" style="font-weight:bold;font-size:18px"  class="{{ @session('lang')=='ar'? 'dropdown-item active':'dropdown-item'}}">
                                    <i class="flag-icon flag-icon-sa mr-2"></i> اللغة العربية
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item shadow-sm" style="{{ config('app.locale', 'en')=='ar'?'margin-right:20px;width:100px':'' }}"><a style="font-weight: bold" class="nav-link nav-contact px-2 py-4" style="color: #FFF !important;" href="/get_started">@lang('website.get_start')</a></li>
                        </ul>
                    </div>
            </nav>
        </div>

        @yield('content')

        <footer class="footer" id="footer" style="background-color:#192057 !important ; color: #FFF !important;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer__title">@lang('website.links')</div>
                        <ul class="unstyled-list">
                            <li> <a href="/">@lang('website.home')</a></li>
                            <li> <a href="/contact">@lang('website.contact')</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="footer__title">@lang('website.contact')</div>
                        <ul class="unstyled-list">
                            <li><i class="fab fa-whatsap mr-3 text-primary"></i>  (+02) 01001196902 </li>
                            <li><i class="fas fa-mail-bulk mr-3 text-primary"></i> @lang('website.telegram'): https://t.me/AmirNady </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        @yield('scripts')
        <script src="http://4soft-eg.net/front/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="http://4soft-eg.net/front/js/gmaps.js"></script>
        <script src="{{ asset('website_home/js/particles.js') }}"></script>
        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="{{ asset('website_home/js/wow.min.js') }}"></script>
        <script>new WOW().init();</script>
        <script src="{{ asset('website_home/js/jQuery3.3.1.min.js') }}"></script>
        <!---Slider Laibiray-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('website_home/js/sliderComponents.js') }}"></script>
        <script src="{{ asset('website_home/js/e.js') }}"></script>
	</body>
</html>


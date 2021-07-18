<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>

	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">

	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"content="mt company">
        <title>Forex</title>
        <link rel = "icon" href ="{{ asset('website_home/imag/finalwhite-01.png') }}" type = "image/x-icon">
        <!--call bootstrap-->
	    <link rel="stylesheet"href="{{ asset('forex/css/bootstrap.css') }}"/>
        <!--Page Style-->
        <link rel="stylesheet"href="{{ asset('forex/css/main.css') }}"/>
       <!--Animate.css-->
       <link rel="stylesheet"href="{{ asset('forex/css/animate.min.css') }}"/>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
       <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
       <script src="https://kit.fontawesome.com/ef503aa28e.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
	    <script src="{{ asset('forex/js/html5shiv.min.js') }}"></script>
       <script src="{{ asset('forex/js/respond.min.js') }}"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

        <style>
           table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                margin:0 auto
            }
            .padding-O {
                padding:18px !important
            }
            @media(min-width:900px) {
				table {
					width:80% !important
				}
    		}

			td, th {
			padding-top:1rem !important;
			padding-bottom:1rem !important;
			padding-right: 0 !important ;
			padding-left: 0 !important ;
			border: 5px solid #99ccff;
			color:#FFF;
			font-size:25px;
			}
			@media(max-width:700px) {
				td,th {
					font-size:10px !important;
				}
				p {
					font-size:10px !important;
				}
				.fa-arrow-up , .fa-arrow-down , .fa-arrow-right {
					font-size:10px !important;
				}
			}
			@media(max-width:1200px) {
				td,th {
					font-size:14px !important;
				}
				p {
					font-size:14px !important;
				}
				.fa-arrow-up , .fa-arrow-down , .fa-arrow-right {
					font-size:14px !important;
				}
			}
			th{
				border: 5px solid #FFF;
			}
			th {
				color: #fff;
			}

			.buy{
				color: #24a69a;
			}
			.sell{
				color: #de5859;
			}

            .navbar-light .navbar-nav .show>.nav-link,
            .navbar-light .navbar-nav .active>.nav-link,
            .navbar-light .navbar-nav .nav-link.show,
            .navbar-light .navbar-nav .nav-link.active {
                color: #000 !important;
            }

            .navbar-light .navbar-nav .nav-link {
                color: #000;
            }

            @media (min-width: 992px) {
                .navbar-expand-lg .navbar-nav .nav-link {
                    padding-right: 3rem !important;
                    padding-left: 3rem;
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                    color: #000;
                    font-size: 14px;
                    margin-left: 10px
                }
            }
        </style>
        @yield('headScripts')
	</head>
	<body style="background-color:rgb(19, 23, 34);">
        <header class="header">
            <nav class="header__nav">
                <div class="d-flex justify-content-between">
                <div class="header__nav--tools-notifications">
                    <a href="/"><img src="{{ asset('website_home/imag/logo.png') }}" style="width:170px ; height:100px"></a>
                </div>

                <div class="header__nav--tools-edit" style="padding-top:3.3rem">
                    <div class="dropdown">
                        <a href="#"class="dropdown__dropbtn"><img src="img/user.jpg" alt="" style="width: 40px;border-radius: 50%;margin-top:-8px"><span style="font-size:22px;margin-left:10px;font-weight:bold;color:black">{{ session('name') }}</span></a>
                        <div class="dropdown__content">
                            <a href="/logout" style="font-size:18px;font-weight:bold">Logout</a>
                        </div>
                    </div>

                </div>

                </div>
            </nav>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light" style="padding:2rem">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav navbar-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.index'))?'background-color:#007bff':'' }}" href="{{ route('forex.index') }}"> <i class="fas fa-chart-line"></i><br> Forex Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.index_liquidity'))?'background-color:#007bff':'' }}" href="{{ route('forex.index_liquidity') }}"><i class="fas fa-chart-line"></i><br> Index Liquidity </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.currency_pair'))?'background-color:#007bff':'' }}" href="{{ route('forex.currency_pair') }}"><i class="fas fa-chart-line"></i><br> Currency Pairs Liquidity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.index_frame'))?'background-color:#007bff':'' }}" href="{{ route('forex.index_frame') }}"><i class="fas fa-chart-line"></i><br> Index Frames</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.trading_live'))?'background-color:#007bff':'' }}" href="{{ route('forex.trading_live') }}"><i class="fas fa-chart-line"></i><br>Trading Live</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.US_Stocks'))?'background-color:#007bff':'' }}" href="{{ route('forex.US_Stocks') }}"><i class="fas fa-chart-line"></i><br>US Stocks</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.market'))?'background-color:#007bff':'' }}" href="{{ route('forex.market') }}"><i class="fas fa-chart-line"></i><br> Market Indexes</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.Commodities'))?'background-color:#007bff':'' }}" href="{{ route('forex.Commodities') }}"><i class="fas fa-chart-line"></i><br> Commodities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.Crypto'))?'background-color:#007bff':'' }}" href="{{ route('forex.Crypto') }}"><i class="fas fa-chart-line"></i><br>Crypto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.commodities_dashboard'))?'background-color:#007bff':'' }}" href="{{ route('forex.commodities_dashboard') }}"><i class="fas fa-chart-line"></i><br>Commodities Dshboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.stocks_dashboard'))?'background-color:#007bff':'' }}" href="{{ route('forex.stocks_dashboard') }}"><i class="fas fa-chart-line"></i><br>Stocks_Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.crypto_dashboard'))?'background-color:#007bff':'' }}" href="{{ route('forex.crypto_dashboard') }}"><i class="fas fa-chart-line"></i><br>Crypto_Dshboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.daily_market'))?'background-color:#007bff':'' }}" href="{{ route('forex.daily_market') }}"><i class="fas fa-chart-line"></i><br> Daily Market Liquidity </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

		@yield('content')

		@yield('scripts')

		<script src="{{ asset('forex/js/particles.js') }}"></script>
		<script src="{{ asset('forex/js/app.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="{{ asset('forex/js/wow.min.js') }}"></script>
		<script>new WOW().init();</script>
		<script src="{{ asset('forex/js/jQuery3.3.1.min.js') }}"></script>
		<script src="{{ asset('forex/js/bootstrap.min.js') }}"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="{{ asset('forex/js/form.js') }}"></script>
	</body>
</html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-	Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="mt company">
        <title>Forex</title>
        <link rel="icon" href="img/logo.png" type="image/x-icon">
        <!--call bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <!--Page Style-->
        <link rel="stylesheet" href="css/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/ef503aa28e.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
        <!---AOS LAIBIRARY-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://widgets.myfxbook.com/styles/widgets-min.css?v=1.0.1" title="default" />
        <script type="text/javascript" src="https://widgets.myfxbook.com/scripts/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="https://widgets.myfxbook.com/scripts/jquery/jquery-ui-1.9.2.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.floatThead.min.js"></script>
        <script type="text/javascript">
            jQuery.noConflict();
        </script>

        <script type="text/javascript" src="https://widgets.myfxbook.com/scripts/widgets-min.js?v=1.0.1"></script>
        <style>
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


        <!--[if lt IE 9]>
        <script type="text/javascript" src="https://widgets.myfxbook.com/scripts/tipped/excanvas/excanvas.js"></script>
        <![endif]-->
        <script type="text/javascript" src="https://widgets.myfxbook.com/scripts/tipped/spinners/spinners.min.js"></script>
        <script type="text/javascript" src="https://widgets.myfxbook.com/scripts/tipped/tipped/tipped.js"></script>

        <link rel="stylesheet" type="text/css" href="https://widgets.myfxbook.com/styles/tipped/tipped.css" />

        <script type="text/javascript" src="scripts/highcharts/highcharts.js"></script>
        <script type="text/javascript" src="scripts/highcharts/modules/no-data-to-display.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                getLiquidityChart();
                setInterval(function() {
                    updateLiquidityChart();
                }, 90000);
            });
            var spreadTomcatUrl = "https://spreads.myfxbook.com";
        </script>
    </head>
    <body style="background-color:rgb(19, 23, 34);">
        <header class="header">
            <div class="container">
            <nav class="header__nav">
                <div class="d-flex justify-content-between">
                <div class="header__nav--tools-notifications">
                    <a href="/"><img src="{{ asset('website_home/imag/finalwhite-01.png') }}" style="width:170px ; height:100px"></a>
                </div>

                <div class="header__nav--tools-edit" style="padding-top:3.3rem">
                    <div class="dropdown">
                    <a href="#"class="dropdown__dropbtn"><img src="img/user.jpg" alt="" style="width: 40px;border-radius: 50%;"></a>
                    <div class="dropdown__content">
                        <a href="/logout">Logout</a>
                    </div>
                    </div>
                </div>

                </div>
            </nav>
            </div>
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
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.trading_live'))?'background-color:#007bff':'' }}" href="{{ route('forex.trading_live') }}"><i class="fas fa-chart-line"></i><br> Currency Basket </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" style="color:white;border:1px solid #d5d5d5;{{ url()->current()==url(route('forex.daily_market'))?'background-color:#007bff':'' }}" href="{{ route('forex.daily_market') }}"><i class="fas fa-chart-line"></i><br> Daily Market Liquidity </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div id="container" style="height:100%;width:100%"></div>
        </div>

        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </body>
</html>

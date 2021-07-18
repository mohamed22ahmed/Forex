@extends('website_pages.app')

@section('content')
    @if(Session('lang')=='ar')
        {{ App::setLocale('ar') }}
    @endif

    @if($num==1)
    <div class="slider" id="about">
        <div clsss="service-one slider__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 slider__content-con mb-0">
                        <div class="text-center h1-con {{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">
                            @lang('website.best_companies')
                        </div>
                        <div class="img-con2 mt-5">
                            <a target="_blank" href="https://oneroyal.com/ar/accounts?bid=MTE3MA=="><img src="{{asset('website_home/imag/best_company/1.jpg') }}" class="img-responsive w-100" style="height:500px;"></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 slider__content-con mb-0">
                        <div class="img-con2 mt-5">
                            <a target="_blank" href="https://oneroyal.com/ar/accounts?bid=MTE3MA=="><img src="{{asset('website_home/imag/best_company/2.jpg') }}" class="img-responsive w-100" style="height:500px;"></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 slider__content-con mb-0">
                        <div class="img-con2 mt-5">
                            <a target="_blank" href="https://oneroyal.com/ar/accounts?bid=MTE3MA=="><img src="{{asset('website_home/imag/best_company/3.jpg') }}" class="img-responsive w-100" style="height:500px;"></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 slider__content-con mb-0">
                        <div class="img-con2 mt-5">
                            <a target="_blank" href="https://oneroyal.com/ar/accounts?bid=MTE3MA=="><img src="{{asset('website_home/imag/best_company/4.jpg') }}" class="img-responsive w-100" style="height:500px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif($num==2)
        @if(Session('lang')=='ar')
            {{ App::setLocale('ar') }}
        @endif
        <div class="slider" id="about">
            <div clsss="service-two slider__content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 slider__content-con mb-0">
                            <div class="h1-con {{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">
                                Open Real Account
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="img-con">
                                <a target="_blank" href="https://oneroyal.com/ar/accounts?bid=MTE3MA=="><img src="{{asset('website_home/imag/account1.PNG') }}" class="img-responsive w-100" style="height:300px;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-6 col-sm-12 slider__content-con mb-0">
                            <div class="h1-con {{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">
                                Open Demo Account
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="img-con">
                                <a target="_blank" href="https://reg.oneroyal.com/ar/demo-2/?bid=MTE3MA%3D%3D"><img src="{{asset('website_home/imag/account2.PNG') }}" class="img-responsive w-100" style="height:300px;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="img-con1" style="padding-top: 50px">
                                <img src="{{asset('website_home/imag/acc2.jpg') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="img-con1" style="padding-top: 50px">
                                <img src="{{asset('website_home/imag/acc3.jpg') }}" class="img-fluid" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="slider" id="about">
            <div class="slider__content">
                <div class="container">
                    <div class="row">
                        @if($num==4||$num==5)
                            <div class="col-md-12 slider__content-con mb-0">
                        @else
                            <div class="col-md-6 col-sm-6 slider__content-con mb-0">
                        @endif
                                <div class="text-center h1-con {{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">
                                    @if($num==1)
                                        <div class="container justify-content-center">
                                            @lang('website.best_companies')
                                        </div>
                                            <div style="width:1000px;height:500px;background-image: url('/website_home/imag/best_company/1.jpg')"></div>
                                            <div id="d2"></div>
                                            <div id="d3"></div>
                                            <div id="d4"></div>
                                    @elseif($num==2)
                                        @lang('website.live_demo')
                                    @elseif($num==3)
                                        @lang('website.trading_strategy')
                                        <div class="col-md-12 embed-responsive embed-responsive-16by9 mt-5">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NQzxIUMeaq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="main_frame"></iframe>
                                        </div>
                                    @elseif($num==4)
                                        <div class="col-md-12 col-sm-12">
                                            @lang('website.forex_indicator')
                                            <div class="embed-responsive embed-responsive-16by9 mt-5">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/otvPOPeqMEg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    @elseif($num==5)
                                        <div class="col-md-12 col-sm-12">
                                            @lang('website.learn_forex')
                                            <div class="embed-responsive embed-responsive-16by9 mt-5">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ifmgGJaxAqY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    @else
                                        @lang('website.feedback')
                                    @endif
                                </div>
                                <div class="def-con {{ session('mood')=='dark'?'dark':'light' }}-color-p change-color-p" style="margin-bottom: 7rem;">
                                </div>
                            </div>

                        <div class="col-md-6 col-sm-6 slider__content-con mb-0">
                                @if($num==2)
                                @elseif($num==3)
                                <div class="ser-3">
                                    <ul style="list-style:none;">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-7 col-sm-6">
                                                    <a href="#" onclick="change_link('https://www.youtube.com/embed/C_rVnh6BMQw')">
                                                        <img src="{{asset('website_home/imag/strategy/first.png')}}" height="150px" width="300px">
                                                    </a>
                                                </div>
                                                <div class="col-md-5 col-sm-6">
                                                    <a href="#" style="text-decoration:none;color:white" onclick="change_link('https://www.youtube.com/embed/C_rVnh6BMQw')">
                                                        <span class="h1-ser" style="{{ session('mood')=='light'?'color:black':'' }}">successful start in forex market</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="padding-top:30px">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <a href="#" onclick="change_link('https://www.youtube.com/embed/1wulSXcE_dU')">
                                                        <img src="{{asset('website_home/imag/strategy/second.png')}}" height="150px" width="300px">
                                                    </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="#" style="text-decoration:none;color:white" onclick="change_link('https://www.youtube.com/embed/1wulSXcE_dU')">
                                                        <span class="h1-ser" style="{{ session('mood')=='light'?'color:black':'' }}">Explain my way in forex market</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="padding-top:30px">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <a href="#" onclick="change_link('https://www.youtube.com/embed/L0vVQKoYCMg')">
                                                        <img src="{{asset('website_home/imag/strategy/third.png')}}" height="150px" width="300px">
                                                    </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="#" style="text-decoration:none;color:white" onclick="change_link('https://www.youtube.com/embed/L0vVQKoYCMg')">
                                                        <span class="h1-ser" style="{{ session('mood')=='light'?'color:black':'' }}">The best liquidity strategy in forex market</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="padding-top:30px">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <a href="#" onclick="change_link('https://www.youtube.com/embed/NhYML0-LE-U')">
                                                        <img src="{{asset('website_home/imag/strategy/forth.png')}}" height="150px" width="300px">
                                                    </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="#" style="text-decoration:none;color:white" onclick="change_link('https://www.youtube.com/embed/NhYML0-LE-U')">
                                                        <span class="h1-ser" style="{{ session('mood')=='light'?'color:black':'' }}">The Secrets Strategies of forex movements</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script>
        function change_link(x){
            document.getElementById('main_frame').src=x
        }
    </script>
@endsection

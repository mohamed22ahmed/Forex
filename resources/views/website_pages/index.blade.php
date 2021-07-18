@extends('website_pages.app')

@section('content')
    @if(Session('lang')=='ar')
        {{ App::setLocale('ar') }}
    @endif

<div class="slider" id="about">
    <div class="slider__content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 slider__content-con mb-0">
                    <div class="h1-con {{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">
                        @lang('website.pro_raders_for_forex_services')
                    </div>
                    <div class="def-con {{ session('mood')=='dark'?'dark':'light' }}-color-p change-color-p" style="margin-bottom: 7rem;">
                        @lang('website.initial_text')
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <iframe class="w-100" style="height: 300px;" src="https://www.youtube.com/embed/NQzxIUMeaq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!---- Social Icon ---->
    <div class="main-slider__social" dir="ltr">
        <ul class="ul">
            <li class=" li facebook">
                <a target="_blank" href="https://www.facebook.com/Pro-Traders-Group-1443621565875011/">
                    @lang('website.facebook')
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
            </li>

            <li class=" li telegram">
                <a target="_blank" href="https://t.me/AmirNady">
                    @lang('website.telegram')
                    <i class="fab fa-telegram" aria-hidden="true"></i>
                </a>
            </li>

            <li target="_blank" class="li youtube">
                <a href="https://www.youtube.com/c/AmirNady">
                    @lang('website.youtube')
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
            </li>

            <li target="_blank" class="li whatsapp">
                <a href="https://wa.me/201001196902">
                    @lang('website.whatsapp')
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="{{ session('mood')=='dark'?'dark':'light' }}-mood why-we change" id="services">
    <div class="title">
        <h1 class="{{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">@lang('website.provide_for_you')</h1>
    </div>

    <div class="search-section" style="margin-top: 10rem !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <a href="service/1">
                            <img src="{{ asset('forex/img/forex_companies.jpg')}}" style="height:400px" class="card-img" alt="...">
                            <h1 class="text-center" style="color:black;margin-top:30px">
                                @lang('website.best_companies')
                            </h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <a href="service/2">
                            <img src="{{ asset('forex/img/traders_account.jpg')}}" style="height:400px" class="card-img" alt="...">
                            <h1 style="color:black;margin-top:30px">@lang('website.live_demo')</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <a href="service/3">
                            <img src="{{ asset('forex/img/traders_strategies.jpg')}}" style="height:400px" class="card-img" alt="...">
                            <h1 style="color:black;margin-top:30px">@lang('website.trading_strategy')</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <a href="service/4">
                            <img src="{{ asset('forex/img/forex_pointers.jpg')}}" style="height:400px" class="card-img" alt="...">
                            <h1 style="color:black;margin-top:30px">@lang('website.forex_indicator')</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-5 text-center">
                        <a href="service/5">
                            <img src="{{ asset('forex/img/forex_learning.jpg')}}" style="height:400px" class="card-img" alt="...">
                            <h1 style="color:black;margin-top:30px">@lang('website.learn_forex')</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <a href="service/6">
                            <img src="{{ asset('forex/img/feedback.jpg')}}" style="height:400px" class="card-img" alt="...">
                            <h1 style="color:black;margin-top:30px">
                                @lang('website.feedback')
                            </h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="courses" id="vedios">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ asset('website_home/imag/forex.mp4') }}"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vedio-sub {{ session('mood')=='dark'?'dark':'light' }}-color-p change-color-p">
                    @lang('website.first_time') <br>
                    <div class="mt-3">
                        @lang('website.site_features')
                    </div>
                    <div class="pl-2 mt-3">
                        @lang('website.tell_you')
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection

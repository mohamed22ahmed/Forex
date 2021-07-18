@extends('website_pages.app')

@section('content')
    @if(Session('lang')=='ar')
        {{ App::setLocale('ar') }}
    @endif

<div class="Contact">
    <div class="container">
        <div class="contact-content text-center">
            <div class="contact-content__title w-100 {{ session('mood')=='dark'?'dark':'light' }}-color-h change-color-h">
                @lang('website.have_some_questions')
            </div>
        </div>
        <div class="contact-operations">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center mb-5 contact-img">
                    <img src="{{ asset('website_home/imag/letter.svg')}}" alt="" style="width: 320px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center" style="margin-top:50px">
                    <form action="/contact" class="form-gtoup" style="padding-top: 4rem;" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control mb-4 contact-input"  style="font-weight: bold" placeholder="{{ __('website.name') }}">
                        <input type="email" name="email" class="form-control mb-4 contact-input" style="font-weight: bold" placeholder="{{ __('website.email') }}">
                        <textarea name="question" class="textarea-contact" style="font-weight: bold" placeholder="{{ __('website.question') }}"></textarea>
                        <input type="submit" class="form-control submit-contact-btn" style="border-radius:20px" value="{{ __('website.submit') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>

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
@endsection

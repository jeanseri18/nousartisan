@extends('welcome.app')
@section('content')

<div class="pt-150 pb-70 position-relative align-items-center d-flex">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset('assets/img/home-4-hero-1920x1080.jpg')}}" alt=""></div>
        <div class="background-color" style="--background-color: #000; opacity: .15;"></div>
        <div class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0) 150px);"></div>
    </div>
    <div class="container">
        <div class="row gy-70 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-25 text-white">Connectez vous a votre compte</h1>
                <p class="mb-40 font-size-18 fw-medium text-white pe-lg-70">Text detail.</p><!-- Button--><a class="btn text-white btn-link btn-clean" href="#" target="_self">En savoir plus</a>
            </div>
            <div class="col-lg-5">
                @livewire('customers.login-form')
            </div>
        </div>
    </div>
</div>


@endsection

@extends('welcome.app')
@section('content')

<div class="pt-150 pb-70 position-relative align-items-center d-flex">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="/assets/img/home-4-hero-1920x1080.jpg" alt=""></div>
        <div class="background-color" style="--background-color: #000; opacity: .15;"></div>
        <div class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0) 150px);"></div>
    </div>
    <div class="container">
        <div class="row gy-70 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-25 text-white">Creer votre compte. Et commencez !</h1>
                {{-- <p class="mb-40 font-size-18 fw-medium text-white pe-lg-70">Text detail.</p><!-- Button--><a class="btn text-white btn-link btn-clean" href="#" target="_self">En savoir plus</a> --}}
            </div>
            <div class="col-lg-5">
                <form class="ms-lg-70 rounded bg-white p-35 text-center">
                    <h4 class="mb-30">Nousartisans</h4>
                    <input class="form-control form-control-style-2" type="text" placeholder="Nom et prenom*">
                    <input class="form-control form-control-style-2 mt-13" type="text" placeholder=" Email *">

                    <input class="form-control form-control-style-2 mt-13" type="tel" placeholder=" Telephone *">
                    <input class="form-control form-control-style-2 mt-13" type="text" placeholder=" Adresse de facturation *">
                    <input class="form-control form-control-style-2 mt-13" type="email" placeholder=" Mot de passe  *">
                    <input class="form-control form-control-style-2 mt-13" type="email" placeholder=" Confirmation du mot de passe *">
                    {{-- <select class="form-control form-control-style-2 mt-13">
                        <option selected="">I interested in ...</option>
                        <option>Colibri Creative Project</option>
                        <option>Colibri Project</option>
                        <option>Happy Moments Photoset</option>
                        <option>Luxury Car Website</option>
                        <option>Funny Dog</option>
                        <option>Creative Branding</option>
                    </select> --}}<br>
            <!-- Button--><button class="btn btn-accent-1">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

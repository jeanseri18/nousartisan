@extends('appauth')
@section('content')
    <br>
    <div class="py-240 position-relative">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="assets/img/home.jpg" alt=""></div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

            <form class=" rounded bg-white p-35 text-left">
                <h1 class="m-0 pe-30">Demande</h1>
                <label>Titre du besion</label>
                <input class="form-control form-control-style-2" type="text" placeholder="Titre du besion">
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Adresse de l'intervention</label>
                        <input class="form-control form-control-style-2 " type="text"
                            placeholder="Adresse de l'intervention">
                    </div>
                    <div class="col-md-6">
                        <label>Code postale et ville</label>
                        <input class="form-control form-control-style-2 " type="text"
                            placeholder=" code postale et ville">
                    </div>
                </div><br>
                <label>Type de local</label>
                <select class="form-control form-control-style-2 ">
                    <option selected="">Vous etes dans </option>
                    <option>un appartement</option>
                    <option>dans un logement</option>
                </select><br>
                <label>Detail</label>
                <textarea class="form-control form-control-style-2" placeholder="detail">
                </textarea><br>
                <div class="row">

                    <div class="col-md-6"> <label>Date</label>
                        <input class="form-control form-control-style-2 " type="date" placeholder="date">
                    </div>
                    <div class="col-md-6"> <label>Heure</label>
                        <input class="form-control form-control-style-2 " type="time" placeholder="heure">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6"> <label>Duree en heure</label>
                        <input class="form-control form-control-style-2 " type="number" placeholder="Duree en heure">
                    </div>
                    <div class="col-md-6"> <label>prix par heure</label>
                        <input class="form-control form-control-style-2 " type="number" placeholder="prix par heure">
                    </div>
                </div><br>
                Le montant de la prestation est de 100 pour 10 heure de travail
                <br><br>
                Frais de servuces<br><br>
                Frais de service TTC<br><br>
                Montant  HT<br><br>
                La TVA est defini par le prestataire<br><br>

                Montant total<br><br>

                <button class="btn btn-accent-1">Valider</button>
            </form>
        </div>
        <div class="col-md-3">

        </div>


    </div>



        <div class="bg-linear-gradient py-120">
            <div class="container">
                <h2 class="text-center">Les services les plus demandes</h2>
                <div class="swiper mt-90" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3" data-swiper-gap="30" data-swiper-grabcursor="true">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div data-filters="company">
                                    <!-- Blog-->
                                    <div class="card card-blog  card-vertical card-hover-zoom"><a class="card-img rounded-4" href="" data-img-height style="--img-height: 90%;"><span class="badge bg-dark text-white position-absolute top-0 start-0 z-index-1 mt-20 ms-20">Company</span><img loading="lazy" src="assets/img/blog/related-post-1-900x800.jpg" alt=""></a>
                                        <div class="card-body pt-30">
                                            <div class="card-date text-gray-dark">Sep 25, 2021</div><a class="card-title h4" href="">Over the every fill. Deep given, together living life won't.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div data-filters="business">
                                    <!-- Blog-->
                                    <div class="card card-blog  card-vertical card-hover-zoom"><a class="card-img rounded-4" href="" data-img-height style="--img-height: 90%;"><span class="badge bg-dark text-white position-absolute top-0 start-0 z-index-1 mt-20 ms-20">Business</span><img loading="lazy" src="assets/img/blog/related-post-1-900x800.jpg" alt=""></a>
                                        <div class="card-body pt-30">
                                            <div class="card-date text-gray-dark">Sep 19, 2021</div><a class="card-title h4" href="">Stars, them so grass gathered shall can't day god cattle.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div data-filters="marketing">
                                    <!-- Blog-->
                                    <div class="card card-blog  card-vertical card-hover-zoom"><a class="card-img rounded-4" href="" data-img-height style="--img-height: 90%;"><span class="badge bg-dark text-white position-absolute top-0 start-0 z-index-1 mt-20 ms-20">Marketing</span><img loading="lazy" src="assets/img/blog/related-post-1-900x800.jpg" alt=""></a>
                                        <div class="card-body pt-30">
                                            <div class="card-date text-gray-dark">Sep 07, 2021</div><a class="card-title h4" href="">Lights made seas the whose dominion lesser winged.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div data-filters="company">
                                    <!-- Blog-->
                                    <div class="card card-blog  card-vertical card-hover-zoom"><a class="card-img rounded-4" href="" data-img-height style="--img-height: 90%;"><span class="badge bg-dark text-white position-absolute top-0 start-0 z-index-1 mt-20 ms-20">Company</span><img loading="lazy" src="assets/img/blog/related-post-1-900x800.jpg" alt=""></a>
                                        <div class="card-body pt-30">
                                            <div class="card-date text-gray-dark">Sep 25, 2021</div><a class="card-title h4" href="">Over the every fill. Deep given, together living life won't.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-button-position-1 swiper-button-white shadow mt-n90"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                        </svg></div>
                    <div class="swiper-button-next swiper-button-position-1 swiper-button-white shadow mt-n90"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                        </svg></div>
                </div>
            </div>
        </div>

@endsection

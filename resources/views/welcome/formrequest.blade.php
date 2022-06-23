@extends('welcome.app')
@section('content')
<div class="pt-120 pb-130">
    <div class="container">
        <div class="row gy-60 align-items-center">
            <div class="col-12 col-lg-6">
                <div class="gallery-wrapper pe-lg-70" data-show="startbox">
                    <!-- Image-->
                    <!-- Gallery item--><a class="gallery-item rounded-4 overflow-hidden" href="https://runwebrun.com/startbox/assets/img/service-1-900x990.jpg" style="--img-height: 110%;" data-img-height><img loading="lazy" src="https://runwebrun.com/startbox/assets/img/service-1-900x990.jpg" alt=""></a>

                </div> <br><br><br>            <h3 class="mb-45" data-show="startbox">{{$name}}</h3><br>
                <div class="col-12 col-lg-6" data-show="startbox">
                    <ul class="list fw-medium font-size-15">
                        <li class="active">Service rapide assuré</li>
                    </ul>
                </div><br><br><!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                    <ul class="list fw-medium font-size-15">
                        <li class="active">Paiement sécurisé</li>
                    </ul>
                </div><br><br>
                <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                    <ul class="list fw-medium font-size-15">
                        <li class="active">Prestation de qualité</li>
                    </ul>
                </div>
                <br><br><br><br><br><br>
            </div>
            <div class="col-12 col-lg-6">

                {{-- <p class="mb-60" data-show="startbox" data-show-delay="100">Shall over firmament, above there won't image wherein winged moveth two heaven green, the whose had so let evening forth together given form make.</p> --}}
                <div class="row gy-40">
                    <!-- Item-->
                   <!-- Item-->
                    {{-- <div class="col-12 col-lg-6" data-show="startbox">
                        <ul class="list fw-medium font-size-15">
                            <li class="active">Firmament divide brought so sixth after very, itself.</li>
                        </ul>
                    </div><!-- Item-->
                    <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                        <ul class="list fw-medium font-size-15">
                            <li class="active">Without fill years fifth is them Fifth open from earth.</li>
                        </ul>
                    </div> --}}
                </div>
                {{-- <div class="mt-45" data-show="startbox">
                    <!-- Button--><a class="btn btn-accent-1 btn-link btn-clean" href="" target="_self">Demander ce service</a>
                </div> --}}




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
                       {{-- Le montant de la prestation est de 100 pour 10 heure de travail
                        <br> --}}
                        <br>
                        Frais de services <b><span  id="fs"></span></b><br><br>
                        Frais de services TVA <b><span id="fstva"></span></b><br><br>
                        Frais de service TTC <b> <span id="fsttc"></span></b><br><br>
                        Montant HT <b><span id="mht"></span></b><br><br>
                        La TVA est defini par le prestataire<br><br>

                        Montant total <b><span id="mt"></span></b><br><br>

                    <button class="btn btn-accent-1">Valider</button>
                </form>


            </div>
        </div>
    </div>


</div>

@endsection
@push('script')
    <script>
        function calcul() {
            var dure = document.getElementById('dure').value;
            var prix = document.getElementById('prix').value;
            var rest = prix * dure;
            var frais = rest * 0.07;
            var fraistva = rest * 0.014;
            var fraisttc = frais + fraistva;
            var monttotal = rest + fraisttc;
            document.getElementById('fs').innerHTML = frais.toFixed(2);
            document.getElementById('fstva').innerHTML = fraistva.toFixed(2);
            document.getElementById('fsttc').innerHTML = fraisttc.toFixed(2);
            document.getElementById('mht').innerHTML = rest;
            document.getElementById('mt').innerHTML = monttotal.toFixed(2);
        }
    </script>
@endpush

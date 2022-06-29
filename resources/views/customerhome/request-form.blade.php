@extends('customerhome.app')
@section('content')
    <div class="pt-120 pb-130">
        <div class="container">
            <div class="row gy-60 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="gallery-wrapper pe-lg-70" data-show="startbox">
                        <a class="gallery-item rounded-4 overflow-hidden" href=""
                            style="--img-height: 110%;" data-img-height><img loading="lazy" src="{{ $services->image }}"
                                alt=""></a>

                    </div> <br><br><br>
                    <h3 class="mb-45" data-show="startbox">{{ $services->name }}</h3><br>
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



                @livewire('customerhome.request-form',['ids'=>$services->id])




                </div>
            </div>
        </div>


    </div>
@endsection

{{-- @section('script')
{{-- <script src="{{asset('assets/js/calculrequest.js')}}"></script>
@endsection --}}

@push('script')
    <script>
        document.getElementById("prix").onchange = function() {calcul()};
            document.getElementById("dure").onchange = function() {calcul()};
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

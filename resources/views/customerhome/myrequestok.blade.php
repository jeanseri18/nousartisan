@extends('customerhome.app')

@section('content')
    <div style="margin: 40px">
        <br>
        <!-- Nav tabs -->


        <a href="/customer-home/myrequests" class="btn btn-accent-2" style="background-color:#f5f5f5;color:black;">Toutes
            les
            demandes</a>


        <a href="/customer-home/myrequestwait" class="btn btn-accent-2" style="background-color:#f5f5f5;color:black;">Demandes
            en cours</a>


        <a href="/customer-home/myrequestok" class="btn btn-accent-2"
            style="height: 50px;background-color:blanchedalmond;color:black;">Demande
            finalisées</a>
        <br><br>



        <div class="row">
            <?php $nbre = 0; ?>
            @foreach ($myrequests as $myrequest)
                <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden  col-lg-12 col-md-12"
                    style="background-color: #f5f5f5;">
                    <div class="card-body py-40 px-50 pb-50">
                        <div class="row" style="font-size: 14px">
                            <div class="col-md-3  "><i>
                                    <a class="card-title" href="#"><strong>Prestataire
                                            {{ $myrequest->name }}</strong></a><br>
                                    <p><strong>Titre</strong>: {{ $myrequest->titre }}
                                </i><br>
                                <p><i class="bi  bi-geo-alt-fill">{{ $myrequest->town }} {{ $myrequest->code_postal }}</i><br></p>

                            </div>
                            <div class="col-md-3"><i>
                                    <p>Intervention le {{ $myrequest->date }} à {{ $myrequest->heure }}</p>
                                    <p>Prix par heure : {{ $myrequest->price_after_nego }} €</p>
                                    <p>Prix Total:
                                        {{ $myrequest->price_after_nego * $myrequest->dure * 0.07 * 0.14 + ($myrequest->price_after_nego * 0.07 + $myrequest->price_after_nego) }}
                                        € </p>
                                </i>


                            </div>
                            <div class="col-md-3"><i>
                                    <p>Frais de service : {{ $myrequest->price_after_nego * 0.07 * 0.14 }}</p>
                                    <p>Commission TVA: {{ $myrequest->price_after_nego * 0.07 }}</p>
                                </i>

                                {{-- <p>Mon offre</p> --}}
                            </div>
                            <div class="col-md-3">



                            </div>







                        </div>



                    </div>
                </div>
                <hr>
            @endforeach

        </div>

    </div>
    </div><br><br><br><br></div>
@endsection

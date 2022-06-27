@extends('workershome.app')
@section('content')
<div style="margin: 40px">
    <br>
    <a href="{{ url('/worker-home/myoffer') }}" class="btn btn-accent-2" style="background-color:#f5f5f5;color:black;">Toutes les
        offres</a>
    <a href="{{ url('/worker-home/myofferwait') }}" class="btn btn-accent-2" style="background-color:blanchedalmond;color:black;">Offres en cours</a>
    <a href="{{ url('/worker-home/myofferok') }}" class="btn btn-accent-2" type="button" style="background-color:#f5f5f5;color:black;">Offres
        finalisées</a>
    <br><br>




    <div class="row" >
        <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden  col-lg-12 col-md-12" style="background-color: #f5f5f5;">
            <div class="card-body py-40 px-50 pb-50" >
                <div class="row" style="font-size: 13px">
                    <div class="col-md-3  ">
                        <a class="card-title" href="">
                            <strong><i>Pose d'une Serrure Electronique</i></strong>
                        </a>
                        <p><i class="bi bi-geo-alt-fill">Paris 22222</i>
                            <br>
                            <i class="bi bi-calendar-check-fill">
                                22/02/2023
                            </i>
                        </p>

                    </div>
                    <div class="col-md-3">
                        <i>
                            <p>Durée :</p>
                            <p>Prix: </p>
                            <p>TVA:</p>
                            <p>Total hors frais service :</p>


                        </i>
                    </div>
                    <div class="col-md-3">
                        <i>
                            <p>Frais de service : </p>
                            <p>Total +frais de service: </p>
                            <p>Votre paiement</p>
                            <p>Statut :</p>
                        </i>
                    </div>
                    <div class="col-md-3">

                        <a href="" class="btn btn-accent-1" style="height: 50px;width:200px;font-size: 12px">
                            <i class="bi bi-trash-fill">  Annuler le rdv</i>
                        </a>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div>
</div><br><br><br><br></div>
@endsection

@extends('workershome.app')
@section('content')
<div style="margin: 40px">
    <br>
    <!-- Nav tabs -->


            <button class="btn " type="button"
            style="height: 50px;background-color:blanchedalmond"><br>Toutes les
                offres</button>


            <button class="btn  "type="button"

                style="height: 50px;;background-color:#f5f5f5;"><br>Offres en cours</button>


            <button class="btn "  type="button"

                style="height: 50px;;background-color:#f5f5f5;"><br>Offres  finalisées</button>
                <br><br>



            <div class="row">
                <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden  col-lg-12 col-md-12"
                    style="background-color: #f5f5f5;">
                    <div class="card-body py-40 px-50 pb-50">
                        <div class="row"  style="font-size: 14px">
                            <div class="col-md-3  ">
                                <a class="card-title" href=""><strong>Pose d'une Serrure
                                        Electronique</strong></a>
                                <p>Paris 22222<br> 22/02/2023</p>

                            </div>
                            <div class="col-md-3">
                                <p>Durée :</p>
                                <p>Prix: </p>
                                <p>TVA:</p>
                                <p>Total hors frais service :</p>



                            </div>
                            <div class="col-md-3">
                                <p>Frais de service : </p>
                                <p>Total +frais de service: </p>
                                <p>Votre paiement</p>
                                <p>Statut :</p>
                            </div>
                            <div class="col-md-3">

             <a href=""
                                    class="btn btn-accent-1" style="height: 50px;width:170px;font-size: 14px">Supprimer</a>

                            </div>






                        </div>



                    </div>
                </div>

            </div>

    </div>
</div><br><br><br><br></div>
@endsection

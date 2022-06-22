@extends('customerhome.app')

@section('content')
    <div style="margin: 40px">
        <br>
        <!-- Nav tabs -->


                <button class="btn " type="button"
                style="height: 50px;background-color:blanchedalmond"><br>Toutes les
                    demandes</button>


                <button class="btn  "type="button"

                    style="height: 50px;;background-color:#f5f5f5;"><br>Demandes en cours</button>


                <button class="btn "  type="button"

                    style="height: 50px;;background-color:#f5f5f5;"><br>Demande finalisées</button>
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



                                </div>
                                <div class="col-md-3">
                                    <p>Frais de service : </p>
                                    <p>Commission TVA: </p>
                                    <p>Mon offre</p>
                                </div>
                                <div class="col-md-3">

                                    <a href="" class="btn btn-accent-2"
                                        style="height: 50px;width:170px;font-size: 14px">Modifier</a> <br> <a href=""
                                        class="btn btn-accent-1" style="height: 50px;width:170px;font-size: 14px">Supprimer</a>

                                </div>

                                <div class="accordion col-md-12" id="accordionExample"><br>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <strong> Liste des propositions</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">


                                                    <div class="container-fluid " style="font-size: 14px"><br>
                                                        <div class="row">
                                                            <div class="col-md-3"> <img src="https://www.nousartisans.com/theme/assets/img/default-avatar.png" class="rounded-circle"
                                                                width="50"><span class="name" style="font-weight: bold;">
                                                                <strong>Roger</strong>
                                                            </div>
                                                            <div class="col-md-3">
                                                                Prix:<strong></strong> € /heure <br>
                                                                TVA 0%: 0€
                                                                Frais de service:
                                                            </div>
                                                            <div class="col-md-3"><br>
                                                                <font style="color:blue">Total à payer : <strong></strong></font>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="" class="btn btn-accent-2"  style="font-size: 14px"
                                                                >Accepter</a>
                                                            </div>
                                                        </div><br>

                                                    </div> <hr>



                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>



                        </div>
                    </div>

                </div>

        </div>
    </div><br><br><br><br></div>
@endsection

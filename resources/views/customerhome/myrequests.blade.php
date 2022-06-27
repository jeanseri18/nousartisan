@extends('customerhome.app')

@section('content')
    <div style="margin: 40px;">
        <br>
        <!-- Nav tabs -->


        <a href="{{url('/customer-home/myrequests')}}" class="btn btn-accent-2" style="background-color:blanchedalmond;color:black;">Toutes
            les
            demandes</a>


        <a href="{{url('/customer-home/myrequestwait')}}" class="btn btn-accent-2" style="background-color:#f5f5f5;color:black;">Demandes en cours</a>


        <a href="{{url('/customer-home/myrequestok')}}" class="btn btn-accent-2" style="height: 50px;background-color:#f5f5f5;color:black;">Demande
            finalisées</a>
        <br><br>



        <div class="row">
            <?php $nbre=0; ?>
            @foreach ($myrequests as $myrequest )


            <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden  col-lg-12 col-md-12"
                style="background-color: #f5f5f5;">
                <div class="card-body py-40 px-50 pb-50">
                    <div class="row" style="font-size: 14px">
                        <div class="col-md-3  ">
                            <a class="card-title" href=""><strong><i >Service {{$myrequest->name}}</i></strong></a><br>
                            <p><i >Titre:{{ $myrequest->titre}}</i><br>
                            <p><i class="bi bi-geo-alt-fill">{{$myrequest->town}} {{$myrequest->code_postal}}</i><br></p>

                        </div>
                        <div class="col-md-3"><i>
                            <p>Intervention le {{$myrequest->date}} à {{$myrequest->heure}}</p>
                            <p>Prix par heure : {{$myrequest->price_by_hour}} €</p>
                            <p>Prix Total: {{(($myrequest->price_by_hour*$myrequest->dure* 0.07)*0.14)+(($myrequest->price_by_hour * $myrequest->dure * 0.07)+$myrequest->price_by_hour*$myrequest->dure)}} € </p>
                        </i>


                        </div>
                        <div class="col-md-3"><i>
                            <p>Frais de service : {{ ($myrequest->price_by_hour * $myrequest->dure * 0.07)*0.14}}</p>
                            <p>Commission TVA: {{($myrequest->price_by_hour *$myrequest->dure * 0.07)}}</p>
                            <p>Date:</p></i>
                        </div>
                        <div class="col-md-3">

                            <a href="{{url('customer-home/requestupdate',['id'=>$myrequest->id])}}" class="btn btn-accent-2"
                                style="height: 50px;width:170px;font-size: 14px"><i class="bi bi-pencil"> Modifier</i></a> <br> <a href="{{url('customer-home/myrequestsdelete',['id'=>$myrequest->id,'statut'=>'1'])}}"
                                class="btn btn-accent-1" style="height: 50px;width:170px;font-size: 14px"><i class="bi bi-trash-fill">Supprimer</i></a>

                        </div>







                    </div>



                </div>
            </div>  @livewire('customerhome.request-proposal',['id'=>$myrequest->id])
            <hr>

            @endforeach

        </div>

    </div>
    </div><br><br><br><br></div>
@endsection

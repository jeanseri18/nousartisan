


<div class="accordion col-md-12" id="accordionExample{{$id}}" ><br>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne{{$id}}">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne{{$id}}" aria-expanded="true" aria-controls="collapseOne{{$id}}">
                <strong>  <i >Liste des propositions</i></strong>
            </button>
        </h2>
        <div id="collapseOne{{$id}}" class="accordion-collapse collapse show" aria-labelledby="headingOne{{$id}}"
            data-bs-parent="#accordionExample{{$id}}">
            <div class="accordion-body">
                {{-- @dd($nb); --}}
                @foreach ($proposals as $proposal )
                <?php
                $tva=($proposal->price_of_proposal* $proposal->quotation)/100;
                $frais=(($proposal->price_of_proposal* $proposal->quotation)/100)*0.14 ;
                $montht=$frais+$tva+$proposal->price_of_proposal;
                ?>

                <div class="" style="font-size: 12px"><br>
                    <div class="row">
                        <div class="col-md-3"><center> <img
                                src="{{$proposal->image =='' ? 'https://www.nousartisans.com/theme/assets/img/default-avatar.png' : $proposal->image}}"
                                class="rounded-circle" width="50"><span class="name"
                                style="font-weight: bold;"><br><br>
                                <strong> <i >{{$proposal->name}} </i></strong></center>
                        </div>
                        <div class="col-md-3">
                            <i > Prix:<strong> {{$proposal->price_of_proposal}}</strong> € /heure <br>
                             TVA {{$proposal->quotation }}%: {{$tva}}€<br>
                             Frais de service:{{$frais }}€</i>
                        </div>
                        <div class="col-md-3"><br><i>
                            <font style="color:blue"> Total à payer :{{$montht}} €<strong></strong></font></i>
                        </div>
                        <div class="col-md-3">
                            {{-- {{url('/stripe/create-checkout-session.php?montant=100')}} --}}
                            <a href="{{url('customer-home/myrequestsupdate',['id'=>$proposal->service_request_id,'worker'=>$proposal->id_worker,'statut'=>'1','price'=>$proposal->price_of_proposal])}}" class="btn btn-success"
                                style="font-size: 12px"> <i class="bi bi-check2-all"> Accepter</i></a>
                        </div>
                    </div><br>

                </div>
                <hr>@endforeach



            </div>
        </div>
    </div>
</div>

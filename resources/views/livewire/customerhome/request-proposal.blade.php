


<div class="accordion col-md-12" id="accordionExample{{$id}}"><br>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne{{$id}}">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne{{$id}}" aria-expanded="true" aria-controls="collapseOne{{$id}}">
                <strong> Liste des propositions</strong>
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

                <div class="container-fluid " style="font-size: 14px"><br>
                    <div class="row">
                        <div class="col-md-3"> <img
                                src="https://www.nousartisans.com/theme/assets/img/default-avatar.png"
                                class="rounded-circle" width="50"><span class="name"
                                style="font-weight: bold;">
                                <strong>Roger</strong>
                        </div>
                        <div class="col-md-3">
                            Prix:<strong> {{$proposal->price_of_proposal}}</strong> € /heure <br>
                            TVA {{$proposal->quotation }}%: {{$tva}}€<br>
                            Frais de service:{{$frais }}€
                        </div>
                        <div class="col-md-3"><br>
                            <font style="color:blue">Total à payer :{{$montht}} €<strong></strong></font>
                        </div>
                        <div class="col-md-3">
                            <a href="{{url('/stripe/create-checkout-session.php?montant=100')}}" class="btn btn-accent-2"
                                style="font-size: 14px">Accepter</a>
                        </div>
                    </div><br>

                </div>
                <hr>@endforeach



            </div>
        </div>
    </div>
</div>

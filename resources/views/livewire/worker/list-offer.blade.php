<div>

    @foreach ($myoffers as $myoffer)
        <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden  col-lg-12 col-md-12"
            style="background-color: #f5f5f5;">
            <div class="card-body py-40 px-50 pb-50">
                <div class="row" style="font-size: 12px">
                    <div class="col-md-3  ">
                        <a class="card-title" href="#">
                            <strong><i>{{ $myoffer->titre }}</i></strong>
                        </a>
                        <p>Client: {{ $myoffer->name }}<br>
                            <i class="bi bi-geo-alt-fill">{{ $myoffer->adress }}</i>
                            <br>
                            <i class="bi bi-calendar-check-fill">
                                Intervention le {{ $myoffer->date }} à {{ $myoffer->heure }}
                            </i>
                        </p>

                    </div>
                    <div class="col-md-3">
                        <i>

                            <p><strong>Durée :</strong> {{ $myoffer->dure }}h<br>
                                <strong>Prix:</strong> {{ $myoffer->price_by_hour }} €<br>
                                <strong>Commission TVA:</strong> {{ $myoffer->date }}<br>
                                <strong>Frais service :{{ $myoffer->date }}</strong><br>
                            </p>
                        </i>
                    </div>
                    <div class="col-md-3">
                        <i>
                            {{-- @dd($myoffer->proposalstatus); --}}
                            <strong>Total +frais de service: </strong>
                            {{ $myoffer->price_by_hour * $myoffer->dure * 0.07 * 0.14 + ($myoffer->price_by_hour * $myoffer->dure * 0.07 + $myoffer->price_by_hour * $myoffer->dure) }}
                            €<br>
                            <strong>Votre paiement</strong>:
                            {{ $myoffer->price_after_nego * $myoffer->dure * 0.07 + $myoffer->price_after_nego * $myoffer->dure }}
                            €<br>
                            <strong>Statut : </strong>
                            @switch($myoffer->proposalstatus)
                            @case(0)
                                En attente
                            @break

                            @case(1)
                                Accepté
                            @break

                            @case(1)
                                Termine
                            @break

                            @default
                        @endswitch
                        <br></p>
                    </i>
                </div>
                <div class="col-md-3">
                    @switch($myoffer->status_id)
                        @case(0)
                            <a href="" class="btn btn-accent-1" style="height: 50px;width:170px;font-size: 14px">
                                <i class="bi bi-trash-fill"> Supprimer</i>
                            @break

                            @case(1)
                                <a href="#" class="btn btn-accent-1" style="height: 50px;width:170px;font-size: 14px">
                                    <i class="bi bi-trash-fill"> Annuler</i>
                                @break

                                @case(1)
                                    <a href="" class="btn btn-accent-1"
                                        style="height: 50px;width:170px;font-size: 14px">
                                        Encaisser
                                    @break

                                    @default
                                @endswitch

                            </a>
                </div>
            </div>
        </div>
    </div>
@endforeach






</div>

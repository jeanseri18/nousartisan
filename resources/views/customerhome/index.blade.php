@extends('customerhome.app')
@section('content')
    
    <br><br>
    <center>
        {{-- @livewire('customerhome.searchrequest') --}}

        <h2>De quel service avez-vous besoin ?</h2>


        <form class="form-group-overlay mx-lg-70 container col-md-8" method="GET"><input
                class="form-control form-control-white form-control-style-3 shadow" type="text" placeholder="*" name="search"
                id="search"><!-- Button--><button class="btn btn-accent-1 mt-6 me-6 no-transform" type="submit"
                href="#" target="_self">Recherhche</button>

        </form><br>
        <h5>Pour chaque situation, trouvez le prestataire dont les compétences répondent à vos attentes et à votre niveau
            d’exigence.</h5>
    </center>
    <div class="pt-80 pb-130">
        <div class="container">
            <!-- Isotope-->
            <div class="isotope">
                <ul class="nav justify-content-center isotope-filters mb-60">
                    <li class="nav-item active"><a class="nav-link" href="#" data-filter="all">Tous les services </a>
                    </li>
                    @foreach ($categories as $categorie)
                        <li class="nav-item"><a class="nav-link" href="#"
                                data-filter="{{ $categorie->id }}">{{ $categorie->name }}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="row isotope-grid gy-30">
                    @foreach ($services as $service)
                        <div class=" isotope-item col-12 col-md-6 col-lg-4"
                            data-filters="{{ $service->benefit_category_id }}">
                            <!-- Blog-->
                            <div class="card rounded-1 overflow-hidden bg-white">
                                <a class="card-img rounded-0"
                                    href="{{ route('customer-request-form', ['id' => $service->id, 'name' => $service->name]) }}"
                                    data-img-height style="--img-height: 50%;">
                                    <span
                                        class="badge bg-dark text-white position-absolute top-0 start-0 z-index-1 mt-20 ms-20">Service
                                        {{ $service->name }}</span>
                                    <img loading="lazy" src="{{ $service->image }}" alt=""></a>

                            </div>
                            <a class="card-title h5 "
                                href="{{ route('customer-request-form', ['id' => $service->id, 'name' => $service->name]) }}"
                                style="text-decoration: none;">{{ $service->name }}<br>
                                <a class="card-title h5  "
                                    href="{{ route('customer-request-form', ['id' => $service->id, 'name' => $service->name]) }}"
                                    style="text-decoration: none;color:#f01f4b;">{{ $service->price }} € -
                                    {{ $service->real_price }} € par
                                    heure</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
    @endsection

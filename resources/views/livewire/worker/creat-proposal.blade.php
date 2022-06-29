

<div>
    <div class="pt-270 pb-300 text-center position-relative align-items-center d-flex">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset('assets\img\work.jpg')}}" alt=""></div>
            <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
            <div class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0) 150px);"></div>
        </div>
        <div class="container">
            <div class="subtitle mb-15 font-size-15 fw-medium text-white">{{$offer->town}} <span class="sep-dot"></span>ajoute le {{    date( ' d/m/Y',strtotime($offer->created_at))}}</div>
            <h1 class="m-0 text-white">{{$offer->titre}} </h1>
        </div><a class="down-arrow position-absolute start-50 bottom-0 translate-middle-x mb-50" href="#next"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="17" fill="none">
                <path stroke="currentColor" stroke-width="1.7" d="M6.143 0v15m0 0 5.143-5.625M6.143 15 1 9.375" />
            </svg></a>
    </div>
    <div class="pt-120 pb-130" id="next">
        <div class="container">
            <div class="row gy-100">
                <div class="col-lg-4 offset-lg-1"  >
                    <div class="bg-gray-light rounded-4 py-50 px-60">

                        <h5 class="mb-10 mt-35">Client</h5>
                        <p class="m-0">{{$offer->username}}</p>
                        <h5 class="mb-10 mt-35">Montant par heure</h5>
                        <p class="m-0">~ {{$offer->pirce_by_hour}} heure</p>
                        <h5 class="mb-10 mt-35">Duree</h5>
                        <p class="m-0">~ {{$offer->dure}} heure</p>
                        <h5 class="mb-10 mt-35">Type de service</h5>
                        <p class="m-0">~ {{$offer->name}} </p>
                    </div>
                </div>

                <div class="col-lg-7">
                    {{-- <h2 class="mb-45" > </h2> --}}
                    <h4 class="mb-30" >{{$offer->titre}} </h4>
                    <p class="mb-40"  >{{$offer->task_description}}</p>
                    <div >

              <form   wire:submit.prevent="addproposal">
                    <div class="row">
                        <div class="col-md-6">
                            <label>MONTANT PAR HEURE
                                <input type="number" class="form-control form-control-2" wire:model="amount">
                                <br>
                                @error('amount')
                                <small style="color:red;">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>TVA
                                <input type="number" class="form-control form-control-2" wire:model="number">
                                <br>
                                @error('number')
                                <small style="color:red;">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>
                    </div><br>
                    Frais de services <b><span id="fs"></span></b><br><br>
                    Frais de services TVA <b><span id="fstva"></span></b><br><br>
                    Frais de service TTC <b> <span id="fsttc"></span></b><br><br>
                    Montant HT <b><span id="mht"></span></b><br><br>

                        <!-- Button--><button class="btn btn-accent-1" type="submit"  >Ajouter une offre <svg class="ms-15 align-self-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                                <path fill="currentColor" d="M7.273 8.196a.85.85 0 0 0-1.362 1.017l1.362-1.017Zm4.627.89-.601-.602.601.601Zm2.112-2.115.601.6a.638.638 0 0 0 .01-.01l-.611-.59ZM9.035 1.99l-.591-.611-.009.009.6.602Zm-1.81.603a.85.85 0 1 0 1.199 1.205l-1.2-1.205Zm1.502 5.212a.85.85 0 1 0 1.362-1.017L8.727 7.804ZM4.1 6.914l.601.602-.601-.601ZM1.988 9.03l-.601-.6a.934.934 0 0 0-.01.01l.611.59Zm4.977 4.982.59.611a.638.638 0 0 0 .011-.01l-.6-.601Zm1.805-.604a.85.85 0 0 0-1.202-1.202l1.202 1.202ZM5.911 9.213a4.37 4.37 0 0 0 1.404 1.219l.816-1.492a2.67 2.67 0 0 1-.858-.744L5.911 9.213Zm1.404 1.219c.55.3 1.158.48 1.783.524l.122-1.695a2.667 2.667 0 0 1-1.089-.32l-.816 1.491Zm1.783.524a4.366 4.366 0 0 0 1.84-.264l-.594-1.593a2.667 2.667 0 0 1-1.124.162l-.122 1.696Zm1.84-.264a4.369 4.369 0 0 0 1.563-1.006L11.3 8.485a2.67 2.67 0 0 1-.955.614l.594 1.593Zm1.563-1.006 2.112-2.114-1.202-1.202-2.112 2.114L12.5 9.686Zm2.123-2.125a4.375 4.375 0 0 0 1.226-3.076l-1.7.015a2.675 2.675 0 0 1-.75 1.881l1.224 1.18Zm1.226-3.076a4.375 4.375 0 0 0-1.28-3.054l-1.202 1.202c.495.495.776 1.166.782 1.867l1.7-.015Zm-1.28-3.054a4.368 4.368 0 0 0-3.052-1.28l-.015 1.7c.7.005 1.37.286 1.865.782L14.57 1.43ZM11.518.151a4.368 4.368 0 0 0-3.074 1.227L9.626 2.6a2.668 2.668 0 0 1 1.877-.75l.015-1.7ZM8.435 1.386l-1.21 1.205 1.199 1.205 1.21-1.205-1.199-1.205Zm1.654 5.4a4.37 4.37 0 0 0-1.404-1.219L7.869 7.06c.336.183.629.437.858.744l1.362-1.017ZM8.685 5.568c-.55-.3-1.158-.48-1.783-.524L6.78 6.739c.382.028.753.137 1.089.32l.816-1.491Zm-1.783-.524a4.367 4.367 0 0 0-1.84.264l.594 1.593a2.667 2.667 0 0 1 1.124-.162l.122-1.695Zm-1.84.264a4.37 4.37 0 0 0-1.564 1.006l1.203 1.201c.271-.27.597-.48.955-.614l-.594-1.593ZM3.499 6.314 1.387 8.428 2.589 9.63l2.112-2.114L3.5 6.314ZM1.376 8.44A4.375 4.375 0 0 0 .15 11.515l1.7-.015a2.675 2.675 0 0 1 .75-1.881l-1.224-1.18ZM.15 11.515a4.375 4.375 0 0 0 1.28 3.054l1.202-1.202A2.675 2.675 0 0 1 1.85 11.5l-1.7.015Zm1.28 3.054a4.368 4.368 0 0 0 3.052 1.28l.015-1.7a2.668 2.668 0 0 1-1.865-.782L1.43 14.57Zm3.052 1.28a4.368 4.368 0 0 0 3.074-1.227L6.374 13.4a2.668 2.668 0 0 1-1.877.75l-.015 1.7Zm3.084-1.237 1.204-1.205-1.202-1.202-1.204 1.205 1.202 1.202Z" />
                            </svg></button></form>
                    </div>
                </div>

            </div>
        </div>
</div>

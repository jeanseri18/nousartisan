

<form class=" rounded bg-white p-35 text-left  " wire:submit.prevent="updaterequest">
    <h1 class="m-0 pe-30">Modification de la demande </h1>

    <br>

    <label>Titre du besion</label>
    <input class="form-control form-control-style-2" wire:model="request.titre" type="text"  value="{{$request->titre}}">
    @error('titre')
        <small style="color:red;">
            {{ $message }}
        </small>
    @enderror
    <br>
    <div class="row">
        <div class="col-md-6">
            <label>Ville</label>
            <input class="form-control form-control-style-2 " wire:model="ville" type="text"
               value="{{$request->town}}">
            @error('ville')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="col-md-6">
            <label>Code postale </label>
            <input class="form-control form-control-style-2 " wire:model="codepostal" type="text"
               value="{{$request->code_postale}}">
            @error('codepostal')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div><br>

        <label>Adresse de l'intervention</label>
        <input class="form-control form-control-style-2 " wire:model="adress" type="text"
             value="{{$request->adress}}">
        @error('adress')
            <small style="color:red;">
                {{ $message }}
            </small>
        @enderror
   <br>
    <label>Detail</label>
    <textarea class="form-control form-control-style-2" wire:model="detail"  value="{{$request->task_description}}">
            @error('detail')
<small style="color:red;">
                {{ $message }}
            </small>
@enderror
    </textarea><br>
    <div class="row">

        <div class="col-md-6"> <label>Date</label>
            <input class="form-control form-control-style-2 " wire:model="date" type="date"  value="{{$request->date}}">
            @error('date')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-6"> <label>Heure</label>
            <input class="form-control form-control-style-2 " wire:model="time" type="time"  value="{{$request->time}}">
            @error('time')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6"> <label>Duree en heure</label>
            <input class="form-control form-control-style-2 " wire:model="number" type="number" id='dure'
                 onchange="calcul();" value="{{$request->dure}}">
            @error('number')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-6"> <label>prix par heure</label>
            <input class="form-control form-control-style-2 " wire:model="prix" type="number" id="prix"
                 onchange="calcul();" value="{{$request->fix_price}}">
            @error('prix')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div><br>
    {{-- Le montant de la prestation est de 100 pour 10 heure de travail
        <br> --}}
    <br>
    Frais de services <b><span id="fs"></span></b><br><br>
    Frais de services TVA <b><span id="fstva"></span></b><br><br>
    Frais de service TTC <b> <span id="fsttc"></span></b><br><br>
    Montant HT <b><span id="mht"></span></b><br><br>
    La TVA est defini par le prestataire<br><br>

    Montant total <b><span id="mt"></span></b><br>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div><br>

    <button class="btn btn-accent-1">Valider</button>
</form>


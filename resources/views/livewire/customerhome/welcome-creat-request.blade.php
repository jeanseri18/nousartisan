
<div wire:ignore>

<form class=" rounded bg-white p-35 text-left" wire:submit.prevent="creatoffer">
    <h1 class="m-0 pe-30">Formulaire de demande </h1>

    <br>

    <label>Titre du besion</label>
    <input class="form-control form-control-style-2" wire:model="titre" type="text" placeholder="Titre du besion">
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
                placeholder="Adresse de l'intervention">
            @error('ville')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="col-md-6">
            <label>Code postale et ville</label>
            <input class="form-control form-control-style-2 " wire:model="codepostal" type="text"
                placeholder=" code postale et ville">
            @error('codepostal')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div><br>

        <label>Adresse de l'intervention</label>
        <input class="form-control form-control-style-2 " wire:model="adress" type="text"
            placeholder="Adresse de l'intervention">
        @error('adress')
            <small style="color:red;">
                {{ $message }}
            </small>
        @enderror
   <br>
    <label>Type de local</label>
    <select class="form-control form-control-style-2 " wire:model="local">
        <option selected="">Vous etes dans </option>
        <option>un appartement</option>
        <option>dans un logement</option>
    </select> @error('local')
        <small style="color:red;">
            {{ $message }}
        </small>
    @enderror
    <br>
    <label>Detail</label>
    <textarea class="form-control form-control-style-2" wire:model="detail" placeholder="detail">
            @error('detail')
<small style="color:red;">
                {{ $message }}
            </small>
@enderror
    </textarea><br>
    <div class="row">

        <div class="col-md-6"> <label>Date</label>
            <input class="form-control form-control-style-2 " wire:model="date" type="date" placeholder="date">
            @error('date')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-6"> <label>Heure</label>
            <input class="form-control form-control-style-2 " wire:model="time" type="time" placeholder="heure" min="07:00" max="18:00">
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
                placeholder="Duree en heure">
            @error('number')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-6"> <label>prix par heure</label>
            <input class="form-control form-control-style-2 " wire:model="prix" type="number" id="prix"
                placeholder="prix par heure">
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

    Montant total <b><span id="mt"></span></b>
    <br>
    <br>

    <h4>creation de compte</h4>



<input class="form-control form-control-style-2 mt-13 " type="text" wire:model="email" placeholder=" Email *">

    @error('email')
         <small style="color:red;">
             {{ $message }}
         </small>
    @enderror

    <div class="row">
        <div class="col-md-6">

    <input class="form-control form-control-style-2 mt-13" type="text" wire:model="name" placeholder="Nom et Prenom*">
    @error('name')
         <small style="color:red;">
             {{ $message }}
         </small>
    @enderror</div>
        <div class="col-md-6">
<input class="form-control form-control-style-2 mt-13 " type="tel" wire:model="phone" placeholder=" Telephone *">

    @error('phone')
         <small style="color:red;">
             {{ $message }}
         </small>
    @enderror
        </div>
    </div>

<input class="form-control form-control-style-2 mt-13" type="text" wire:model="address_facturation" placeholder=" Adresse de facturation *">

    @error('address_facturation')
         <small style="color:red;">
             {{ $message }}
         </small>
    @enderror
    <div class="row">
        <div class="col-md-6">
<input class="form-control form-control-style-2 mt-13" type="password" wire:model="password" placeholder=" Mot de passe  *">

    @error('password')
         <small style="color:red;">
             {{ $message }}
         </small>
    @enderror
        </div>
            <div class="col-md-6">
<input class="form-control form-control-style-2 mt-13" type="password" wire:model="password_confirmation" placeholder=" Confirmation du mot de passe *">
            </div></div>
    <div><br>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div><br>

    <button class="btn btn-accent-1">Valider</button>
</form>
</div>

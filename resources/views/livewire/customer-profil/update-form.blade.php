<div>
    <form wire:submit.prevent="updateProfil" method="get">
        <div>
            @if (session()->has('messageprofil'))
                <div class="alert alert-success">
                    {{ session('messageprofil') }}
                </div>
            @endif
        </div>
        <label>Nom et prenom</label>
        <input class="form-control form-control-style-2" name="name" type="text" placeholder="Nom et prenom"
            value="{{ $user->name }}" 
            wire:model="name"
        >

        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Numero de téléphone</label>
                <input class="form-control form-control-style-2 " name="tel" type="text"
                    placeholder=" Numero de téléphone" value="{{ $user->phone }}" 
                    wire:model="phone"
                >

            </div>
            <div class="col-md-4">
                <label>Adresse email</label>
                <input class="form-control form-control-style-2 "name="email" type="text"
                    placeholder="Adresse email" value="{{ $user->email }}" 
                        wire:model="email"
                    >


            </div>
            <div class="col-md-4">
                <label>Adresse de facturation</label>
                <input class="form-control form-control-style-2 " name="adress" type="text"
                    placeholder=" Adresse de facturation" value="{{ $user->address_facturation }}" 
                        wire:model="address_facturation"
                    >

            </div>
        </div><br>
        <button class="btn" type="submit">Modifier mes informations</button>
    </form>
</div>

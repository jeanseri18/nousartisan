<div>
    <form class=" rounded  p-35 text-left" style="background-color: rgb(250, 250, 250)" wire:click.prevent="register">
        <center><h4>S'inscription</h4></center>
        <label>Numero siren</label>
        <input class="form-control form-control-style-2" type="text" placeholder="Numero siren"
        wire:model="numero_siren">

                @error("numero_siren")
                    <span style="color:red;"> {{ $message}} </span>
                @enderror

        <br>
        <div class="row">
            <div class="col-md-6">
                <label>Nom de l'entreprise</label>
                <input class="form-control form-control-style-2 " type="text" placeholder="Nom de l'entreprise"
                wire:model="name">

                        @error("name")
                            <span style="color:red;"> {{ $message}} </span>
                        @enderror

            </div>
            <div class="col-md-6">
                <label>Numero TVA</label>
                <input class="form-control form-control-style-2 " type="text" placeholder=" Numero TVA"
                wire:model="numero_tva">

                        @error("numero_tva")
                            <span style="color:red;"> {{ $message}} </span>
                        @enderror

            </div>
        </div><br>

        <label>Nom du gerant</label>
        <input type="text" class="form-control form-control-style-2" placeholder="Nom du gerant"
                wire:model="owner_name">

                @error("owner_name")
                    <span style="color:red;"> {{ $message}} </span>
                @enderror

        <br>
        <div class="row">
            <div class="col-md-6"> <label>Email</label>
                <input class="form-control form-control-style-2 " type="email" placeholder="Email"
                wire:model="email">

                        @error("email")
                            <span style="color:red;"> {{ $message}} </span>
                        @enderror

            </div>
            <div class="col-md-6"> <label>Adresse electronique</label>
                <input class="form-control form-control-style-2 " type="text" placeholder="Adresse electronique"
                wire:model="address_electro">

                        @error("address_electro")
                            <span style="color:red;"> {{ $message}} </span>
                        @enderror

            </div>
        </div><br>
        <label>Mot de passe</label>
        <input class="form-control form-control-style-2 " type="password" placeholder="Mot de passe"
        wire:model="password">

                @error("password")
                    <span style="color:red;"> {{ $message}} </span>
                @enderror

        <br>
        <label>Confirmation du mot de passe</label>
            <input class="form-control form-control-style-2 " type="password"
                placeholder="Confirmation du mot de passe" wire:model="password_confirmation">

                @error("password_confirmation")
                    <span style="color:red;"> {{ $message}} </span>
                @enderror
        <br>


        <button class="btn btn-accent-1" type="submit">Valider</button>
    </form>
</div>

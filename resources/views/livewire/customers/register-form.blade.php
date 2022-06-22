<div>
    <form class="ms-lg-70 rounded bg-white p-35 text-center" wire:submit.prevent="register">
        <h4 class="mb-30">Nousartisans</h4>
        <input class="form-control form-control-style-2" type="text" wire:model="name" placeholder="Nom et Prenom*">
            @error('name')
                 <small style="color:red;">
                     {{ $message }}
                 </small>
            @enderror

        <input class="form-control form-control-style-2 mt-13" type="text" wire:model="email" placeholder=" Email *">

            @error('email')
                 <small style="color:red;">
                     {{ $message }}
                 </small>
            @enderror

        <input class="form-control form-control-style-2 mt-13" type="tel" wire:model="phone" placeholder=" Telephone *">

            @error('phone')
                 <small style="color:red;">
                     {{ $message }}
                 </small>
            @enderror

        <input class="form-control form-control-style-2 mt-13" type="text" wire:model="address_facturation" placeholder=" Adresse de facturation *">

            @error('address_facturation')
                 <small style="color:red;">
                     {{ $message }}
                 </small>
            @enderror

        <input class="form-control form-control-style-2 mt-13" type="password" wire:model="password" placeholder=" Mot de passe  *">

            @error('password')
                 <small style="color:red;">
                     {{ $message }}
                 </small>
            @enderror

        <input class="form-control form-control-style-2 mt-13" type="password" wire:model="password_confirmation" placeholder=" Confirmation du mot de passe *">

            @error('password_confirmation')
                 <small style="color:red;">
                     {{ $message }}
                 </small>
            @enderror

        {{-- <select class="form-control form-control-style-2 mt-13">
            <option selected="">I interested in ...</option>
            <option>Colibri Creative Project</option>
            <option>Colibri Project</option>
            <option>Happy Moments Photoset</option>
            <option>Luxury Car Website</option>
            <option>Funny Dog</option>
            <option>Creative Branding</option>
        </select> --}}<br>
        <!-- Button--><button class="btn btn-accent-1">Valider</button>
    </form>
</div>

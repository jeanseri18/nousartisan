<div>
    <form class="ms-lg-70 rounded bg-white p-35 text-center" wire:submit.prevent="login"><br>
        <h4 class="mb-30">Nousartisans</h4><br>



        <input class="form-control form-control-style-2 mt-13" wire:model="email" type="email" placeholder=" Email *">
            @error('email')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror
            <br>
        <input class="form-control form-control-style-2 mt-13" wire:model="password" type="password" placeholder=" Mot de passe  *">
            @error('password')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror


            @if ($no_loggin == true)
                <small class="m-3" style="color:red;">{{ __('auth.failed') }}</small>
            @endif
            <br>
<!-- Button--><button class="btn btn-accent-1">Connexion</button><br>
    </form>
</div>

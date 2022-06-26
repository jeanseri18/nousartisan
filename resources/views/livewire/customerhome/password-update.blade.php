<form wire:submit.prevent="updatepassword">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <h3 class="m-0 pe-30">Mot de passe</h3>
    <hr>
    <label>Mot de passe actuel </label>
    <input class="form-control form-control-style-2" type="text"  wire:model="password" placeholder="Mot de passe actuel ">
    @error('password')
    <small style="color:red;">
        {{ $message }}
    </small>
@enderror
    <br>
    <label>Nouveau mot de passe</label>
    <input class="form-control form-control-style-2" type="text"  wire:model="newpassword" placeholder="Nouveau mot de passe">
    @error('newpassword')
    <small style="color:red;">
        {{ $message }}
    </small>
@enderror
    <br>
    <br>
    <button class="btn ">Modifier mon mot de passe</button>
</form>

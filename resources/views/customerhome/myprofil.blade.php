@extends('customerhome.app')
@section('content')
    <div class="container">

        <form class=" rounded bg-white p-35 text-left">

            <h1 class="m-0 pe-30">Mon profil</h1><br>
            <hr>
            <h3 class="m-0 pe-30">Photo de profile</h3><hr>

            <img src="https://www.nousartisans.com/theme/assets/img/default-avatar.png" class="rounded-circle" width="150"><br><button class="btn " style="height: 45px">changer</button>
            <hr>
            <h3 class="m-0 pe-30">Mes informations</h3>
            <hr>
            <label>Nom et prenom</label>
            <input class="form-control form-control-style-2" type="text" placeholder="Nom et prenom">
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Numero de téléphone</label>
                    <input class="form-control form-control-style-2 " type="text" placeholder=" Numero de téléphone">
                </div>
                <div class="col-md-4">
                    <label>Adresse email</label>
                    <input class="form-control form-control-style-2 " type="text" placeholder="Adresse email">
                </div>
                <div class="col-md-4">
                    <label>Adresse de facturation</label>
                    <input class="form-control form-control-style-2 " type="text" placeholder=" Adresse de facturation">
                </div>
            </div><br>
            <button class="btn ">Modifier mes informations</button>
            <hr>
            <h3 class="m-0 pe-30">Mot de passe</h3>
            <hr>
            <label>Mot de passe actuel </label>
            <input class="form-control form-control-style-2" type="text" placeholder="Mot de passe actuel ">
            <br>
            <label>Nouveau mot de passe</label>
            <input class="form-control form-control-style-2" type="text" placeholder="Nouveau mot de passe">
            <br>
            <br>
            <button class="btn ">Modifier mon mot de passe</button>



        </form>
    </div>
@endsection

@extends('workershome.app')
@section('content')
    <div class="container">

        <form class=" rounded bg-white p-35 text-left">

            <h1 class="m-0 pe-30">Mon profil</h1><br>
            <hr>
            <h3 class="m-0 pe-30">Photo de profile</h3>
            <hr>

            <img src="https://www.nousartisans.com/theme/assets/img/default-avatar.png" class="rounded-circle"
                width="150"><br><button class="btn " style="height: 45px">changer</button>
            <hr>
            <h3 class="m-0 pe-30">Mes informations personnel</h3>
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
            <button class="btn ">Modifier</button>
            <hr>



            <h3 class="m-0 pe-30">Mes informations professionnel</h3>
            <hr>
            <label>Nom de l'entreprise</label>
            <input class="form-control form-control-style-2" type="text" placeholder="Nom de l'entreprise">
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Numero de téléphone</label>
                    <input class="form-control form-control-style-2 " type="text" placeholder=" Numero de téléphone">
                </div>
                <div class="col-md-4">
                    <label>SIREN</label>
                    <input class="form-control form-control-style-2 " type="text" placeholder="SIREN">
                </div>
                <div class="col-md-4">
                    <label>Numéro TVA</label>
                    <input class="form-control form-control-style-2 " type="text" placeholder=" Numéro TVA">
                </div>
            </div><br>
            <button class="btn ">Modifier </button>
            <hr>
            <h3 class="m-0 pe-30">Assurance</h3>
            <hr> <label>Assurance décennale</label><br>
            <div class="card rounded-1 overflow-hidden" style="background-color: rgb(252, 192, 192);">
                <div class="container row" style="margin: 30px">

                    <div class="col-md-8">
                        <input class="form-control form-control-style-2" type="file" placeholder="Assurance décennale">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-danger" type="button">Modifier</button>
                    </div>

                </div>
            </div>
            <br> <label>Assurance RC PRO</label><br>
            <div class="card rounded-1 overflow-hidden card-danger" style="background-color: rgb(252, 192, 192);">
                <div class="container row" style="margin: 30px">

                    <div class="col-md-8">
                        <input class="form-control form-control-style-2" type="file" placeholder="Assurance RC PRO">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-danger" type="button">Modifier</button>
                    </div>

                </div>
            </div>
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
            <button class="btn ">Modifier </button>
            



        </form>
    </div>
@endsection

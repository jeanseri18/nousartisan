@extends('welcome.app')
@section('content')
<br>
    <div class="row " >
        <div class="col-md-3">

        </div>
        <div class="col-md-5">

            <form class=" rounded  p-35 text-left" style="background-color: rgb(250, 250, 250)">
                <center><h4>S'inscription</h4></center>
                <label>Numero siren</label>
                <input class="form-control form-control-style-2" type="text" placeholder="Numero siren">
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nom de l'entreprise</label>
                        <input class="form-control form-control-style-2 " type="text" placeholder="Nom de l'entreprise">
                    </div>
                    <div class="col-md-6">
                        <label>Numero TVA</label>
                        <input class="form-control form-control-style-2 " type="text" placeholder=" Numero TVA">
                    </div>
                </div><br>

                <label>Nom du gerant</label>
                <input type="text" class="form-control form-control-style-2" placeholder="Nom du gerant">
                <br>
                <div class="row">


                    <div class="col-md-6"> <label>Email</label>
                        <input class="form-control form-control-style-2 " type="email" placeholder="Email">
                    </div>
                    <div class="col-md-6"> <label>Adresse electronique</label>
                        <input class="form-control form-control-style-2 " type="text" placeholder="Adresse electronique">
                    </div>
                </div><br>
                <label>Mot de passe</label>
                <input class="form-control form-control-style-2 " type="password" placeholder="Mot de passe">
                <br> <label>Confirmation du mot de passe</label>
                <input class="form-control form-control-style-2 " type="password"
                    placeholder="Confirmation du mot de passe">

                <br>


                <button class="btn btn-accent-1">Valider</button>
            </form>
        </div>
        <div class="col-md-3">

        </div>


    </div><br>

@endsection

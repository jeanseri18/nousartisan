@extends('workershome.app')
@section('content')
<div class="container">  <br>
    <br>
    <br>
    <br>
    <div class=" row">



        <div class="card   col-md-8 container" style="background-color: #f6f6f6;margin:20px ;width:75%"><br>
            <h2>Titre </h2>
            <b>Lieu de mission:</b><br>
            <b>Date et heure de la mission:</b>

            <br>
            <b>Service:</b><br>
            <b><u>Description du service</u></b><br>
            <br>
            <u><b>Rémunération du service</b></u>
            <font style="font-size: 24px;color:red"> 24 heures pour 16 € / heure + Frais de service</font>

            <div class="row">
                <div class="col-md-6 btn">
                    Total à Payer
                </div>
                <div class="col-md-6">

                    <a class="btn  btn-accent-1 " href="" target="_self">Proposer mes services</a>
                </div><br>
            </div><br>


        </div>
        <div class="col-md-2"><br>
            <img src="https://www.nousartisans.com/theme/assets/img/default-avatar.png" class="rounded-circle"
                width="150"><br><br>NOM du client
        </div>
    </div></div>
    <br><br><br><br>
@endsection

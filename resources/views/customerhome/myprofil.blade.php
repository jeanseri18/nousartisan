@extends('customerhome.app')
@section('content')
    <div class="container">

        {{-- <forlass=" rounded bg-white p-35 text-left"> --}}


        <h1 class="m-0 pe-30">Mon profil</h1><br>
        <hr>
        <h3 class="m-0 pe-30">Photo de profile</h3>
        <hr>

        <img src="https://www.nousartisans.com/theme/assets/img/default-avatar.png" class="rounded-circle"
            width="150"><br><button class="btn " style="height: 45px">changer</button>
        <hr>
        <h3 class="m-0 pe-30">Mes informations</h3>
        <hr>

        <form action="/customer-home/profilupdate/{{$user->id}}" method="get">
            <div>
                @if (session()->has('messageprofil'))
                    <div class="alert alert-success">
                        {{ session('messageprofil') }}
                    </div>
                @endif
            </div>
            <label>Nom et prenom</label>
            <input class="form-control form-control-style-2" name="name" type="text" placeholder="Nom et prenom"
                value="{{ $user->name }}">


            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Numero de téléphone</label>
                    <input class="form-control form-control-style-2 " name="tel" type="text"
                        placeholder=" Numero de téléphone" value="{{ $user->phone }}">

                </div>
                <div class="col-md-4">
                    <label>Adresse email</label>
                    <input class="form-control form-control-style-2 "name="email" type="text"
                        placeholder="Adresse email" value="{{ $user->email }}">


                </div>
                <div class="col-md-4">
                    <label>Adresse de facturation</label>
                    <input class="form-control form-control-style-2 " name="adress" type="text"
                        placeholder=" Adresse de facturation" value="{{ $user->address_facturation }}">

                </div>
            </div><br>
            <button class="btn ">Modifier mes informations</button>
        </form>
        <hr>
        @livewire('customerhome.password-update')



    </div>
@endsection

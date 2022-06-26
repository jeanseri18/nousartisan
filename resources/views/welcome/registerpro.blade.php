@extends('welcome.app')
@section('content')
<br>
    <div class="row " >
        <div class="col-md-3">

        </div>
        <div class="col-md-5">
           @livewire('workers.register-form')
        </div>
        <div class="col-md-3">

        </div>


    </div><br>

@endsection

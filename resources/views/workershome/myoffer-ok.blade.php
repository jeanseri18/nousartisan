@extends('workershome.app')
@section('content')
    <div style="margin: 40px">
        <br>
        <a href="{{url('/worker-home/myoffer')}}" class="btn btn-accent-2" style="background-color:#f5f5f5;color:black;">Toutes les
            offres</a>
        <a href="{{url('/worker-home/myoffer-wait')}}" class="btn btn-accent-2" style="background-color:#f5f5f5;color:black;">Offres en cours</a>
        <a href="{{url('/worker-home/myoffer-ok')}}" class="btn btn-accent-2" type="button" style="background-color:blanchedalmond;color:black;">Offres
            finalisées</a>
        <br><br>




        <div class="row">
            @livewire('worker.list-offer',['status'=>'2'])

        </div>
    </div>
    </div><br><br><br><br></div>
@endsection

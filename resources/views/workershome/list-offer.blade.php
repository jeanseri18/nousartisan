@extends('workershome.app')
@section('content')
<br><br>
<div class="container">
<div class="row">
    @foreach ( $offers as $offer )

<div class="col-md-3" style="padding: 10px"> <br>
    <a href="{{ url('worker-home/detail-offer',['id'=> $offer->id,'name'=>$offer->titre]) }}">
<div class="feedback bg-dark-light rounded-4 pe-60 h-100 ">
    {{-- <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
            <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z"></path>
        </svg></div> --}}
    <div class="feedback-header d-flex align-items-center mb-35">
        <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="    {{$offer->file_url =='' ? 'https://www.nousartisans.com/theme/assets/img/default-avatar.png' : $offer->image}}" alt="" width="64" height="64"></div>
        <div class="flex-grow-1 ms-20">
            <h6 class="feedback-author text-white mb-5">{{$offer->name}}</h6>
            <p class="feedback-position text-gray font-size-14 m-0">{{$offer->town}}</p>
        </div>
    </div>
    <p class="feedback-text fw-medium text-white m-0" style="font-size: 14px">“ {{$offer->titre}}”
        <br><i style="color: blue"><center>{{$offer->price_by_hour}}€/heure</center></i></p>
</div></a>

</div>
@endforeach

<div><br><br><center>
     @if ($offers->hasPages())
    {{ $offers->links() }}
@endif</center>
</div>
</div>

</div>
@endsection

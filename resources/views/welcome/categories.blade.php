
@extends('welcome.app')
@section('content')
<div class="pt-120 pb-130 bg-gray-light callToActionPrev">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-4 offset-lg-4 text-center"><span class="badge bg-light text-dark mb-20" data-show="startbox">Services</span>
                    <h4 class="m-0" data-show="startbox" data-show-delay="100">Trouvez le prestataire ideale à vos besions</h4>
                </div>
            </div>
            <div class="row gy-30">
                @foreach ($categories as $categorie)



                <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="400">
                    <!-- Service case-->
                    <div class="service-case lift rounded-4 bg-white shadow overflow-hidden"><a class="service-case-image"
                            href="{{ route('services',['id'=> $categorie->id]) }}" data-img-height style="--img-height: 64%;"><img loading="lazy"
                                src="{{$categorie->image }}" alt=""></a>
                        <div class="service-case-body position-relative">
                            <!-- Circle icon-->

                           <center> <h4 class="service-case-title mb-15">{{ $categorie->name }}</h4></center>
                            <a class="service-case-arrow stretched-link" href=""></a>
                        </div>
                    </div>

                </div> @endforeach

        </div>
    </div><br><br>

@endsection

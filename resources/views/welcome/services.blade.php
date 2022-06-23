@extends('welcome.app')
@section('content')
    <div class="pt-120 pb-130">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h3 class="m-0" data-show="startbox">les<span class="highlight-lg"> services disponible </span> </h3>
                </div>
            </div>
            <div class="row gy-30">

                @foreach ($services as $service)
                    <div class="col-12 col-lg-6" data-show="startbox">

                        <!-- Service card-->
                        <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                            <div class="service-card-image flex-shrink-0"data-img-height style="--img-height: 100%;"> <img
                                    loading="lazy" src="{{$service->image }}" alt=""></div>

                            <div class="service-card-body flex-grow-1">
                                <h4 class="service-card-title mb-15">{{ $service->name }}</h4>
                                <p class="service-card-text font-size-15 mb-30"  style="text-decoration: none;color:#f01f4b;">
          {{ $service->price }} € - {{ $service->real_price }} € par
                                        heure</p><a
                                    class="service-card-arrow stretched-link btn-accent-1 btn"
                                    href="{{ route('formrequest', ['id' => $service->id, 'name' => $service->name]) }}"
                                    style="text-decoration: none;font-size:13px;"> Demamde ce service
                                    {{-- <svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path stroke="currentColor" stroke-width="1.7"
                                            d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                    </svg> --}}
                                </a>
                            </div>
                        </div>
                    </div><!-- Item-->
                @endforeach

            </div>
        </div>
    </div>
@endsection

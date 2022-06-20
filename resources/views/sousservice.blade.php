@extends('app')
@section('content')


<div class="pt-120 pb-130">
    <div class="container">
        <div class="row mb-90">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h3 class="m-0" data-show="startbox">We <span class="highlight-lg">les services disponible pour</span> la plomberie</h3>
            </div>
        </div>
        <div class="row gy-30">
            <!-- Item-->
            <div class="col-12 col-lg-6" data-show="startbox">
                <!-- Service card-->
                <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                    <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;"><img loading="lazy" src="https://www.nousartisans.com/gla-adminer/uploads/article/full/168338013_30-01-2022_561347.jpg" alt=""></div>
                    <div class="service-card-body flex-grow-1">
                        <h4 class="service-card-title mb-15">Pose de luminaire</h4>
                        <p class="service-card-text font-size-15 mb-30">Stars life that waters firmament our created you.</p><a class="service-card-arrow stretched-link" href="/servicesingle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                            </svg></a>
                    </div>
                </div>
            </div><!-- Item-->
            <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                <!-- Service card-->
                <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                    <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;"><img loading="lazy" src="https://www.nousartisans.com/gla-adminer/uploads/article/full/168338013_30-01-2022_561347.jpg" alt=""></div>
                    <div class="service-card-body flex-grow-1">
                        <h4 class="service-card-title mb-15">Pose de luminaire</h4>
                        <p class="service-card-text font-size-15 mb-30">Lights creeping good herb their won't dry days she'd grass.</p><a class="service-card-arrow stretched-link" href="/servicesingle"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                            </svg></a>
                    </div>
                </div>
            </div><!-- Item-->

        </div>
    </div>
</div>

@endsection

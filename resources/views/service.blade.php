
@extends('appauth')
@section('content')
<div class="pt-120 pb-130 bg-gray-light callToActionPrev">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-4 offset-lg-4 text-center"><span class="badge bg-light text-dark mb-20" data-show="startbox">Services</span>
                    <h4 class="m-0" data-show="startbox" data-show-delay="100">Trouvez le prestataire ideale à vos besions</h4>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="400">
                    <!-- Service case-->
                    <div class="service-case lift rounded-4 bg-white shadow overflow-hidden"><a class="service-case-image"
                            href="/detailservice" data-img-height style="--img-height: 64%;"><img loading="lazy"
                                src="assets/img/service-case-5-740x480.jpg" alt=""></a>
                        <div class="service-case-body position-relative">
                            <!-- Circle icon-->
                            <div
                                class="circle-icon circle-icon-sm text-white bg-accent-1 position-absolute me-50 top-0 end-0 translate-middle-y">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M12.5 0h-10A2.5 2.5 0 0 0 0 2.5v20A2.5 2.5 0 0 0 2.5 25h15a2.5 2.5 0 0 0 2.5-2.5v-15L12.5 0ZM5 7.75a1 1 0 1 0 0 2h2.5a1 1 0 1 0 0-2H5Zm0 5a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2H5Zm0 5a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2H5Z"
                                        clip-rule="evenodd" />
                                </svg></div>
                            <h4 class="service-case-title mb-15">Project Management</h4>
                            <a class="service-case-arrow stretched-link" href="service-single.html"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            <div class="text-center mt-80">
                {{-- <div data-show="startbox">
                    <!-- Button--><a class="btn btn-light" href="services-01.html" target="_self">All Services</a>
                </div> --}}
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')
@section('title')
    Service Requests 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Service Requests</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('serviceRequests.create')}}" class="btn btn-primary form-btn">Service Request <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('service_requests.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


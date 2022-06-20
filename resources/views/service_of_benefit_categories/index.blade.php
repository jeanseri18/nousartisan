@extends('layouts.app')
@section('title')
    Service Of Benefit Categories 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Service Of Benefit Categories</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('serviceOfBenefitCategories.create')}}" class="btn btn-primary form-btn">Service Of Benefit Category <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('service_of_benefit_categories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


@extends('layouts.app')
@section('title')
    Benefit Categories 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Benefit Categories</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('benefitCategories.create')}}" class="btn btn-primary form-btn">Benefit Category <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('benefit_categories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


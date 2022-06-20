@extends('layouts.app')
@section('title')
    Statuses 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Statuses</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('statuses.create')}}" class="btn btn-primary form-btn">Status <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('statuses.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


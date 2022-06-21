@extends('layouts.app')
@section('title')
    Customers 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Customers</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('customers.create')}}" class="btn btn-primary form-btn">Customer <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('customers.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


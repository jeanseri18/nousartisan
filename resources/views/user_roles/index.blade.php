@extends('layouts.app')
@section('title')
    User Roles 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>User Roles</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('userRoles.create')}}" class="btn btn-primary form-btn">User Role <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('user_roles.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


@extends('layouts.app')
@section('title')
    Service Proposals 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Service Proposals</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('serviceProposals.create')}}" class="btn btn-primary form-btn">Service Proposal <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('service_proposals.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection


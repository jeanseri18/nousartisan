@extends('layouts.app')
@section('title')
    Edit Benefit Category 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Benefit Category</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('benefitCategories.index') }}"  class="btn btn-primary">Back</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($benefitCategory, ['route' => ['benefitCategories.update', $benefitCategory->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            @include('benefit_categories.fields')
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Worker Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('worker_id', 'Worker Id:') !!}
    {!! Form::number('worker_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Benefit Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('benefit_category_id', 'Benefit Category Id:') !!}
    {!! Form::number('benefit_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Of Benefit Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_of_benefit_category_id', 'Service Of Benefit Category Id:') !!}
    {!! Form::number('service_of_benefit_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Sup Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress_sup', 'Adress Sup:') !!}
    {!! Form::text('adress_sup', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_postal', 'Code Postal:') !!}
    {!! Form::text('code_postal', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Town Field -->
<div class="form-group col-sm-6">
    {!! Form::label('town', 'Town:') !!}
    {!! Form::text('town', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Task Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('task_description', 'Task Description:') !!}
    {!! Form::textarea('task_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Price By Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_by_hour', 'Price By Hour:') !!}
    {!! Form::text('price_by_hour', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fix Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fix_price', 'Fix Price:') !!}
    {!! Form::text('fix_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Price After Nego Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_after_nego', 'Price After Nego:') !!}
    {!! Form::text('price_after_nego', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('serviceRequests.index') }}" class="btn btn-light">Cancel</a>
</div>

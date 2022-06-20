<!-- Benefit Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('benefit_category_id', 'Benefit Category Id:') !!}
    {!! Form::number('benefit_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Display Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('display_price', 'Display Price:') !!}
    {!! Form::text('display_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Real Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('real_price', 'Real Price:') !!}
    {!! Form::text('real_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Publisher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    {!! Form::number('publisher_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('serviceOfBenefitCategories.index') }}" class="btn btn-light">Cancel</a>
</div>

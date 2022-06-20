<!-- Service Request Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_request_id', 'Service Request Id:') !!}
    {!! Form::number('service_request_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Of Proposal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_of_proposal', 'Price Of Proposal:') !!}
    {!! Form::text('price_of_proposal', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quotation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('quotation', 'Quotation:') !!}
    {!! Form::textarea('quotation', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('serviceProposals.index') }}" class="btn btn-light">Cancel</a>
</div>

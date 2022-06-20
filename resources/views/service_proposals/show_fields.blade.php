<!-- Service Request Id Field -->
<div class="form-group">
    {!! Form::label('service_request_id', 'Service Request Id:') !!}
    <p>{{ $serviceProposal->service_request_id }}</p>
</div>

<!-- Price Of Proposal Field -->
<div class="form-group">
    {!! Form::label('price_of_proposal', 'Price Of Proposal:') !!}
    <p>{{ $serviceProposal->price_of_proposal }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status Id:') !!}
    <p>{{ $serviceProposal->status_id }}</p>
</div>

<!-- Quotation Field -->
<div class="form-group">
    {!! Form::label('quotation', 'Quotation:') !!}
    <p>{{ $serviceProposal->quotation }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $serviceProposal->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $serviceProposal->updated_at }}</p>
</div>


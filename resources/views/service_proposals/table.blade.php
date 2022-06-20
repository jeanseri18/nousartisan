<div class="table-responsive">
    <table class="table" id="serviceProposals-table">
        <thead>
            <tr>
                <th>Service Request Id</th>
        <th>Price Of Proposal</th>
        <th>Status Id</th>
        <th>Quotation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($serviceProposals as $serviceProposal)
            <tr>
                       <td>{{ $serviceProposal->service_request_id }}</td>
            <td>{{ $serviceProposal->price_of_proposal }}</td>
            <td>{{ $serviceProposal->status_id }}</td>
            <td>{{ $serviceProposal->quotation }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['serviceProposals.destroy', $serviceProposal->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('serviceProposals.show', [$serviceProposal->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('serviceProposals.edit', [$serviceProposal->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

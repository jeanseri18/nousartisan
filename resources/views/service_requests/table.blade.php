<div class="table-responsive">
    <table class="table" id="serviceRequests-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Worker Id</th>
        <th>Benefit Category Id</th>
        <th>Service Of Benefit Category Id</th>
        <th>Adress</th>
        <th>Adress Sup</th>
        <th>Code Postal</th>
        <th>City</th>
        <th>Town</th>
        <th>Date</th>
        <th>Task Description</th>
        <th>Price By Hour</th>
        <th>Status Id</th>
        <th>Fix Price</th>
        <th>Price After Nego</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($serviceRequests as $serviceRequest)
            <tr>
                       <td>{{ $serviceRequest->user_id }}</td>
            <td>{{ $serviceRequest->worker_id }}</td>
            <td>{{ $serviceRequest->benefit_category_id }}</td>
            <td>{{ $serviceRequest->service_of_benefit_category_id }}</td>
            <td>{{ $serviceRequest->adress }}</td>
            <td>{{ $serviceRequest->adress_sup }}</td>
            <td>{{ $serviceRequest->code_postal }}</td>
            <td>{{ $serviceRequest->city }}</td>
            <td>{{ $serviceRequest->town }}</td>
            <td>{{ $serviceRequest->date }}</td>
            <td>{{ $serviceRequest->task_description }}</td>
            <td>{{ $serviceRequest->price_by_hour }}</td>
            <td>{{ $serviceRequest->status_id }}</td>
            <td>{{ $serviceRequest->fix_price }}</td>
            <td>{{ $serviceRequest->price_after_nego }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['serviceRequests.destroy', $serviceRequest->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('serviceRequests.show', [$serviceRequest->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('serviceRequests.edit', [$serviceRequest->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

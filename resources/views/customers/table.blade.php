<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Adresse Facturation</th>
        <th>Adress2</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                       <td>{{ $customer->firstname }}</td>
            <td>{{ $customer->lastname }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->adresse_facturation }}</td>
            <td>{{ $customer->adress2 }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('customers.show', [$customer->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

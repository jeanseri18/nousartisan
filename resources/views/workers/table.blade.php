<div class="table-responsive">
    <table class="table" id="workers-table">
        <thead>
            <tr>
                <th>Number Siren</th>
        <th>Name</th>
        <th>Number Tva</th>
        <th>Owner Number</th>
        <th>Owner Name</th>
        <th>Email</th>
        <th>Tel</th>
        <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($workers as $worker)
            <tr>
                       <td>{{ $worker->number_siren }}</td>
            <td>{{ $worker->name }}</td>
            <td>{{ $worker->number_tva }}</td>
            <td>{{ $worker->owner_number }}</td>
            <td>{{ $worker->owner_name }}</td>
            <td>{{ $worker->email }}</td>
            <td>{{ $worker->tel }}</td>
            <td>{{ $worker->password }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['workers.destroy', $worker->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('workers.show', [$worker->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('workers.edit', [$worker->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

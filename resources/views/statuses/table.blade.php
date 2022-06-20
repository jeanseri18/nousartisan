<div class="table-responsive">
    <table class="table" id="statuses-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Color Code</th>
        <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statuses as $status)
            <tr>
                       <td>{{ $status->name }}</td>
            <td>{{ $status->description }}</td>
            <td>{{ $status->color_code }}</td>
            <td>{{ $status->role }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['statuses.destroy', $status->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('statuses.show', [$status->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('statuses.edit', [$status->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

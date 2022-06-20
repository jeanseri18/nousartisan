<div class="table-responsive">
    <table class="table" id="userRoles-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userRoles as $userRole)
            <tr>
                       <td>{{ $userRole->name }}</td>
            <td>{{ $userRole->description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['userRoles.destroy', $userRole->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('userRoles.show', [$userRole->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('userRoles.edit', [$userRole->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

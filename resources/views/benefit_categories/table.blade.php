<div class="table-responsive">
    <table class="table" id="benefitCategories-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($benefitCategories as $benefitCategory)
            <tr>
                       <td>{{ $benefitCategory->name }}</td>
            <td>{{ $benefitCategory->description }}</td>
            <td>{{ $benefitCategory->image }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['benefitCategories.destroy', $benefitCategory->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('benefitCategories.show', [$benefitCategory->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('benefitCategories.edit', [$benefitCategory->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

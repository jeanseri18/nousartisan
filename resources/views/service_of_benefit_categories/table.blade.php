<div class="table-responsive">
    <table class="table" id="serviceOfBenefitCategories-table">
        <thead>
            <tr>
                <th>Benefit Category Id</th>
        <th>Name</th>
        <th>Display Price</th>
        <th>Real Price</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Publisher Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($serviceOfBenefitCategories as $serviceOfBenefitCategory)
            <tr>
                       <td>{{ $serviceOfBenefitCategory->benefit_category_id }}</td>
            <td>{{ $serviceOfBenefitCategory->name }}</td>
            <td>{{ $serviceOfBenefitCategory->display_price }}</td>
            <td>{{ $serviceOfBenefitCategory->real_price }}</td>
            <td>{{ $serviceOfBenefitCategory->price }}</td>
            <td>{{ $serviceOfBenefitCategory->description }}</td>
            <td>{{ $serviceOfBenefitCategory->image }}</td>
            <td>{{ $serviceOfBenefitCategory->publisher_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['serviceOfBenefitCategories.destroy', $serviceOfBenefitCategory->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('serviceOfBenefitCategories.show', [$serviceOfBenefitCategory->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('serviceOfBenefitCategories.edit', [$serviceOfBenefitCategory->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>

@extends('admin.layouts.default')

@section('content')

<div>
    <a class="btn btn-primary" href="{{ route('admin.ingredients.create') }}">Add new ingredients</a>
</div>

<br>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Is Active</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ingredients as $ingredient)
            <tr class="justify-content-center">
                <th scope="row">{{ $ingredient->id }}</th>
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->price }}</td>
                <td>{{ $ingredient->isactive ? 'Yes' : 'No' }}</td>
                <td>
                    <img src="/images/ingredients/{{ $ingredient->image_path }}" alt="{{ $ingredient->image_path }}" height="50" class="rounded">
                </td>
                <td>
                    <a href="{{ route('admin.ingredients.edit', ['id' => $ingredient->id]) }}" class="btn btn-sm btn-success">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalWarinig{{ $ingredient->id }}">Delete</a>
                    {{-- {!!Form::open(['action' => ['IngredientController@destroy', $ingredient->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                    {!!Form::close()!!} --}}
                    {{-- <form action="{{ route('admin.ingredients.destroy', ['id' => $ingredient->id]) }}" method="POST">
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form> --}}

                    <!-- Warning Modal -->
                    <div class="modal fade" id="modalWarinig{{ $ingredient->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $ingredient->name }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenter{{ $ingredient->name }}">Warning</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete "{{ $ingredient->name }}"
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{ route('admin.ingredients.delete', ['id' => $ingredient->id]) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
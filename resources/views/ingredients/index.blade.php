@extends('layouts.default')

@section('content')

    <div class="container">

        <br>

        <div class="put-left">
            <h3>Ingredients:</h3>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ route('ingredients.create') }}">Add new ingredients</a>
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
                    <tr>
                        <th scope="row">{{ $ingredient->id }}</th>
                        <td>{{ $ingredient->name }}</td>
                        <td>{{ $ingredient->price }}</td>
                        <td>{{ $ingredient->isactive ? 'Yes' : 'No' }}</td>
                        <td>{{ $ingredient->image_path }}</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Delet</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
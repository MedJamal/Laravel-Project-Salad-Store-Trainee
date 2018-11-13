@extends('admin.layouts.default')

@section('content')

<form class="col-md-4" method="POST" action="{{ route('admin.ingredients.update', ['id' => $ingredient->id]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PATCH')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter the name" value="{{ $ingredient->name }}">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="ingredientscategory_id" class="form-control">
            @foreach ($categories as $category )
                <option value="{{ $category->id }}"{{ $category->id === $ingredient->ingredientscategory_id ? ' selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="name">Price</label>
        {{-- price input must to be fix for price currency --}}
        <input type="decimal" class="form-control" name="price" placeholder="Enter the price" value="{{ $ingredient->price }}">
    </div>

    <div class="form-group form-check">
        <input type="checkbox" name="isactive" class="form-check-input"{{ $ingredient->isactive ? ' checked' : ''}}>
        <label class="form-check-label" for="isactive">Is active</label>
    </div>

    <div class="form-group">
        <img src="/images/ingredients/{{ $ingredient->image_path }}" class="img-thumbnail">
        <label>Upload an image</label>
        <input type="file" name="image" class="form-control-file">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="{{ route('admin.ingredients.delete', ['id' => $ingredient->id]) }}" class="btn btn-danger">Delete</a>
    <a href="{{ route('admin.ingredients.index') }}" class="btn btn-default">Back</a>
    <br /><br /><br />
</form>


@endsection
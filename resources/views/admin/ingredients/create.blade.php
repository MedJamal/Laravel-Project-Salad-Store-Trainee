@extends('admin.layouts.default')

@section('content')



<form method="POST" action="{{ route('admin.ingredients.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter the name">
    </div>

    <div class="form-group">
        <label for="name">Price</label>
        {{-- price input must to be fix for price currency --}}
        <input type="decimal" class="form-control" name="price" placeholder="Enter the price">
    </div>

    <div class="form-group form-check">
        <input type="checkbox" name="isactive" class="form-check-input">
        <label class="form-check-label" for="isactive">Is active</label>
    </div>

    <div class="form-group">
        <label>Upload an image</label>
        <input type="file" name="image" class="form-control-file">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Add</button>
    <a href="{{ route('admin.ingredients.index') }}" class="btn btn-default">Back</a>
</form>


@endsection
@extends('layouts.default')

@section('content')

<p>Models</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add new ingredient
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New ingredient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <form method="POST" action="{{ route('ingredients.store') }}">
                        {{ csrf_field() }}
                
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter the name">
                        </div>
                
                        <div class="form-group">
                            <label for="name">Price</label>
                            {{-- price input must to be fix for price currency --}}
                            <input type="number" class="form-control" name="price" placeholder="Enter the price">
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
                    </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



@endsection
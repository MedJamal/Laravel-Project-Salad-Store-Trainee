@extends('admin.layouts.default')

@section('content')

<form method="POST" action="{{ route('admin.ingredientscategory.store') }}">
  @csrf

  <h5>Add new category</h5>
  <div class="col-md-6 form-row">
    
    <div class="col">
      
      <input type="text" class="form-control" placeholder="name" name="name">
    </div>
    
    <div class="col">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
    
  </div>
</form>
<br>

@if(count($categories) > 0)

<table class="table table-striped col-md-6 font-weight-normal">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($categories as $category)
    <tr>
      <td><a href="#">{{ $category->name }}</a></td>
      <td>{{ $category->slug}}</td>
      <td>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{ $category->id }}">
          Edit
        </button>
        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalWarinig{{ $category->id }}">Delete</a>

        <!-- Warning Modal -->
        <div class="modal fade" id="modalWarinig{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $category->name }}" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCenter{{ $category->name }}">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure want to delete "{{ $category->name }}"
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route('admin.ingredientscategory.delete', ['id' => $category->id]) }}" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </td>
    </tr>
    
    {{-- Modal bootstrap --}}
    
    <div class="modal fade" id="modalEdit{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditTitle">Edit: name goes here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form method="POST" action="{{ route('admin.ingredientscategory.update', ['id' => $category->id]) }}">
              @method('PATCH')
              @csrf

              <div class="form-group">
                {{-- <input value="{{ $category->id }}" type="hidden" id="id" name="id"> --}}
                <label for="name">Name</label>
                <input value="{{ $category->name }}" type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-edit">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    {{-- End of Modal bootstrap --}}
    @endforeach
    
  </tbody>
</table>

@else

  <div class="alert alert-warning" role="alert">
    There's no category yet!
  </div>
  
@endif

@endsection

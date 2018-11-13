@extends('admin.layouts.default')

@section('content')


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
            
              <form>
                <div class="form-group">
                  <input value="{{ $category->id }}" type="hidden" id="id" name="id">
                  <label for="name">Name</label>
                  <input value="{{ $category->name }}" type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input value="{{ $category->slug }}" type="text" id="slug" name="slug" class="form-control" id="slug" disabled>
                </div>
              

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button data-name="{{ $category->name }}" data-id="{{ $category->id }}" type="button" class="btn btn-primary btn-edit">Save changes</button>
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




<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
{{-- <script src="{{ asset('js\cartHandling.js') }}"></script> --}}
<script>

$(".btn-edit").click(function(event){
    event.preventDefault();

    let id = $(this).data("id");
    let name = $(this).data("name");

    //{{-- console.log(id.data("id")); --}}
    //console.log(id + ' ' + name );


	{{-- $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
		}
	}); --}}
{{-- 	
	$.ajax({
		type: "POST",
		url: '/ajaxplaceorder',
		data: {
			// _token: CSRF_TOKEN,
			ingredients : ingredients
		},
		success: function(response) {

			console.log(response);

			// Display success message
			$('#order-messages-result').html(`
				<div class="order-error alert alert-success">
					${response.success}
				</div>
			`);
		},
		error: function( err ){
			// console.log(err);
			
			if (err.status == 401) {
				message = 'Vous devez vous connecter pour faire la commande';
			} else {
				message = 'Il y a une erreur s\'il vous plaît contacter le support';
			}

			$('#order-messages-result').html(`
			<div class="order-error alert alert-danger">
				${message}
			</div>
		`)
		}
	}); --}}


});

</script>

@endsection


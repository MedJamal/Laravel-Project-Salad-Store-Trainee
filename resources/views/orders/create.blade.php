@extends('layouts.default')

@section('content')

<div class="container">
    <br>
    <h3>Create order</h3>
    <br>
    
    <form method="POST" action="{{ route('orders.store') }}">
        {{ csrf_field() }}
        
        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter the email">
        </div>
        
        {{-- <div class="form-group col-md-4">
            <label for="inputState">Select Ingredients</label>
            <select id="inputState" class="form-control">
                <option selected>Ingredients...</option>
                @foreach ($ingredients as $ingredient)
                    <option>{{ $ingredient }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group col-md-4">
            <label for="Ingredients"></label>
            <select multiple class="form-control" name="ingredients[]">
                @foreach ($ingredients as $ingredient)
                    <option value="{{ $ingredient->id}}">{{ $ingredient->name }}</option>
                @endforeach
            </select>
            <small class="form-text text-muted">Press (CTRL) for multiple select.</small>
        </div>
        
        <div class="form-group col-md-4">
            <label for="total">Total</label>
            <input type="number" class="form-control" name="total" placeholder="Enter the total">
        </div>

        <div class="form-group form-check col-md-4">
            <input type="checkbox" name="status" class="form-check-input">
            <label class="form-check-label" for="status">Status</label>
        </div>
        
        <br>
        
        <button type="submit" class="btn btn-primary">Add new order</button>
    </form>

</div>


<script>

</script>


@endsection
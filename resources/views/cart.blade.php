@extends('layouts.default')

@section('content')

<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="images\top-banner.jpg" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2><span>Organic</span> My Cart</h2>
			<ul class="list-inline">
				<li>
                    <a href="{{ route('index') }}">HOME</a>
				</li>
				<li>
					<a href="{{ route('cart.index') }}">Cart</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->
<div class="container">
	@if(session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif
	
	@if(session('error'))
		<div class="alert alert-danger">
			{{session('error')}}
		</div>
	@endif
</div>


{{-- List Ingredients --}}
<div class="mycart">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form method="post" enctype="multipart/form-data">
					<div class="table-responsive">
								@if(Session::has('cart'))
									<table class="table listproducts">
										<thead>
											<tr>
												<td class="text-left">List Products</td>
												<td class="text-center">Price</td>
												{{-- <td class="text-center">Quantity(Kg)</td> --}} {{-- for qty of item --}}
												{{-- <td class="text-center">Total</td> --}}
												<td class="text-center">Delete</td>
											</tr>
										</thead>
										<tbody>
									@foreach($ingredients as $ingredient)
										<tr>
											<td class="text-left">
												<a href="#"><img src="images/ingredients/{{ $ingredient['item']['image_path'] }}" class="img-responsive" alt="img" title="img"></a>
											<div class="name">{{ $ingredient['item']['name'] }}</div>
											</td>
											<td class="text-center">$ {{ $ingredient['item']['price'] }}</td>
											{{-- for qty of item --}}
											{{-- <td class="text-center"> --}}
												
												{{-- <p class="qtypara"> --}}
													

													{{-- <span id="minus" class="minus"><i class="fa fa-minus"></i></span> --}}
													{{-- <a class="minus" href="{{ route('cart.ReduceByOne', ['id' => $ingredient['item']['id']]) }}">
														<i class="fa fa-minus"></i>
													</a> --}}
													{{-- <input type="text" name="quantity" value="{{ $ingredient['qty'] }}" size="2" id="input-quantity" class="form-control qty"> --}}
													{{-- <span id="add" class="add"><i class="fa fa-plus"></i></span> --}}
													{{-- <a class="add" href="{{ route('cart.IncreaseByOne', ['id' => $ingredient['item']['id']]) }}">
														<i class="fa fa-plus"></i>
													</a> --}}
													{{-- <input type="hidden" name="product_id" value="1"> --}}
												{{-- </p> --}}
											{{-- </td> --}}
											
											{{-- <td class="text-center">${{ $ingredient['price'] }}</td>  Total --}}
											<td class="text-center">
												{{-- <button type="button"><i class="icon_close_alt2"></i></button> --}}
												<a style="font-size: 1.5em;" href="{{ route('cart.remove', ['id' => $ingredient['item']['id']]) }}"><i class="icon_close_alt2"></i></a>
											</td>
										</tr>
									@endforeach
								<tr>
									<td colspan="1">Total price</td>
									<td colspan="4" class="text-right">$ {{ $totalPrice }}</td>
								</tr>
								@else
									<div class="alert alert-danger">
										<p>Your Cart is empty</p>
									</div>
								@endif
							</tbody>
						</table>
					</div>
				</form>
			</div>
			@if(Session::has('cart'))
				<div class="col-sm-12">
					<div class="buttons">
						<button class="btn-primary">Clear shopping cart</button>
						{{-- <button class="btn-primary">update shopping cart</button> --}}
						<button class="btn-primary pull-right" onclick="location.href='{{ route('placeOrder') }}'">Place order now</button>
					</div>
				</div>
			@endif
			{{-- <div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="cartable">
							<h5>Estimade Shipping & Tax</h5>
							<p>Enter your destination to get a shipping estimade</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label>Country *</label>
									<input name="coupon" placeholder="" id="input-country" class="form-control" type="text">
								</div>
								<div class="form-group">
									<label>State/Provide *</label>
									<input name="coupon" placeholder="" id="input-state" class="form-control" type="text">
								</div>
								<div class="form-group">
									<label>Zip/Postal code *</label>
									<input name="coupon" placeholder="" id="input-code" class="form-control" type="text">
								</div>
								<button type="button" class="btn-primary">estimade</button>
							</form>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="cartable">
							<h5>Cart Total</h5>
							<table class="table">
								<tbody>
									<tr>
									  <td class="text-left">Shipping</td>
									  <td class="text-right">$50.00</td>
									</tr>
									<tr>
										<td class="text-left">Sub Total</td>
										<td class="text-right">$290.00</td>
									</tr>
								</tbody>
							</table>
							<div class="text-center">
								<button type="button" class="btn-primary" onclick="location.href='checkout.html'">Proceed to Checkout</button>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</div>

@endsection
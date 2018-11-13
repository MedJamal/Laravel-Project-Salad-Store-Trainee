@extends('layouts.default')

@section('content')


<div class="container">
    <br>
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

{{-- @foreach ($categories as $category)
	{{ $category->ingredients }}
@endforeach

<br />
<br />
<br />

@foreach ($ingredients as $ingredient)
	{{ $ingredient->category_id }}
@endforeach --}}


{{-- {{ $categories }} --}}

<!-- product start here -->
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
			<p>Fresh Foods</p>
			<h4>
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i> 
				Our Ingredient
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i>
			</h4>
		</div>
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			<ul class="nav nav-tabs list-inline">
				<li class="active">
					<a href="#all" data-toggle="tab" aria-expanded="true">Organic <span>All</span></a>
				</li>
				@foreach ($categories as $category)
					<li class="">
						<a href="#{{ $category->slug }}" data-toggle="tab" aria-expanded="false">{{ $category->name }}</span></a>
					</li>
				@endforeach
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="all">
					<div class="row">
						{{-- <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
							<div class="product-thumb">
								<div class="image">
									<a href="shop.html">
										<img src="images\product\1.png" alt="image" title="image" class="img-responsive">
									</a>
									<div class="onhover onhover1">
										<ul class="list-unstyled">
											<li>
												<button type="button"><i class="icon_cart"></i></button>
											</li>
											<li>
												<button type="button"><i class="icon_heart"></i></button>
											</li>
											<li>
												<button type="button"><i class="icon_piechart"></i></button>
											</li>
										</ul>
										<button class="icons1" type="button"><i class="fa fa-bars"></i></button>
									</div>
								</div>
								<div class="caption">
									<h4><a href="shop.html">Organic <span>Onion</span></a></h4>
									<p class="price">$30.00</p>
								</div>
							</div>	
						</div> --}}
						@foreach ($ingredients as $ingredient)
								<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
									<div class="product-thumb">
										<div class="image">
											<a href="shop.html">
												<img src="images/ingredients/{{ $ingredient->image_path }}" alt="image" title="image" class="img-responsive">
											</a>
											<div class="onhover onhover9">
												<ul class="list-unstyled">
													<li>
														<button type="button"><i class="icon_cart"></i></button>
													</li>
													<li>
														<button type="button"><i class="icon_heart"></i></button>
													</li>
													<li>
														<button type="button"><i class="icon_piechart"></i></button>
													</li>
												</ul>
												<button class="icons9" type="button"><i class="fa fa-bars"></i></button>
											</div>
										</div>
										<div class="caption">
											<h4><a href="shop.html">{{ $ingredient->name }}</a></h4>
											<p class="price">{{ $ingredient->price }}</p>
										</div>
									</div>	
								</div>
						@endforeach
					</div>
				</div>
				@foreach ($categories as $category)
					<div class="tab-pane" id="{{$category->slug}}">
						<div class="row">
							@foreach ($ingredients as $ingredient)
								@if ($ingredient->ingredientscategory_id == $category->id)
									<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
										<div class="product-thumb">
											<div class="image">
												<a href="shop.html">
													<img src="images/ingredients/{{ $ingredient->image_path }}" alt="image" title="image" class="img-responsive">
												</a>
												<div class="onhover onhover9">
													<ul class="list-unstyled">
														<li>
															<button type="button"><i class="icon_cart"></i></button>
														</li>
														<li>
															<button type="button"><i class="icon_heart"></i></button>
														</li>
														<li>
															<button type="button"><i class="icon_piechart"></i></button>
														</li>
													</ul>
													<button class="icons9" type="button"><i class="fa fa-bars"></i></button>
												</div>
											</div>
											<div class="caption">
												<h4><a href="shop.html">{{ $ingredient->name }}</a></h4>
												<p class="price">{{ $ingredient->price }}</p>
											</div>
										</div>	
									</div>
								@endif
							@endforeach
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- product end here -->

@endsection


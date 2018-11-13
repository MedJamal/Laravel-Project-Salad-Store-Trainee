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

	<div id="order-messages-result"></div>
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
			<p>Aliments frais</p>
			<h4>
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i> 
				NOTRE INGRÉDIENT
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i>
				<i class="icon_star_alt"></i>
			</h4>
		</div>
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			<ul class="nav nav-tabs list-inline">
				@foreach ($categories as $category)
					<li class="{{ $category->id == 1 ? 'active' : '' }}">
						<a href="#{{ $category->slug }}" data-toggle="tab" aria-expanded="false">{{ $category->name }}</span></a>
					</li>
				@endforeach
			</ul>
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 border-top border-bottom">
				<button class="place-order pull-right btn btn-primary">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i> Passer la commande <span class="totalIngredients"></span>
				</button>
			</div>
			<br>
			<br>

			<div class="tab-content">
				
				@foreach ($categories as $category)
				<?php $countIngredients = 0 ?>
					<div class="tab-pane{{ $category->id == 1 ? ' active' : '' }}" id="{{$category->slug}}">
						<div class="row">
							
								@foreach ($ingredients as $ingredient)
									@if ($ingredient->ingredientscategory_id == $category->id && $ingredient->isactive == true)
										<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
											<div class="product-thumb">
												<div class="image">
													<a href="shop.html">
														<img src="images/ingredients/{{ $ingredient->image_path }}" alt="image" title="image" class="img-responsive">
													</a>
													<div class="onhover onhover9">
														<button class="cartHandle fa fa-plus" value="{{ $ingredient->id }}" type="button" >
														</button>
													</div>
												</div>
												<div class="caption">
													<h4><a href="shop.html">{{ $ingredient->name }}</a></h4>
													<p class="price">€{{ $ingredient->price }}</p>
												</div>
											</div>	
										</div>
										<?php $countIngredients ++ ?>
									@endif
								@endforeach

								@if($countIngredients == 0)
									{{-- <div class="alert alert-info"> --}}
										<h4 class="text-info text-center">Il n'y a pas d'ingrédients pour la catégorie {{ $category->name }} l'instant</h4>
									{{-- </div> --}}
								@endif

						</div>
					</div>
				@endforeach
			</div>

			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 border-bottom">
				<button class="place-order pull-right btn btn-primary">
					{{-- <i class="fa fa-shopping-bag" aria-hidden="true"></i> Place Order <span class="totalIngredients">( Items )</span> --}}
					<i class="fa fa-shopping-bag" aria-hidden="true"></i> Passer la commande <span class="totalIngredients"></span>
				</button>
			</div>
		</div>
	</div>
</div>
<!-- product end here -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{ asset('js\cartHandling.js') }}"></script>

@endsection


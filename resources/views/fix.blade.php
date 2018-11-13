			<div class="tab-content">

				<div class="tab-pane active" id="all">
					<div class="row">
					@foreach ($ingredients as $ingredient)
						<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
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
						</div>
					@endforeach

					</div>
				</div>

				@foreach($categories as $category)
					<div class="tab-pane" id="{{ $category->slug }}">
						<div class="row">
							<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
								@foreach ($ingredients as $ingredient )
									@if ($ingredient->category_id == $category->id)
										<div class="product-thumb">
											<div class="image">
												<a href="shop.html">
													<img src="images\product\7.png" alt="image" title="image" class="img-responsive">
												</a>
												<div class="onhover onhover16">
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
													<button class="icons16" type="button"><i class="fa fa-bars"></i></button>
												</div>
											</div>
											<div class="caption">
												<h4><a href="shop.html">Organic <span>Onion</span></a></h4>
												<p class="price">$30.00</p>
											</div>
										</div>
									@endif
								@endforeach	
							</div>
						</div>
					</div>
				@endforeach
			</div>
<!-- //video-6-->

@php

$featured = DB::table('products')
				->where('status',1)
				->orderBy('id','DESC')
				->limit(12)
				->get();

@endphp

@guest

<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
			<p class="text-center">Trendy Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">

			@foreach ($featured as $row)
				
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="ecommerce-single.html">
								<img class="pic-1 img-fluid" src="{{asset($row->image_one)}}">
								<img class="pic-2 img-fluid" src="{{asset($row->image_two)}}">
							</a>
							<ul class="social">
								
									<li>
										<a class="addwishlist" data-id="{{ $row->id }}">
											<span class="fa fa-heart">
											</span>
										</a>
									</li>
									
									<li>
										<a href="{{('product/details/'.$row->id. '/' .$row->product_name)}}" data-tip="Quick View">
											<span class="fa fa-eye">
											</span>
										</a>
									</li>

									<li>
										<a class="addcart" id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal"
											onclick="productview(this.id)">
											<span class="fa fa-shopping-bag">
											</span>
										</a>
									</li>
							</ul>
							<div class="transmitv single-item">
								<form action="#" method="post">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addcart" 
									id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal"
										onclick="productview(this.id)">
										Add to Cart
									</button>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="ecommerce-single.html">{{$row->product_name}} </a></h3>

                   <!-- INCLUDE BADGES -->

                    <span class="price">
							@if ($row->discount_price)
							<del>${{$row->discount_price}}</del> ${{$row->selling_price}}</span>
							@else
							${{$row->selling_price}}</span>
							@endif
						</div>
					</div>
				</div>

			@endforeach


			</div>
			<!-- //row-->
		</div>
	</div>
</section>

@else

<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
			<p class="text-center">Trendy Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">

			@foreach ($featured as $row)
				
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="ecommerce-single.html">
								<img class="pic-1 img-fluid" src="{{asset($row->image_one)}}">
								<img class="pic-2 img-fluid" src="{{asset($row->image_two)}}">
							</a>
							<ul class="social">
								
									<li>
										<a class="addwishlist" data-id="{{ $row->id }}">
											<span class="fa fa-heart">
											</span>
										</a>
									</li>
									
									<li>
										<a href="{{('product/details/'.$row->id. '/' .$row->product_name)}}" data-tip="Quick View">
											<span class="fa fa-eye">
											</span>
										</a>
									</li>

									<li>
										<a class="addcart"id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal"
											onclick="productview(this.id)">
											<span class="fa fa-shopping-bag">
											</span>
										</a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addcart" id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal"
										onclick="productview(this.id)">
										Add to Cart
									</button>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="ecommerce-single.html">{{$row->product_name}} </a></h3>

                   <!-- INCLUDE BADGES -->

                    <span class="price">
							@if ($row->discount_price)
							<del>${{$row->discount_price}}</del> ${{$row->selling_price}}</span>
							@else
							${{$row->selling_price}}</span>
							@endif
						</div>
					</div>
				</div>

			@endforeach


			</div>
			<!-- //row-->
		</div>
	</div>
</section>

<!-- Vertically centered modal -->
<div class="modal fade" id="cartmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="staticBackdropLabel">Product Quick View</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="" id="pimage" style="height: 150px">
						<div class="card-body">
							<h5 class="card-title text-center" id="pname"> </h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
							<ul class="list-group">
								<li class="list-group-item">Product code: 
									<span id="pcode"></span>
								</li>
								<li class="list-group-item">Category: 
									<span id="pcat"></span>
								</li>
								<li class="list-group-item">Subcategory: 
									<span id="psub"></span>
								</li>
								<li class="list-group-item">Stock : 
									<span class="badge" style="background-color: #40E0D0;color: white">
										Available
									</span>
								</li>
							  </ul>
				</div>

				<div class="col-md-4">
				<form action="post" method="{{ route('insert.into.cart') }}">
					@csrf
					<input type="hidden" name="product_id" id="product_id">
					<div class="form-group">
						<label for="exampleInputColor">Color</label>
						<select class="form-control" name="color" id="color">
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputColor">Size</label>
						<select class="form-control" name="size" id="size">
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputColor">Quantity</label>
						<input type="number" class="form-control" name="qty" value="1">
					</div>
				</div>
			</div>

		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary">Add to Cart</button>
		</div>
	</form>
	  </div>
	</div>
  </div>

@endguest

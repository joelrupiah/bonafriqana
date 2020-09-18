<!-- //video-6-->

@php

$trend = DB::table('products')
				->where('status',1)
				->where('trend',1)
				->orderBy('id','ASC')
				->limit(12)
				->get();

@endphp

@guest

<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Hot   <span>New</span></h3>
			<p class="text-center">Trendy Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach ($trend as $row)
					
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="ecommerce-single.html">
								<img class="pic-1 img-fluid" src="{{asset($row->image_one)}}">
								<img class="pic-2 img-fluid" src="{{asset($row->image_two)}}">
							</a>
							<ul class="social">
								
									<li><a href="#" data-tip=""><span class="fa fa-heart"></span></a></li>
									
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="ecommerce.html" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Maroon Top">
									<input type="hidden" name="amount" value="899.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="ecommerce-single.html">{{$row->product_name}} </a></h3>
							<span class="price"><del>$ {{$row->discount_price}}</del>$ {{$row->selling_price}}</span>
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
			<h3 class="hny-title mb-0 text-center">Hot   <span>New</span></h3>
			<p class="text-center">Trendy Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach ($trend as $row)
					
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="ecommerce-single.html">
								<img class="pic-1 img-fluid" src="{{asset($row->image_one)}}">
								<img class="pic-2 img-fluid" src="{{asset($row->image_two)}}">
							</a>
							<ul class="social">
								
									<li><a href="#" data-tip=""><span class="fa fa-heart"></span></a></li>
									
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="ecommerce.html" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="ecommerce-single.html">{{$row->product_name}} </a></h3>
							<span class="price"><del>$ {{$row->discount_price}}</del>$ {{$row->selling_price}}</span>
						</div>
					</div>
				</div>

				@endforeach

			</div>
			<!-- //row-->
		</div>
	</div>
</section>

@endguest

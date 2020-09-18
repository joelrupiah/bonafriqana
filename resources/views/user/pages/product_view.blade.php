@include('user.partials.pagesheader')
@include('user.partials.shop.shopmainheader')

<section class="w3l-ecommerce-main-inn">
	<!--/ecommerce-single-->
	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">
			<!--/row1-->
			<div class="sp-store-single-page row">
				<div class="col-lg-5 single-right-left">
					<div class="flexslider1">

						<ul class="slides">
							<li data-thumb="{{asset($product->image_one)}}">
								<div class="thumb-image"> <img src="{{asset($product->image_one)}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="{{asset($product->image_two)}}">
								<div class="thumb-image"> <img src="{{asset($product->image_two)}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="{{asset($product->image_three)}}">
								<div class="thumb-image"> <img src="{{asset($product->image_three)}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="{{asset($product->image_four)}}">
								<div class="thumb-image"> <img src="{{asset($product->image_four)}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="eco-buttons mt-5">

						<div class="transmitv single-item">
							<form action="{{url('cart/product/add/'.$product->id)}}" method="post">
								@csrf
								<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart read-2">
									Add to Cart
								</button>
						</div>
						<div class="buyhny-now"> <a href="#buy" class="action btn">Buy Now </a></div>

					</div>
				</div>
				<div class="col-lg-7 single-right-left pl-lg-4">
					<h3>{{$product->product_name}}
					</h3>
					<div class="caption mb-4">
						<h6>
							@if ($product->discount_price == NULL)
								
							<span class="item_price">${{$product->selling_price}}</span>
							Free Delivery
							@else
							<span class="item_price">${{$product->selling_price}}</span>
							<del>{{$product->discount_price}}</del> 
							Free Delivery
							@endif
							
						</h6>
					</div>
					<div class="desc_single mb-4">
						<h5>Description:</h5>
						<p>{!! $product->product_details !!}</p>
					</div>
					<div class="description-apt d-grid mb-4">
						<div class="occasional">
							<h5 class="sp_title mb-3">Color / Size :</h5>

								<div class="form-row">
									<ul class="single_serv">	
										<div class="form-group col-md-12">
										  <select id="inputState" class="form-control" name="color">

											@foreach ($product_color as $color)
										
											  <option value="{{$color}}">{{$color}}</option>
											  
											@endforeach

										  </select>
										</div>
									</ul>
								</div>
								@if($product->product_size == NULL)

								@else
								<div class="form-row">
									<ul class="single_serv">
										<div class="form-group col-md-12">
										  <select id="inputState" class="form-control" name="size">
											@foreach($product_size as $size)
											<option value="{{$size}}">{{$size}}</option>
											@endforeach
										  </select>
										</div>
									</ul>
								</div>
								@endif

						</div>
						<div class="occasional">
							<h5 class="sp_title mb-3">Quantity :</h5>
								<div class="form-row">
									<ul class="single_serv">
										<div class="form-group col-md-12">
										  <input class="form-control" type="number" value="1" pattern="[0-9]" name="qty">
										</div>
									</ul>
								</div>

						</div>
					</div>

				</div>
			</form>
			</div>
		</div>
		<!--//row1-->
	</div>
	<!--//ecommerce-single-->
</section>
@include('user.partials.shop.productoffers')

<!-- //content-6-section -->
@include('user.partials.shop.relatedproducts')
<!-- //products-->

@include('user.partials.footer')
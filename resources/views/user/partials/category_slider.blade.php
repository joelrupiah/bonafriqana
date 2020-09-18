<!-- //w3l-banner-slider-main -->
<section class="w3l-grids-hny-2">
	<!-- /content-6-section -->
	<div class="grids-hny-2-mian py-5">
		<div class="container py-lg-5">
				
			<h3 class="hny-title mb-0 text-center"><span>C</span>ategories</h3>
			<p class="mb-4 text-center">Handpicked Favourites just for you</p>
			<div class="welcome-grids row mt-5">

				@php
				$category = DB::table('categories')->get();		
				@endphp

				@foreach($category as $cat)

				<div class="col-lg-2 col-md-4 col-6 welcome-image">
					
						<div class="boxhny13">

								<a href="ecommerce.html">
										<img src="{{asset('frontend/assets/images/grid1.jpg')}}" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">{{$cat->category_name}}
								</div>
							</a>

					</div>
					<h4><a href="ecommerce.html">{{$cat->category_name}}</a></h4>
				</div>

				@endforeach
				
			</div>

		</div>
	</div>
</section>
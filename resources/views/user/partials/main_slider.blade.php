<!--w3l-banner-slider-main-->
@php

$mainslider = DB::table('products')
				->where('status',1)
				->where('main_slider',1)
				->orderBy('id','DESC')
				->limit(4)
				->get();

@endphp

@guest
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6>Upto 30% off on All styles , <a href="ecommerce.html" target="_blank"> Click here for <span
									class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
									class="hignlaite">More details</span></a></h6>
					</div>
					<!--//left-->
					<!--/right-->
					<ul class="top-hnt-right-content col-lg-6">

						<li class="button-log usernhy">
							<a class="btn-open" href="{{url('/login')}}">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
								<button class="top_transmitv_cart" type="submit" name="submit" value="">
									My Cart
									<span class="fa fa-shopping-cart"></span>
								</button>
						</li>
					</ul>
				</div>
			</div>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.html">
						Bonafri<span class="lohny">q</span>ana</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">

						<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text">Search here</span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/about')}}">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/shop')}}">Shop</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/blog')}}">Blog</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="{{url('/contact')}}">Contact</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
		<div class="bannerhny-content">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--//banner-slider-->

			@php
				$slider = DB::table('products')
							->join('categories','products.category_id','categories.id')
							->select('products.*','categories.category_name')
							->where('main_slider',1)->orderBy('id','DESC')
							->first();
			@endphp

			<!--//banner-slider-->
			<div class="right-banner" style="background: url({{asset($slider->image_three)}})">
				<div class="right-1">
					<h4>
						{{$slider->product_name}}

						@if ($slider->discount_price == NULL)
						<br>Kshs  {{ $slider->selling_price }}
						@else
						<br>50% Off
						@endif


					</h4>
				</div>
			</div>

			

		</div>

</section>

@else
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6>Upto 30% off on All styles , <a href="ecommerce.html" target="_blank"> Click here for <span
									class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
									class="hignlaite">More details</span></a></h6>
					</div>
					<!--//left-->
					<!--/right-->
					<ul class="top-hnt-right-content col-lg-6">

						<li class="button-log usernhy">{{Auth::user()->name}}
							<a class="btn-open" href="{{url('/login')}}">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
								<a href="{{ route('show.cart') }}"><button class="top_transmitv_cart" type="submit" name="submit" value="">
									{{Cart::count()}}
									<span class="fa fa-shopping-cart"></span>
								</button></a>
						</li>
					</ul>
				</div>
			</div>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.html">
						Bonafri<span class="lohny">q</span>ana</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">

						<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text">Search here</span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/shop')}}">Shop</a>
							</li>
							<li class="nav-item dropdown active">
							  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Profile
							  </a>
							  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="ecommerce.html">Wishlist</a>
								<a class="dropdown-item" href="{{route('home')}}">Settings</a>
								<a class="dropdown-item" href="ecommerce-single.html">Checkout</a>
							   
							  </div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/about')}}">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/blog')}}">Blog</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="{{url('/contact')}}">Contact</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
		<div class="bannerhny-content">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="ecommerce.html" class="shop-button btn">
										Shop Now
									</a>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--//banner-slider-->

			@php
				$slider = DB::table('products')
							->join('categories','products.category_id','categories.id')
							->select('products.*','categories.category_name')
							->where('main_slider',1)->orderBy('id','DESC')
							->first();
			@endphp

			<!--//banner-slider-->
			<div class="right-banner" style="background: url({{asset($slider->image_three)}})">
				<div class="right-1">
					<h4>
						{{$slider->product_name}}

						@if ($slider->discount_price == NULL)
						<br>Kshs  {{ $slider->selling_price }}
						@else
						<br>50% Off
						@endif


					</h4>
				</div>
			</div>

			

		</div>

</section>
@endguest

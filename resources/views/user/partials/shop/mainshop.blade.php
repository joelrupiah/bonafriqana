@php
    
$featured = DB::table('products')
				->where('status',1)
				->orderBy('id','ASC')
				->limit(12)
				->get();

@endphp

@guest
    
<div class="ecommerce-right-hny col-lg-8">
    <div class="row ecomhny-topbar">
        <div class="col-6 ecomhny-result">
            <h4 class="ecomhny-result-count"> Showing all 9 Results</h4>
        </div>
        <div class="col-6 ecomhny-topbar-ordering">

                <div class="ecom-ordering-select d-flex">
                        <span class="fa fa-angle-down" aria-hidden="true"></span>
                        <select>
                                <option value="menu_order" selected="selected">Default Sorting</option>
                                <option value="popularity">Sort by Popularity</option>
                                <option value="rating">Sort by Average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by Price: low to high</option>
                                <option value="price-desc">Sort by Price: high to low</option>
                        </select>
                    </div>

        </div>
    </div>
    <!-- /row-->

    <div class="ecom-products-grids row">

    @foreach ($featured as $row)
        
        <div class="col-lg-4 col-6 product-incfhny mb-4 cat_product_show">
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
                            <a class="addcart" id="{{ $row->id }}" 
                                data-toggle="modal" data-target="#cartmodal"
                                onclick="productview(this.id)">
                                <span class="fa fa-shopping-bag">
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="transmitv single-item">
                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addcart" 
                            id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal"
                            onclick="productview(this.id)">
                                Add to Cart
                            </button>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="ecommerce-single.html">{{$row->product_name}} </a></h3>

                    <label class="badge badge-primary discount">
                        3% </label>
                    
                        <!-- INCLUDE BADGE -->

                    <span class="price">
                    
                    @if ($row->discount_price)
                    <del>${{$row->discount_price}}</del>${{$row->selling_price}}</span>

                    @else

                    <span>{{$row->selling_price}}</span>

                    @endif

                </div>
            </div>
        </div>

    @endforeach

    </div>
    <!-- //row-->
    <!--/row2-->
    <div class="ecom-slider-hny">
        <div class="ecommerce-banv covers-9">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />

                <ul class="banner_slide_bg">
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">30% Off</h6>
                                    <h3 class="title-cover-9">Men's Suit</h3>

                                    <div class="read-more-button">
                                        <a href="ecommerce-single.html" class="read-btn btn">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">50% Off</h6>
                                    <h3 class="title-cover-9">Men's Footerwear</h3>

                                    <div class="read-more-button">
                                        <a href="ecommerce-single.html" class="read-btn btn">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">50% Off</h6>
                                    <h3 class="title-cover-9">Women's Footwear</h3>

                                    <div class="read-more-button">
                                        <a href="ecommerce-single.html" class="read-btn btn">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>

                </div>
                <div class="navigation">
                    <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--//row22-->
</div>
</div>
<!--//row1-->

<!--/pagination-->
<div class="pagination">
<ul>
    <li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
    <li><a href="#page-number" class="active">1</a></li>
    <li><a href="#page-number">2</a></li>
    <li><a href="#page-number">3</a></li>

    <li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
</ul>
</div>
<!--//pagination-->

@else

<div class="ecommerce-right-hny col-lg-8">
    <div class="row ecomhny-topbar">
        <div class="col-6 ecomhny-result">
            <h4 class="ecomhny-result-count"> Showing all 9 Results</h4>
        </div>
        <div class="col-6 ecomhny-topbar-ordering">

                <div class="ecom-ordering-select d-flex">
                        <span class="fa fa-angle-down" aria-hidden="true"></span>
                        <select>
                                <option value="menu_order" selected="selected">Default Sorting</option>
                                <option value="popularity">Sort by Popularity</option>
                                <option value="rating">Sort by Average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by Price: low to high</option>
                                <option value="price-desc">Sort by Price: high to low</option>
                        </select>
                    </div>

        </div>
    </div>
    <!-- /row-->

    <div class="ecom-products-grids row">

    @foreach ($featured as $row)
        
        <div class="col-lg-4 col-6 product-incfhny mb-4">
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
                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addcart" id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal"
                                onclick="productview(this.id)">
                                Add to Cart
                            </button>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="ecommerce-single.html">{{$row->product_name}} </a></h3>

                    <label class="badge badge-primary discount">
                        3% </label>
                    
                        <!-- INCLUDE BADGE -->

                    <span class="price">
                    
                    @if ($row->discount_price)
                    <del>${{$row->discount_price}}</del>${{$row->selling_price}}</span>

                    @else

                    <span>{{$row->selling_price}}</span>

                    @endif

                </div>
            </div>
        </div>

    @endforeach

    </div>
    <!-- //row-->
    <!--/row2-->
    <div class="ecom-slider-hny">
        <div class="ecommerce-banv covers-9">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />

                <ul class="banner_slide_bg">
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">30% Off</h6>
                                    <h3 class="title-cover-9">Men's Suit</h3>

                                    <div class="read-more-button">
                                        <a href="ecommerce-single.html" class="read-btn btn">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">50% Off</h6>
                                    <h3 class="title-cover-9">Men's Footerwear</h3>

                                    <div class="read-more-button">
                                        <a href="ecommerce-single.html" class="read-btn btn">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">50% Off</h6>
                                    <h3 class="title-cover-9">Women's Footwear</h3>

                                    <div class="read-more-button">
                                        <a href="ecommerce-single.html" class="read-btn btn">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>

                </div>
                <div class="navigation">
                    <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--//row22-->
</div>
</div>
<!--//row1-->

<!--/pagination-->
<div class="pagination">
<ul>
    <li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
    <li><a href="#page-number" class="active">1</a></li>
    <li><a href="#page-number">2</a></li>
    <li><a href="#page-number">3</a></li>

    <li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
</ul>
</div>
<!--//pagination-->

<!-- Vertically centered modal -->
<div class="modal fade" id="cartmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="">
						<div class="card-body">
							<h5 class="card-title" id="pname"> </h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							  </ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="">
						<div class="card-body">
							<h5 class="card-title">Product Name</h5>
						</div>
					</div>
				</div>
			</div>
		  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Understood</button>
		</div>
	  </div>
	</div>
  </div>

@endguest
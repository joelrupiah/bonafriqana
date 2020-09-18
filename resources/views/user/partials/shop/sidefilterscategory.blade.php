<div class="ecommerce-left-hny col-lg-4">

<aside>
    <div class="sider-bar">
        <div class="single-gd mb-5">

            <h4>Search <span>here</span></h4>
            <form action="#" method="post" class="search-trans-form">
                <input class="form-control" type="search" name="search" placeholder="Search here..."
                    required="">
                <button class="btn read-2">
                    <span class="fa fa-search"></span>
                </button>

            </form>
        </div>
        <!-- /Gallery-imgs -->

        <!-- Product Category -->

        @php
            $category = DB::table('categories')->get();
        @endphp

        <div class="single-gd mb-5">
            <h4>Product <span>Categories</span></h4>
            <ul class="list-group single">
            @foreach ($category as $cat)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="" class="cat_product" data-id="{{ $cat->id }}">{{$cat->category_name}}
                    <span class="badge badge-primary badge-pill">{{ count($category) }}</span></a>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- End Product Category -->
        <div class="single-gd mb-5">
            <h4>Filter by <span>Price</span></h4>

            <ul class="dropdown-vjm-transitu6">
                <li>

                    <div id="slider-range"
                        class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                        <div class="ui-slider-range ui-widget-header"
                            style="left: 0.555556%; width: 18.5556%;"></div><a
                            class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                            style="left: 0.555556%;"></a><a
                            class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                            style="left: 19.1111%;"></a>
                    </div>
                    <input type="text" id="amount"
                        style="border: 0; color: #ffffff; font-weight: normal;">
                </li>
            </ul>


            <!--//Gallery-imgs-->
        </div>

        <div class="single-gd mb-5">
            <h4>Discount </h4>
            <div classes="box-hny">
                <label class="containerhny-checkbox">15% or More
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="containerhny-checkbox">20% or More
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="containerhny-checkbox">35% or More
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="containerhny-checkbox">55% or More
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>

                <label class="containerhny-checkbox">65% or More
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="containerhny-checkbox">75% or More
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>
        <div class="single-gd customer-rev left-side mb-5">
            <h4>Customer <span>Color</span></h4>

            <ul class="product-color">
                <li>
                    <input type="checkbox" name="color-check" id="redcheck" checked="checked" />
                    <label for="redcheck" style="background-color:red;"></label>
                </li>
                <li>
                    <input type="checkbox" name="color-check" id="#A2C2C9check" checked="checked" />
                    <label for="#A2C2C9check" style="background-color:#A2C2C9;"></label>
                </li>
                <li>
                    <input type="checkbox" name="color-check" id="#EFDBD4check" checked="checked" />
                    <label for="#EFDBD4check" style="background-color:#EFDBD4;"></label>
                </li>
                <li>
                    <input type="checkbox" name="color-check" id="#2196F3check" checked="checked" />
                    <label for="#2196F3check" style="background-color:#2196F3;"></label>
                </li>
                <li>
                    <input type="checkbox" name="color-check" id="#4CAF50check" checked="checked" />
                    <label for="#4CAF50check" style="background-color:#4CAF50;"></label>
                </li>
                <li>
                    <input type="checkbox" name="color-check" id="#00BCD4check" checked="checked" />
                    <label for="#00BCD4check" style="background-color:#00BCD4;"></label>
                </li>
            </ul>
        </div>
        <div class="single-gd left-side mb-5">
            <h4>Customer Ratings</h4>
            <ul class="ratingshyny">
                <li>
                    <a href="#">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span>5.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <span>4.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star-half-o" aria-hidden="true"></span>
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <span>3.5</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <span>3.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star-half-o" aria-hidden="true"></span>
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <span>2.5</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="single-gd mb-5 border-0">
            <h4>Recent <span>Products</span></h4>
            <div class="row special-sec1 mt-4">
                <div class="col-4 img-deals">
                    <a href="ecommerce-single.html"><img src="{{asset('frontend/assets/images/shop-88.jpg')}}"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="col-8 img-deal1">
                    <h5 class="post-title">
                        <a href="ecommerce-single.html">Blue Sweater</a> </h5>

                    <a href="ecommerce-single.html" class="price-right">$499.00</a>
                </div>

            </div>
            <div class="row special-sec1 mt-4">
                <div class="col-4 img-deals">
                    <a href="ecommerce-single.html"><img src="{{asset('frontend/assets/images/shop-77.jpg')}}"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="col-8 img-deal1">
                    <h5 class="post-title">
                        <a href="ecommerce-single.html">White T-Shirt</a> </h5>
                    <a href="ecommerce-single.html" class="price-right">$575.00</a>
                </div>

            </div>

        </div>
    </div>
</aside>

</div>

@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

<div id="layoutSidenav_content">
    <main>

        <div class="container mt-5">
            <div class="card mb-4">
                <div class="card-header" style="background: #40E0D0">
                    <h3><strong>Product Details Page</h3></strong>
                    <a href="{{route('all.product')}}" class="btn btn-warning btnsm float-right">All Products</a>     
                </div>
                <div class="card-body">
                    
                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="productname"><h5>Product Name : </h5></label>
                              <strong>{{ $product->product_name }}</strong>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="productname"><h5>Product Code : </h5></label>
                                <strong>{{ $product->product_code }}</strong>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="productname"><h5>Product Quantity : </h5></label>
                                <strong>{{ $product->product_quantity }}</strong>
                            </div>
                        </div>
                        <div class="form-row">
                  
                            <div class="form-group col-md-4">
                                <label for="productname"><h5>Category : </h5></label>
                                <strong>{{ $product->category_name }}</strong>
                              
                            </div>
                            <div class="form-group col-md-4">
                                <label for="productname"><h5>Sub Category : </h5></label>
                                <strong>{{ $product->subcategory_name }}</strong>
                              
                            </div>

                            <div class="form-group col-md-4">
                                <label for="size"><h5>Product Size : </h5></label>
                                <strong>{{ $product->product_size }}</strong>
                              </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="size"><h5>Product Color : </h5></label>
                                <strong>{{ $product->product_color }}</strong>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="size"><h5>Product Selling Price : </h5></label>
                                <strong>{{ $product->selling_price }}</strong>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for=""><h5>Product Details : </h5></label>
                              <br>
                              <p>{!! $product->product_details !!}</p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="size"><h5>Video Link : </h5></label>
                                <strong>{{ $product->video_link }}</strong>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="size"><h5>Image one  </h5></label><br>
                                <img src="{{URL::to($product->image_one)}}" style="height: 80px; width:80px">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="size"><h5>Image Two  </h5></label><br>
                                <img src="{{URL::to($product->image_two)}}" style="height: 80px; width:80px">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="size"><h5>Image Three  </h5></label><br>
                                <img src="{{URL::to($product->image_three)}}" style="height: 80px; width:80px">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="size"><h5>Image Four  </h5></label><br>
                                <img src="{{URL::to($product->image_four)}}" style="height: 80px; width:80px">
                            </div>
                        </div>

                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <label class="">

                                        <span>Main Slider</span>

                                    @if ($product->main_slider == 1)

                                    <span class="badge badge-success">Active</span>

                                    @else

                                    <span class="badge badge-danger">Inactive</span>
                                        
                                    @endif
                                        
                                    </label>

                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <label class="">

                                        <span>Hot Deal</span>

                                    @if ($product->hot_deal == 1)

                                    <span class="badge badge-success">Active</span>

                                    @else

                                    <span class="badge badge-danger">Inactive</span>
                                        
                                    @endif
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <label class="">

                                        <span>Best Rated</span>

                                    @if ($product->best_rated == 1)

                                    <span class="badge badge-success">Active</span>

                                    @else

                                    <span class="badge badge-danger">Inactive</span>
                                        
                                    @endif
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <label class="">

                                        <span>Mid Slider</span>

                                    @if ($product->mid_slider == 1)

                                    <span class="badge badge-success">Active</span>

                                    @else

                                    <span class="badge badge-danger">Inactive</span>
                                        
                                    @endif
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    
                                    <label class="">

                                        <span>Hot New</span>

                                    @if ($product->hot_new == 1)

                                    <span class="badge badge-success">Active</span>

                                    @else

                                    <span class="badge badge-danger">Inactive</span>
                                        
                                    @endif
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <label class="">

                                        <span>Trends</span>

                                    @if ($product->trend == 1)

                                    <span class="badge badge-success">Active</span>

                                    @else

                                    <span class="badge badge-danger">Inactive</span>
                                        
                                    @endif
                                        
                                    </label>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </main>
    
@include('admin.partials.footer')
</div>
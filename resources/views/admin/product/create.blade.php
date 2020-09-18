@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

<div id="layoutSidenav_content">
    <main>
        <!-- error category form -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container mt-5">
            <div class="card mb-4">
                <div class="card-header" style="background: #40E0D0">
                    <h3><strong>Product Add Page</h3></strong>
                    <a href="{{route('all.product')}}" class="btn btn-warning btnsm float-right">All Products</a>     
                </div>
                <div class="card-body">
                    
                    <form enctype="multipart/form-data" method="post" action="{{route('store.product')}}">
                      @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="productname">Product Name</label>
                              <input type="text" class="form-control" id="productname" placeholder="Enter Product Name" name="product_name">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="productcode">Product Code</label>
                              <input type="text" class="form-control" id="productcode" placeholder="Enter Product Code" name="product_code">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="productquantity">Product Quantity</label>
                                <input type="text" class="form-control" id="productquantity" placeholder="Enter Product Name" name="product_quantity">
                            </div>
                        </div>
                        <div class="form-row">
                  
                            <div class="form-group col-md-6">
                              <label for="category">Category</label>
                              <select id="category" class="form-control" name="category_id">
                                <option label="Choose Category"></option>

                                @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->category_name}}</option>
                                @endforeach

                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="subcategory">Sub Category</label>
                              <select id="subcategory" class="form-control" name="subcategory_id">
                                <option></option>
                              </select>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="size">Product Size</label>
                              <input type="text" class="form-control" id="size" name="product_size" data-role="tagsinput">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="color">Product Color</label>
                              <input type="text" class="form-control" id="color" name="product_color" data-role="tagsinput">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="size">Selling Price</label>
                              <input type="text" class="form-control" id="size" name="selling_price" placeholder="Selling Price">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="productquantity">Discount Price</label>
                                <input type="text" class="form-control" id="productquantity" placeholder="Discount Price" name="discount_price">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="">Product Details</label>
                              <textarea class="form-control" id="summernote" name="product_details"></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="videolink">Video Link</label>
                              <input class="form-control" id="videolink" name="video_link" placeholder="Video Link">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="imageone">Image one (Main Thumbnail) </label>
                              <input type="file" class="form-control" id="imageone" name="image_one" placeholder="Image One"
                              onchange="readURL(this);" required>
                              <img class="mt-2 mb-1" src="#" id="one">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="imagetwo">Image Two </label>
                              <input type="file" class="form-control" id="imagetwo" name="image_two" placeholder="Image Two"
                              onchange="readURL2(this);" required>
                              <img class="mt-2 mb-1" src="#" id="two">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="imagethree">Image Three</label>
                              <input type="file" class="form-control" id="imagethree" name="image_three" placeholder="Image Three"
                              onchange="readURL3(this);" required>
                              <img class="mt-2 mb-1" src="#" id="three">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="imagefour">Image Four</label>
                              <input type="file" class="form-control" id="imagefour" name="image_four" placeholder="Image Four"
                              onchange="readURL4(this);" required>
                              <img class="mt-2 mb-1" src="#" id="four">
                            </div>
                        </div>

                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="mainslider" name="main_slider" value="1">
                                    <label class="custom-control-label" for="mainslider">Main Slider</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="hotdeal" name="hot_deal" value="1">
                                    <label class="custom-control-label" for="hotdeal">Hot Deal</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="bestrated" name="best_rated" value="1">
                                    <label class="custom-control-label" for="bestrated">Best Rated</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="midslider" name="mid_slider" value="1">
                                    <label class="custom-control-label" for="midslider">Mid Slider</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="hotnew" name="hot_new" value="1">
                                    <label class="custom-control-label" for="hotnew">Hot New</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="trends" name="trend" value="1">
                                    <label class="custom-control-label" for="trends">Trends</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="buyone_getone" name="buyone_getone" value="1">
                                    <label class="custom-control-label" for="buyone_getone">Buy one get one</label>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <button class="btn" type="submit" style="background: #40E0D0;color: white;">Submit form</button>

                      </form>  

                </div>
            </div>
        </div>
    </main>
    
@include('admin.partials.footer')
</div>
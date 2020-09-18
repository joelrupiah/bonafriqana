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
                    <h3><strong>Blog Post Add Page</h3></strong>
                    <a href="{{route('all.blogpost')}}" class="btn btn-warning btnsm float-right">All Products</a>     
                </div>
                <div class="card-body">
                    
                    <form enctype="multipart/form-data" method="post" action="{{route('store.post')}}">
                      @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="productname">Blog Title</label>
                              <input type="text" class="form-control" id="productname" placeholder="Enter Post Title" name="post_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category">Blog Category</label>
                                <select id="category" class="form-control" name="category_id">
                                  <option label="Choose Category"></option>
  
                                  @foreach($blogcategory as $row)
                                  <option value="{{$row->id}}">{{$row->category_name}}</option>
                                  @endforeach
  
                                </select>
                              </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="">Blog Post Details</label>
                              <textarea class="form-control" id="summernote" name="details"></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="imageone">Image one </label>
                              <input type="file" class="form-control" id="imageone" name="post_image" placeholder="Image One"
                              onchange="readURLb(this);" required>
                              <img class="mt-2 mb-1" src="#" id="blogone">
                            </div>
                        </div>

                        <hr>
                        <button class="btn" type="submit" style="background: #40E0D0;color: white;">Submit Post</button>

                      </form>  

                </div>
            </div>
        </div>
    </main>
    
@include('admin.partials.footer')
</div>
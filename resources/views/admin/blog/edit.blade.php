@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

<div id="layoutSidenav_content">
    
    @php
        $blogcategory = DB::table('post_category')->get();
    @endphp

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
                    <h3><strong>Post Update</h3></strong>
                    <a href="{{route('all.blogpost')}}" class="btn btn-warning btnsm float-right">All Posts</a>     
                </div>
                <div class="card-body">
                    
                    <form enctype="multipart/form-data" method="post" action="{{url('admin/update/post/'.$post->id)}}">
                      @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="productname">Blog Title</label>
                              <input type="text" class="form-control" id="productname" value="{{$post->post_title}}" name="post_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category">Blog Category</label>
                                <select id="category" class="form-control" name="category_id">
                                  <option label="Choose Category"></option>
  
                                  @foreach($blogcategory as $row)

                                  <option value="{{$row->id}}" <?php if ($row->id == $post->category_id) {
                                        echo "selected"; } ?>  >
                                    
                                    {{$row->category_name}}
                                
                                </option>

                                  @endforeach
  
                                </select>
                              </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="">Blog Post Details</label>
                              <textarea class="form-control" id="summernote" name="details">

                                {{$post->details}}

                              </textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="imageone">Old Post Image </label>
                              <input type="file" class="form-control" id="imagefour" name="post_image" placeholder="Post Image"
                              onchange="readURL5(this);">
                              <input type="hidden" name="old_image" value="{{$post->post_image}}">
                              <img class="mt-2 mb-1" src="{{URL::to($post->post_image)}}" id="blogone" style="width:50px;height:50px">
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
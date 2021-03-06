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
                    <i class="fas fa-table mr-1"></i>
                    Blog Category Table
                    <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#blogcategorymodal">Add New Category</a>
        
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="background: #40E0D0">
                                <tr>
                                    <th>ID</th>
                                    <th>CATEGORY NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tfoot style="background: #40E0D0">
                                <tr>
                                    <th>ID</th>
                                    <th>CATEGORY NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($blogcat as $key=>$row)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td>
                                        <a href="{{ URL::to('admin/edit/blogcategory/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ URL::to('admin/delete/blogcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="blogcategorymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">ADD CATEGORY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                <form method="post" action="{{ route('store.blog.category') }}">
                    @csrf
                    <div class="form-group">
                      <label for="categoryname">Blog Category Name</label>
                      <input type="text" class="form-control" id="categoryname" a
                      ria-describedby="categorylHelp" placeholder="Category Name" name="blog_category_name">
                      
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn" style="background: #40E0D0">Save category</button>
            </div>
            
        </form>
          </div>
        </div>
      </div>
    
@include('admin.partials.footer')
</div>
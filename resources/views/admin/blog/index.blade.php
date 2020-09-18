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
                    Post List
                    <a href="{{route('add.blogpost')}}" class="btn btn-sm btn-warning" style="float: right;">Add New Post</a>
        
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="background: #40E0D0">
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot style="background: #40E0D0">
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($post as $row)
                                <tr>
                                    <td>{{$row->post_title}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td><img src="{{ URL::to($row->post_image) }}" height="50px" width="50px"></td>
                                    <td>
                                        <a href="{{ URL::to('admin/edit/post/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ URL::to('admin/delete/post/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
    
@include('admin.partials.footer')
</div>
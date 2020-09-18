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
                    Product List
                    <a href="{{route('add.product')}}" class="btn btn-sm btn-warning" style="float: right;">Add New</a>
        
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="background: #40E0D0">
                                <tr>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tfoot style="background: #40E0D0">
                                <tr>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($product as $row)
                                <tr>
                                    <td>{{$row->product_code}}</td>
                                    <td>{{$row->product_name}}</td>
                                    <td><img src="{{ URL::to($row->image_one) }}" height="50px" width="50px"></td>
                                    <td>{{$row->category_name}}</td>
                                    <td>{{$row->product_quantity}}</td>
                                    <td>
                                        @if ($row->status == 1)
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ URL::to('admin/edit/product/'.$row->id) }}" class="btn btn-sm btn-info" title="edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ URL::to('admin/delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a href="{{ URL::to('admin/view/product/'.$row->id) }}" class="btn btn-sm btn-warning" title="show">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        @if ($row->status == 1)

                                        <a href="{{ URL::to('admin/inactive/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="inactive">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>

                                        @else

                                        <a href="{{ URL::to('admin/active/product/'.$row->id) }}" class="btn btn-sm btn-info" title="active">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                            
                                        @endif

                                        
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

    <div class="modal fade" id="categorymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
@include('admin.partials.footer')
</div>
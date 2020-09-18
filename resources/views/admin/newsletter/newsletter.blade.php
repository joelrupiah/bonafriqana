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
                    Subscriber List
                    <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#categorymodal">Delete All</a>
        
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="background: #40E0D0">
                                <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>SUBSCRIBE TIME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tfoot style="background: #40E0D0">
                                <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>SUBSCRIBE TIME</th>
                                    <th>ACTION</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($sub as $key=>$row)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        {{$key +1}}
                                    </td>
                                    <td>{{$row->email}}</td>
                                    <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ URL::to('admin/delete/sub/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">ADD CATEGORY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                <form method="post" action="{{ route('store.category') }}">
                    @csrf
                    <div class="form-group">
                      <label for="categoryname">Category Name</label>
                      <input type="text" class="form-control" id="categoryname" a
                      ria-describedby="categorylHelp" placeholder="Category Name" name="category_name">
                      
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
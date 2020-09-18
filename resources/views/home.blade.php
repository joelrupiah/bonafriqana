@include('user.partials.pagesheader')
@include('user.partials.shop.shopmainheader')

<div class="container-fluid">
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-5 mb-5">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Body</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark 1</td>
                                    <td>Mark </td>
                                    <td>Mark 3</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark 1</td>
                                    <td>Mark </td>
                                    <td>Mark 3</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark 1</td>
                                    <td>Mark </td>
                                    <td>Mark 3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-5 mb-5">
                <div class="card">
                  <img src="{{asset('frontend/assets/images/1.jpg')}}" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                    
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <a href="{{ route('password.change') }}" style="color: #40E0D0">Change Password</a>  </li>
                     <li class="list-group-item">line one </li>
                      <li class="list-group-item">line one </li> 
                  </ul>
        
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    
                  </div>
                  
                </div>
            </div>
    </div>
</div>

@include('user.partials.footer')

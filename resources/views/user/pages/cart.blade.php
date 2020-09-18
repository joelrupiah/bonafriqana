@include('user.partials.pagesheader')
@include('user.partials.shop.shopmainheader')


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">BONAFRIQANA CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($cart as $row)

                        <tr>
                            <td><img src="{{asset($row->options->image)}}" style="width: 70px; height: 70px"/> </td>
                            <td>{{$row->product_name}}</td>
                            <td>{{$row->options->color}}</td>
                            <td>{{$row->options->size}}</td>
                            <td class="text-center">
                                <form method="post" action="{{ route('update.cartitem') }}">
                                    @csrf
                                    <input type="hidden" name="productid" value="{{$row->rowId}}">
                                    <input type="number" name="qty" value="{{$row->qty}}" style="width: 50px">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-check-square"></i>
                                    </button>
                                </form>
                            </td>
                            <td>$ {{$row->price}}</td>
                            <td>$ {{$row->price*$row->qty}}</td>
                            <td class="text-right"><a href="{{ url('remove/cart/'.$row->rowId) }}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a> </td>
                        </tr>

                    @endforeach()
                    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Sub-Total</strong></td>
                            <td class="text-right"><strong>$ {{Cart::total()}}</strong></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.partials.footer')

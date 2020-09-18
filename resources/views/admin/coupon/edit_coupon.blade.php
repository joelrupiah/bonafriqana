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
        <form method="post" action="{{ url('admin/update/coupon/'.$coupon->id) }}">
            @csrf
            <div class="form-group" style="width:50%">
              <label for="coupon">Coupon Code</label>
              <input type="text" class="form-control" id="coupon" aria-describedby="couponlHelp" 
                placeholder="Coupon" value="{{$coupon->coupon}}" name="coupon">
            </div>
            <div class="form-group" style="width:50%">
              <label for="discount">Coupon Discount (%)</label>
              <input type="text" class="form-control" id="discount" aria-describedby="discountlHelp" 
                placeholder="Discount" value="{{$coupon->discount}}" name="discount">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
    </main>
    
@include('admin.partials.footer')
</div>
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
        <form method="post" action="{{ url('admin/update/category/'.$category->id) }}">
            @csrf
            <div class="form-group" style="width:50%">
              <label for="updatecategory">Category Name</label>
              <input type="text" class="form-control" id="updatecategory" aria-describedby="updatelHelp" 
                placeholder="Category Name" value="{{$category->category_name}}" name="category_name">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
    </main>
    
@include('admin.partials.footer')
</div>
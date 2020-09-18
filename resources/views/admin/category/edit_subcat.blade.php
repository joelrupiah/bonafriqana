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
        <form method="post" action="{{ url('admin/update/subcategory/'.$subcat->id) }}">
            @csrf
            <div class="form-group" style="width:50%">
              <label for="updatesubcategory">Sub Category Name</label>
              <input type="text" class="form-control" id="updatesubcategory" aria-describedby="updatelHelp" 
                placeholder="Category Name" value="{{ $subcat->subcategory_name }}" name="subcategory_name">
            </div>

            <div class="form-group" style="width:50%">
                <label for="categoryname">Category Name</label>
                <select class="form-control" id="categoryname" name="category_id">

                    @foreach($category as $row)

                    <option value="{{ $row->id }}"
                        
                        <?php if ($row->id==$subcat->category_id) {
                            echo "selected";
                        }
                        ?>
                        >{{ $row->category_name }}</option>

                    @endforeach

                  </select>
              </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
    </main>
    
@include('admin.partials.footer')
</div>
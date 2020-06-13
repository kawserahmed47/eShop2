@extends('back.adminPanel')
@section('title')
{{$title}}
    
@endsection

@section('dashboardContent')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row ">
        <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Product</h3>
              <br>
                @if(Session::get('message'))
                  <p class="bg-success text-center">{{ Session::get('message') }}</p>
                  {{Session::put('message',NULL)}}
                @endif
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="/insertProduct" method="POST" enctype="multipart/form-data"  >
            @csrf 
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" name="product_name"  id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Product Price</label>
                <input type="text" name="price"   id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Product Category</label>
                  <select id="category" name="category_id" class="form-control">
                    <option value="">--select--</option>
                    @if (!empty($categories))
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" >{{$category->category_name }}</option>
                  @endforeach
                  @else
                  <option value="">Not available</option>
                  @endif
                  </select>
              </div>

              <div class="form-group">
                <label for="inputDescription">Product Brand</label>
                <select name="brand_id" class="form-control">
                  <option value="">--select--</option>
                  @if(!empty($brands))
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" >{{ $brand->brand_name }}</option>
                  @endforeach
                  @else 
                  <option value="">Not available</option>
                  @endif
                </select>
              </div>

              <div class="form-group">
                <label for="inputDescription">Active In </label>
                <select name="active_in"   class="form-control">
                          <option value="0">Select</option>
                          <option value="1">Features</option>
                          <option value="2">BestSeller</option>
                          <option value="3">TopRated</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" placeholder="Describe" name="product_description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image input</label> 
                <div class="input-group">
                  <div class="custom-file">
                <input type='file' name="img" id="imgInp_product" />
                 <img style="width: 100px; height: 100px;" id="blah_product" src="#" alt="Preview" />
                </div>
                </div>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
     
      </div>
      <div class="row  mb-5  ">
        <div class="col-md-9">
          <a href="{{route('dashboard')}}" class="btn btn-secondary">Cancel</a>
          <button class="btn btn-success float-right" type="submit" > Submit </button>
        </div>
      </div>
      </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

   

@endsection


@section('extraJquery')
 <script>
// $(function(){
//     var category = $('select[name="category_id"]');
//     var subcategory = $('select[name="subcat_id"]');
//     subcategory.attr('disabled', 'disabled');
//     category.change(function(){

//       var id = $(this).val();
//       // 
//       if(id){
//         console.log(id);
//         subcategory.removeAttr('disabled');
//   $.ajax({
//           url:'/subcategory/'+id,
//           type:'GET',
//           dataType:'json',
//           success:function(data){
//             console.log(data);
//             var s = '<option value="">--select--</option>';
//             data.forEach(function(row) {
//               s +='<option value="'+row.id+'">'+row.sub_cat_name+'</option>'
              
//             });
//             subcategory.html(s);
            
//           }
//         })

//       }
//     })

// })

</script>  
<script>
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
  
          reader.onload = function (e) {
              $('#blah_product').attr('src', e.target.result);
          }
  
          reader.readAsDataURL(input.files[0]);
      }
  }
  
  $("#imgInp_product").change(function(){
      readURL(this);
  });
  
  </script>


@endsection

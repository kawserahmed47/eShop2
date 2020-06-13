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
            <h1>Edit Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Brand</li>
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
              <h3 class="card-title">Edit Brand</h3>

              @if (Session::get('message'))
<p class="bg-danger text-center">{{ Session::get('message') }}</p>
{{Session::put('message',NULL)}}
@endif
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="/insertBrand" method="POST" enctype="multipart/form-data" > 
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Brand Name</label>
                <input type="text" name="brand_name" required class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Brand Description</label>
                <div class="mb-3">
                <textarea rows="4" cols="50" name="brand_description" placeholder="Describe  here..."></textarea>
              </div>
              </div>
              <div class="form-group">
                <label for="inputName">Status</label>
               <select name="status" id="">
               <option value="1">Active</option>
               <option value="0">Inactive</option>
               </select>
              </div>
              <div class="form-group">
                    <label for="exampleInputFile">Image input</label> 
                    <div class="input-group">
                      <div class="custom-file">
                    <input type='file' name="img"   id="imgInp_product" />
                     <img style="width: 100px; height: 100px;" id="blah_product" src="#" alt="Preview" />
                    </div>
                    </div>
                  </div>
              
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
     
      </div>
      <div class="row mb-5">
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
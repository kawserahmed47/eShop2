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
            <h1>Edit Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Slider</li>
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
              <h3 class="card-title">Edit Slider</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="{{route('updateSlider',$results->id)}}" method="POST" enctype="multipart/form-data"  > 
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Title</label>
              <input type="text" name="title" id="inputName" value="{{$results->title}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Subtitle</label>
                <textarea id="inputDescription" name="subtitle" class="form-control" rows="4">{{$results->subtitle}}</textarea>
              </div>
              <div class="form-group">
                <label for="inputName">Status</label>
               <select name="status" id="selectStatus">
               <option value="1">Regular</option>
               <option value="0">Inactive</option>
               <option value="3">Always active</option>
               </select>
              </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image input</label> 
                    <div class="input-group">
                      <div class="custom-file">
                    <input type='file' name="image" id="imgInp_slider" />
                      <img style="width: 100px; height: 100px;" id="blah_slider" src="{{asset($results->image)}}" alt="Preview" />
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
          <button class="btn btn-success float-right" type="submit" > Update </button>
        </div>
      </div>
      </form>
      </div>
    </section>
    <!-- /.content -->
    
@endsection


@section('extraJquery')
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah_slider').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp_slider").change(function(){
    readURL(this);
});
$("#selectStatus").val({{ $results->status }});
</script>

@endsection
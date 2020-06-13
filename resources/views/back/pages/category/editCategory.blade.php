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
            <h1>Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
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
        @if (Session::get('message'))
<p class="bg-danger text-center">{{ Session::get('message') }}</p>
{{Session::put('message',NULL)}}
@endif
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Category</h3>
          

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="/insertCategory" method="POST" > 
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Category Name</label>
                <input type="text" name="category_name" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Category Description</label>
                <div class="mb-3">
                <textarea rows="4" cols="50" name="category_description" placeholder="Describe  here..." ></textarea>
              </div>
              </div>
              <div class="form-group">
                <label for="inputName">Status</label>
               <select name="status" id="selectStatus">
               <option value="1">Active</option>
               <option value="0">Inactive</option>
               </select>
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
      </div>
    </section>
    <!-- /.content -->
    

@endsection

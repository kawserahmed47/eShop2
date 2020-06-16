@extends('back.adminPanel')
@section('title')
{{$title}}
    
@endsection

@section('dashboardContent')
<section class="content-header">
      <div class="container-fluid">
        <div class="row ">
        <div class="col-sm-6">
            <h1>View Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">View Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header">
      <div class="container-fluid">
<div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category List</h3> <br>
                @if (Session::get('message'))
              <p class="bg-success text-center">{{ Session::get('message') }}</p>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Category Name</th>
                      <th>Short Description</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @php
                      $a=0
                  @endphp
               @if(!empty($results))
                  @foreach($results as $result )
                  
                    <tr> 
                      <td>{{$a=$a+1 }} </td>
                      <td>{{$result->name}}</td>
                      <td>
                       {{$result->description}}
                      </td>
                      <td>  @if($result->status ==1 )
                    <span class="label bg-success" > Active</span>
                 @else
                 <span class="label bg-danger" > Inactive</span>
                 @endif </td>
                      <td>
                      <a class=" badge bg-primary" href="{{route('editCategory',$result->id)}}">Edit</a>
                      <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteCategory',$result->id)}}">Delete</a>
                      </td>
                    </tr>
                @endforeach

                
                @else 
                <tr>
                  <td colspan="6" class="text-center">
                   No Data Available
                  </td>

                </tr>
                
                @endif
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!--
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
-->

            </div>
            <!-- /.card -->

      
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        </section>

@endsection

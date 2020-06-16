@extends('back.adminPanel')
@section('title')
{{$title}}
    
@endsection
@section('dashboardContent')
<section class="content-header">
      <div class="container-fluid">
        <div class="row ">
        <div class="col-sm-6">
            <h1>View Sliders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">View Sliders</li>
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
                <h3 class="card-title">Slider List</h3>
                <br>
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
                      <th>Slider Title</th>
                      <th>Slider Subtitle</th>
                      <th>Slider Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                      $a=0
                  @endphp
                  @if(!empty($results))
                  @foreach($results as $result)
                    <tr>
                      <td>{{$a=$a+1 }} </td>
                      <td>{{$result->title }}</td>
                      <td> {{$result->subtitle}} </td>
                      <td> <img style="width: 100px; height: 100px;"  src="{{ $result->image }}" alt="Slider_Img"> </td>
                     <td>
                     @if($result->status ==1 )
                    <span class="label bg-success" > Regular</span>
                    @elseif($result->status ==3)

                  <span class="label bg-primary" >Active</span>
                  @else

                 <span class="label bg-danger" > Inactive</span>
                 @endif
                     </td>
                      <td>
                      <a class=" badge bg-primary" href="{{route('editSlider',$result->id)}}">Edit</a>
                      <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteSlider',$result->id)}}">Delete</a>
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

            </div>
            <!-- /.card -->

      
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

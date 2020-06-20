@extends('back.adminPanel')
@section('title')
{{$title}}
    
@endsection
@section('dashboardContent')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">View Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
   
    <div class="card">
    <div class="card-header">
                <h3 class="card-title">Products List</h3>
                <br>
                @if (Session::get('message'))
                <p class="bg-success text-center">{{ Session::get('message') }}</p>
                {{Session::put('message',NULL)}}
                @endif
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#Code</th>
                  <th>Quantity</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Description</th>              
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                      $a=0
                  @endphp
                @if (!empty($results))
                    
          
                @foreach($results as $result)
                <tr>
                  <td>{{$result->product_code }} </td>
                  <td>{{$result->quantity }} </td>
                  <td>
                    @php
                   $pic= json_decode($result->image)
                    @endphp
                  
                     <img src="{{ asset('/moreImg/'.$pic[0]) }}" alt="Kawser" style="height:100px; width:100px"/>
       
                  </td>
                  <td>{{ $result->name }}</td>
                  <td>{{ $result->price }}</td>
                  <td>{{ $result->description }}</td>
                
                  <td>
                  @if($result->status ==1 )
                    <span class="label bg-success"> Features </span>
                 @elseif($result->status ==2)
                 <span class="label bg-success"> BestSeller </span>
                 @else($result->active_in ==3)
                 <span class="label bg-success"> TopRated </span>
                 @endif
                  </td>
                  <td>
                      <a class=" badge bg-primary" href="{{route('editProduct',$result->id)}}">Edit</a>
                      <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteProduct',$result->id)}}">Delete</a>
                      </td>
                </tr>
               @endforeach
               @else 
               <tr>
                 <td colspan="8" class="text-center">No data available</td>
               </tr>
               @endif  
                </tbody>
                <tfoot>
                  <tr>
                    <th>#Code</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>              
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@endsection

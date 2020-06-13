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
            <h1>Order List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">View Order</li>
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
                <h3 class="card-title">Order List</h3>
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
                  <th>#OrderID</th>
                  <th>#CustomerID</th>
                  <th>#Customer Name</th>
                  <th>#Total</th>               
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
                  <td>{{$a=$a+1 }} </td>
                  <td><img style="width: 100px; height: 100px;"  src="{{ $result->img }}" alt="img" ></td>
                  <td>{{ $result->product_name }}</td>
                  <td>{{ $result->price }}</td>
                  <td>{{ $result->brand_name }}</td>
                 <td>{{ $result->category_name}}</td>
                  <td>{{ $result->sub_cat_name }}</td>
                  <td>
                  @if($result->active_in ==1 )
                    <span class="label bg-success"> Features </span>
                 @elseif($result->active_in ==2)
                 <span class="label bg-success"> BestSeller </span>
                 @else($result->active_in ==3)
                 <span class="label bg-success"> TopRated </span>
                 @endif
                  </td>
                  <td>
                      <a class=" badge bg-primary" href="{{route('editProduct')}}/{{$result->id }}">Edit</a>
                      <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="deleteProduct/{{ $result->id }}">Delete</a>
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
                    <th>#OrderID</th>
                    <th>#CustomerID</th>
                    <th>#Customer Name</th>
                    <th>#Total</th>               
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

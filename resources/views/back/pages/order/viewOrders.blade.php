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
                @if (Session::get('omessage'))
                <p class="bg-success text-center">{{ Session::get('omessage') }}</p>
                @elseif(Session::get('message'))
                <p class="bg-success text-center">{{ Session::get('message') }}</p>
                @endif
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#OrderID</th>
                  <th>#ShippingID</th>
                  <th>#PaymentID</th>         
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if (!empty($results))
                @foreach($results as $result)
                <tr>
                  <td>{{ $result->id }}</td>
                  <td>{{ $result->shipping_id }}</td>
                  <td>{{ $result->payment_id}}</td>
                  <td>
                  @if($result->status ==0 )
                  <a  onclick="return confirm('Are you sure?')" class="btn btn-info" href="{{route('makeSuccess',$result->id)}}">Pending</a>
                    
                 @else
                 <a class="btn btn-success" href="#">Success</a>
                 @endif
                  </td>
                  <td>
                      <a   class=" badge bg-primary" href="{{route('orderinfo',$result->id) }}">View</a>
                      <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteOrder',$result->id)}}">Delete</a>
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
                    <th>#ShippingID</th>
                    <th>#PaymentID</th>         
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

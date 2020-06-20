@extends('back.adminPanel')
@section('title')
{{$title}}
    
@endsection
@section('dashboardContent')

<section class="content">
<div class="container-fluid">
        <div class="row ">
          <div class="col-sm-12">
          @if (Session::get('message'))
          <p class="bg-primary">{{ Session::get('message') }}</p>
          
          {{Session::put('message', NULL)}}
          
          @endif
          <h1> Dashboard </h1> <br>

        

          </div>
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{$cOrders}}</h3>

                <p>Total Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{route('viewOrders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$cProducts}}<sup style="font-size: 20px"></sup></h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            <a href="{{route('viewProducts')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$cCustomers}}</h3>
                <p>Register Customer</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>{{$cContact}}</h3>

                <p>Total Message</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            <a href="{{route('viewMessages')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
</div>

</section>

@endsection 


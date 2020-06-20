@extends('back.adminPanel')
@section('title')
{{$title}}
    
@endsection
@section('dashboardContent')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <div class="card-header">
                <h3 class="card-title">Shipping</h3>
                <br>
              </div>
            <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>  
                        <th>Alternative</th>       
                        <th>Address</th>
                        <th>City</th>
                        <th>District</th>
                      </tr>

                </thead>
                <tbody>
                    <tr>
                    <td>{{$shipping->first_name}} {{$shipping->last_name}}</td>
                        <td>{{$shipping->email}}</td>
                        <td>{{$shipping->contact_mobile}}</td>
                        <td>{{$shipping->alternative_mobile}}</td>
                        <td>{{$shipping->address}}</td>
                        <td>{{$shipping->city}}</td>
                        <td>{{$shipping->district}}</td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div class="col-sm-3">
            <div class="card-header">
                <h3 class="card-title">Shopper</h3>
                <br>
              </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#Name</th>
                        <th>#Mobile</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                    <td>{{$customer->name}}</td>
                        <td>{{$customer->mobile}}</td>
                    </tr>
                </tbody>
                
            </table>

        </div>

    </div>


<br>
<br>
<br>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-header">
                <h3 class="card-title">Product Info</h3>
                <br>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#Product_ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{$result->product_id}}</td>
                        @php
                          $pro=  DB::table('products')->where('id',$result->product_id)->first()
                        @endphp
                        @if ($pro)
                    <td>{{$pro->name}}</td>
                    <td>
                        @php
                        $pic= json_decode($pro->image)
                         @endphp
                       
                          <img src="{{ asset('/moreImg/'.$pic[0]) }}" alt="IMG" style="height:100px; width:100px"/>
            
                    
                    </td>
                        @else 
                        <td></td>
                        <td></td>
                        @endif
                        
                        <td>{{$result->quantity}}</td>
                        <td>{{$result->price}}</td>
                        <td>@php
                            echo $result->quantity * $result->price;
                        @endphp  </td>
                        </tr>
                        
                    @endforeach

                  

                </tbody>
                
            </table>



        </div>


    </div>
    <div class="row">

        <div class="col-sm-6">
            <div class="card-header">
                <h3 class="card-title">Product Info</h3>
                <br>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>#Method</th>
                        <th>#Ammount</th>
                        <th>#Transaction</th>
                        <th>#Status</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                    <td>{{$payment->id}}</td>
                    <td>{{$payment->method}}</td>
                    <td>{{$payment->amount}}</td>
                    <td>{{$payment->transaction_id}}</td>
                    <td>
                        @if ($payment->status == 1)
                        <p class="badge badge-success">Success</p>
                        @else 
                        <p class="badge badge-info">Pending</p>
                        @endif
                       
                    
                    </td>

                    </tr>
                </tbody>
                
            </table>



        </div>

    </div>
</div>

@endsection
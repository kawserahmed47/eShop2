@extends('front.master')
@section('title')
{{$title}}
    
@endsection

@section('content')


<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
            <li><a href="{{route('index')}}">Home</a></li>
              <li class="active">Check out</li>
            </ol>
            @if (Session::get('message'))
            <p class="text-primary text-center">{{ Session::get('message') }}</p>
            @endif
            @if (Session::get('smessage'))
            <p class="text-primary text-center">{{ Session::get('smessage') }}</p>
            @endif
        </div><!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">Step1</h2>
        </div>
     
        <div class="register-req">
            <p>Please use Register And Checkout to easily get access to your order history.</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            @include('front.layouts.customerinfo')
          
        </div>
        <div class="step-one">
            <h2 class="heading">Step2</h2>
        </div>
        <div class="register-req">
            <h1 style="font-size: 16px">Review</h1>
        </div>

        <div class="table-responsive cart_info">
            @include('front.layouts.carttable')
         
           
                <table class="table result  table-condensed">
                    @php
                    $subTotal = Cart::getSubTotal();
                    $total = Cart::getTotal();
                    @endphp
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Subtotal</td>
                        <td>&#2547 {{$subTotal}}</td>
                       
                    </tr>
                    <tr class="shipping-cost">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Shipping Cost</td>
                        <td>Free</td>	
                        									
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td><strong>&#2547 {{$total}}</strong></td>
                        
                    </tr>
                </table>

        </div>
       
            
        
        
         <div class="step-one">
            <h2 class="heading">Step3</h2>
        </div>
        <div class="register-req">
            <h1 style="font-size: 16px">Payment</h1>
        </div>
           
            <div class="category-tab shop-details-tab"><!--category-tab-->
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#cashon" data-toggle="tab"><i class="fa fa-money"></i> Cash On Delivery</a></li>
                        <li><a href="#mobile" data-toggle="tab"> <i class="fa fa-mobile"></i> Mobile Banking</a></li>
                        <li><a href="#online" data-toggle="tab"><span class="glyphicon glyphicon-globe"></span> Online Banking</a></li>
                        <li><a href="#others" data-toggle="tab"> <span class="glyphicon glyphicon-tasks"> Others</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="cashon" >
                        <div class="col-sm-12">
                           
                            <h1 class="text-center p5">Cash On Delivery</h1>
                       @if (!empty($shipping))
                       <div class="col-sm-5"></div>
                       <div class="col-sm-2">
                        <a onclick="return confirm('Are you sure?')"  class="btn btn-warning" href="{{route('orderByCash')}}"> Confirm Order </a>
                       </div>
                        
                        <div class="col-sm-5"></div>
                       @else 
                        <a href="#">Update Shipping Information</a>
                       @endif
                           
                          
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="mobile" >
                        <div class="col-sm-12">
                           
                            <p>Mobile Banking</p>
                            
                          
                        </div>
                    
                    </div>
                    
                    <div class="tab-pane fade" id="online" >
                        <div class="col-sm-12">
                           
                            <p>Online Banking</p>
                            
                          
                        </div>
                    </div>
                    
                    <div class="tab-pane fade " id="others" >
                        <div class="col-sm-12">
                           
                            <p>Others</p>
                            
                          
                        </div>
                    </div>
                    
                </div>
            </div><!--/category-tab-->
            
    </div>
</section> <!--/#cart_items-->



    
@endsection
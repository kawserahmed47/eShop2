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
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            @include('front.layouts.carttable')
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            {{-- <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
         --}}
        </div>
        <div class="row">
            <div class="col-sm-6">
                {{-- <div class="chose_area">                   
                    <form action="">        
                       
                            <label class="check_out">Coupon Code:</label>
                            <input  type="text" placeholder="********"><br>
                    
                        <a class="btn btn-default check_out" href="">Submit</a>
                    </form>  
                    
                </div> --}}
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    @php
                        $subTotal = Cart::getSubTotal();
                        $total = Cart::getTotal();
                    @endphp
                    <ul>
                    <li>Cart Sub Total <span>&#2547 {{$subTotal}}</span></li>
                        {{-- <li>Discount <span>&#2547 0</span></li> --}}
                        {{-- <li>Ecommerce Tax <span>&#2547 0</span></li> --}}
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>&#2547 {{$total}}</span></li>
                    </ul>
                        <a class="btn btn-default update" href="{{route('index')}}">Continue Shopping</a>
                        @if(Cart::getTotalQuantity() > 0 )
                        <a class="btn btn-default check_out" href="{{route('checkout')}}">Check Out</a>

                        @endif
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

    
@endsection
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
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td>Action
                        <br> <a class="badge badge-danger" href="{{route('clearCart')}}">Clear All</a>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $cartCollection = Cart::getContent();
                    @endphp

                    @if(!empty($cartCollection))
                   
                    @foreach ($cartCollection as $cart)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img style="height: 100px; width:100px" src="{{asset($cart->attributes->image)}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                        <h4>{{$cart->name}}</h4>
                            {{-- <p> ID: 1089772</p> --}}
                        </td>
                        <td class="cart_price">
                        <p>&#2547 {{$cart->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                            <form action="{{route('updateCart',$cart->id)}}" method="POST">
                                  @csrf
                                  <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart->quantity}}" autocomplete="off" size="2">
                                  <button class="cart_quantity_down" > + </button>
                                  

                              </form>
                               
                            </div>
                        </td>
                        <td class="cart_total">
                            @php
                             $summedPrice = Cart::get($cart->id)->getPriceSum();
                            @endphp
                            <p class="cart_total_price">&#2547 {{$summedPrice}} </p>
                        </td>
                        <td class="cart_delete">
                            {{-- <a style="color: black"  class="btn" href="">Update</a> --}}

                            <a style="color: black"  class="btn cart_quantity_delete" href="{{route('cartDelete',$cart->id)}}"><i class="fa fa-times"></i></a>
                           

                        </td>
                    </tr>
                    @endforeach
                   
                    @else 
                    <tr>
                        <td>
                            <p>Empty Cart</p>
                        </td>
                    </tr> 
                    @endif

                </tbody>
            </table>
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
                    <ul>
                        <li>Cart Sub Total <span>&#2547 59</span></li>
                        <li>Discount <span>&#2547 5</span></li>
                        <li>Eco Tax <span>&#2547 2</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>&#2547 61</span></li>
                    </ul>
                        <a class="btn btn-default update" href="{{route('index')}}">Continue Shopping</a>
                <a class="btn btn-default check_out" href="{{route('checkout')}}">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

    
@endsection
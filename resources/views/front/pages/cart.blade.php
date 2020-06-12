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
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{asset('public/front/images/cart/one.png')}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p> ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>&#2547 59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> - </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> + </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">&#2547 59</p>
                        </td>
                        <td class="cart_delete">
                            <a style="color: black"  class="btn" href="">Update</a>

                            <a style="color: black"  class="btn cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                           

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">                   
                    <form action="">        
                       
                            <label class="check_out">Coupon Code:</label>
                            <input  type="text" placeholder="********"><br>
                    
                        <a class="btn btn-default check_out" href="">Submit</a>
                    </form>  
                    
                </div>
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
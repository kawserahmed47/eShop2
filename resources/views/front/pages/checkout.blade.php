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
        </div><!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">Step1</h2>
        </div>
     
        <div class="register-req">
            <p>Please use Register And Checkout to easily get access to your order history.</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">
               <form action="">
                <div class="form-group">
                <div class="col-sm-5 clearfix">
                    <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one ">
                            
                                <input class="form-control" type="text" placeholder="First Name"><br>
                                <input class="form-control" type="text" placeholder="Last Name"><br>
                                <input class="form-control" type="text" placeholder="Email*"><br>
                                <input class="form-control" type="phone" placeholder="Mobile*"><br>
                                <input class="form-control" type="phone" placeholder="Alternative Mobile"><br>
                               
                           
                        </div>
                        <div class="form-two ">
                            
                                <input class="form-control" type="text" placeholder="Full Address*"><br>
                                <input class="form-control" type="text" placeholder="Location"><br>
                                <input class="form-control" type="text" placeholder="City"><br>
                                <input class="form-control" type="text" placeholder="Police Station*"><br>
                                <input class="form-control" type="text" placeholder="District"><br>
                            
                        </div>
                      
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="order-message">
                        <p>Shipping Order</p>
                        <textarea class="form-control" style="height: 244px" name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                        
                    </div>	
                </div>
                <div class="col-sm-3">
                    <div class="shopper-info">
                        <p>Shopper Information</p>
                        <div  class="total_area" style="margin-left: -40px">
                        <ul>
                            <li><label for="">Name:</label> <span>Name Here</span></li>
                            <li><label for="">Email:</label>  <span>email@info.com</span></li>
                            <li class="btn " style="background:rgb(255, 187, 0); width:180px"><a style="color: white" href="{{route('index')}}">Continue Shopping</a></li>
                            <li class="btn " style="background:rgb(255, 187, 0);width:180px"><a style="color: white" type="submit" href="">Update All Information</a></li>
                          
                        </ul>
                    </div>
                       
                    </div>
                </div>
            </div>
            </form>					
            </div>
        </div>
        <div class="step-one">
            <h2 class="heading">Step2</h2>
        </div>
        <div class="register-req">
            <h1 style="font-size: 16px">Review</h1>
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
                        <td  class="cart_delete">
                            <a style="color: black"  class="cart_quantity_delete" href="">Update</a>
                            <a style="color: black"  class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                 
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td>&#2547 59</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td>&#2547 9</td>
                                </tr>
                                <tr>
                                    <td>Exo Tax</td>
                                    <td>&#2547 2</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>Free</td>										
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><span>&#2547 61</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
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
                           
                            <p class="p5">Cash On Delivery</p>
                            
                          
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
@extends('front.master')
@section('title')
{{$title}}
@endsection

@section('content')

	
<section>
    <div class="container">
        <div class="row">
           
                @include('front.layouts.sidebar')
            
            
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{asset('public/front/images/product-details/1.jpg')}}" alt="" />
                            
                        </div>
                        {{-- <div id="similar-product" class="carousel slide" data-ride="carousel">
                            
                              <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                      <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                      <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                      <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                      <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                      <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                      <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                      <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    
                                </div>

                              <!-- Controls -->
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div> --}}

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="{{asset('public/front/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                            <h2>Product Name</h2>
                            <p>Product ID: 1089772</p>
                            <img src="{{asset('public/front/fimages/product-details/rating.png')}}" alt="" />
                            <span>
                                <span>BDT 50 &#2547 </span>
                                <label>Quantity:</label>
                                <input type="text" value="1" />
                            <a class="btn btn-fefault cart" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>
                                    Add to cart</a>
                              
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> Name</p>
                            {{-- <a href=""><img src="{{asset('public/front/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a> --}}
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Description</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Specification</a></li>
                            <li><a href="#tag" data-toggle="tab">Terms & Condition</a></li>
                            <li ><a href="#reviews" data-toggle="tab">Policy</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                            <div class="col-sm-12">
                               
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                
                              
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="companyprofile" >
                            <div class="col-sm-12">
                               
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                
                              
                            </div>
                        
                        </div>
                        
                        <div class="tab-pane fade" id="tag" >
                            <div class="col-sm-12">
                               
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                
                              
                            </div>
                        </div>
                        
                        <div class="tab-pane fade " id="reviews" >
                            <div class="col-sm-12">
                               
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                
                              
                            </div>
                        </div>
                        
                    </div>
                </div><!--/category-tab-->
                
                @include('front.layouts.recommended')
            </div>
        </div>
    </div>
</section>

    
@endsection
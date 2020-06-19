<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +88 01715 505 521</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> office@masudit.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/mitsavar.net/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCaRqEsLDKXqeLmdKWoTUa3w" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                    <a href="{{route('index')}}"><img src="{{asset('public/front/images/home/masudit-logo.gif')}}" alt="" /></a>
                    </div>
                   
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @php
                              $customerID=  Auth::guard('customer')->id();
                            @endphp
                            @if  (Session::get('customerLogin'))

                            <li><a href="{{route('customerProfile', $customerID)}}"><i class="fa fa-user"></i> Account</a></li>

                            @endif
                           
                            {{-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> --}}
                            @php
                            $cartTotalQuantity = Cart::getTotalQuantity();
                            $subTotal = Cart::getSubTotal();

                        @endphp
                        @if($cartTotalQuantity > 0 )
                        <li><a href="{{route('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        @endif
                      
                            <li>
                                <a href="{{route('cart')}}">
                                    <span  class="badge badge-light"> {{ $cartTotalQuantity}} </span>  |  <span  class="badge badge-info">{{$subTotal}} &#2547</span>
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>
                           
                            </li>
                            @if  (Session::get('customerLogin'))
                            <li><a href="{{route('customerLogout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                            @else 
                            <li><a href="{{route('customerLogin')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('index')}}" class="active">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('allProducts')}}">All Products</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            {{-- <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li> 
                                    <li><a href="checkout.html">Checkout</a></li> 
                                    <li><a href="cart.html">Cart</a></li> 
                                    <li><a href="login.html">Login</a></li> 
                                </ul>
                            </li>  --}}
                    
                            {{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>  --}}
                            {{-- <li><a href="404.html">404</a></li> --}}
                        
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                    <form action="{{route('searchitem')}}" method="POST">
                            @csrf
                        <input type="text" name="name" placeholder="Product Name"/>
                        <button class="btn " type="submit" >Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

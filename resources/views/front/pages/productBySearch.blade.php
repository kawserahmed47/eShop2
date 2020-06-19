@extends('front.master')
@section('title')
{{$title}}
    
@endsection

@section('content')

	
<section id="advertisement">
    <div class="container">
    <img src="{{asset('public/front/images/shop/advertisement.jpg')}}" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
           
               @include('front.layouts.sidebar')
         
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Product By Search</h2>
                    
                    @if (!empty($products))
                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset($product->image)}}" alt="" />
                                        <h2>&#2547 {{$product->price}}</h2>
                                        <p>{{$product->name}}</p>
                                            <a href="{{route('productDetails',$product->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>&#2547 {{$product->price}}</h2>
                                                <p>{{$product->name}}</p>
                                            <a href="{{route('productDetails',$product->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="col-sm-4">
                            <h1>Not Found</h1>
                        </div>
                        
                       
                    @endif

                </div>
              
            </div>
        </div>
       
    </div>
</section>

    
@endsection
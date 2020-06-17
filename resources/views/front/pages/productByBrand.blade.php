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
                    <h2 class="title text-center">Product By Brand</h2>
                    @php
                    $products=DB::table('products')->where('brand_id', $brandslug->id)->get() 
                    @endphp 


                    
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
            {{-- <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    @php
                    $categories=DB::table('categories')->where('id', $product->category_id)->first() 
                    @endphp  
            
                <li><a href="{{route('productByCategory',$categories->slug)}}"><i class="fa fa-plus-square"></i>{{$categories->name}}</a></li>
                @php
                $brands=DB::table('brands')->where('id', $product->brand_id)->first() 
                @endphp 
            
                <li><a href="{{route('productByBrand',$brands->slug)}}"><i class="fa fa-plus-square"></i>{{$brands->name}}</a></li>
                </ul>
            </div> --}}
        </div>
    </div>

    @endforeach
    @else  

    <p>No product Avaiable</p>
        
    @endif

  

                </div>
                {{-- <ul class="pagination">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">&raquo;</a></li>
                </ul> --}}
            </div>
        </div>
        <div class="row">
            @include('front.layouts.recommended')
        </div>
    </div>
</section>

    
@endsection
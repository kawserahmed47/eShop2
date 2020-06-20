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
                            @php
                            $pic= json_decode($productDetails->image)
                             @endphp
                            <img src="{{ asset('/moreImg/'.$pic[0]) }}" alt="IMG" />
            
                            
                        </div>
                         <div id="similar-product" class="carousel slide" data-ride="carousel">
                            
                              <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @foreach (json_decode($productDetails->image) as $item)
                                        <a href=""><img src="{{ asset('/moreImg/'.$item) }}" style="height: 100px;width:100px" alt="IMG"></a>
                                        @endforeach
                                     
                                    </div>
                                    <div class="item">
                                        @foreach (json_decode($productDetails->image) as $item)
                                        <a href=""><img src="{{ asset('/moreImg/'.$item) }}" style="height: 100px;width:100px" alt="IMG"></a>
                                        @endforeach
                                    </div>
                                    <div class="item">
                                        @foreach (json_decode($productDetails->image) as $item)
                                        <a href=""><img src="{{ asset('/moreImg/'.$item) }}" style="height: 100px;width:100px" alt="IMG"></a>
                                        @endforeach
                                    </div>
                                    
                                </div>

                              <!-- Controls -->
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div> 

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="{{asset('public/front/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                            @if  (Session::get('pmessage'))
                            <p> <span class="text-danger" >{{ Session::get('pmessage')}} </span> <strong>{{ Session::get('pquantity')}} </strong>  </p>
                                
                            @endif
                            
                            <h2>{{$productDetails->name}}</h2>
                            <p>Product ID: {{$productDetails->product_code}}</p>
                            <img src="{{asset('public/front/fimages/product-details/rating.png')}}" alt="" />
                            <span>
                                <span>BDT {{$productDetails->price}} &#2547 </span>
                            <form action="{{route('insertCart',$productDetails->id)}}" method="post">
                                    @csrf
                                <label>Quantity:</label>
                        
                                <input type="text" name="quantity" value="1" />
                            
                                <button class="btn btn-fefault cart" type="submit" ><i class="fa fa-shopping-cart"></i>Add to cart </button>
                    
                            </form>
                              
                            </span>
                            @if ($productDetails->quantity>1)
                            <p><b>Availability:</b> In Stock</p>
                            @else 
                            <p><b>Availability:</b> Out of Stock</p>
                            @endif
                            @php
                            $categories=DB::table('categories')->where('id', $productDetails->category_id)->first() 
                            @endphp  
                            <p><b>Category:</b> {{$categories->name}}</p>
                            @php
                $brands=DB::table('brands')->where('id', $productDetails->brand_id)->first() 
                @endphp 
                            <p><b>Brand:</b> {{$brands->name}}</p>
                            {{-- <a href=""><img src="{{asset('public/front/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a> --}}
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#specification" data-toggle="tab">Specification</a></li>
                            <li><a href="#termscondition" data-toggle="tab">Terms & Condition</a></li>
                            <li ><a href="#policy" data-toggle="tab">Policy</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="description" >
                            <div class="col-sm-12">
                               
                            <p>{{$productDetails->description}}</p>
                                
                              
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="specification" >
                            <div class="col-sm-12">
                               
                                <p>{{$productDetails->specification}}</p>
                                
                              
                            </div>
                        
                        </div>
                        
                        <div class="tab-pane fade" id="termscondition" >
                            <div class="col-sm-12">
                               
                                <p>{{$productDetails->termns_conditions}}</p>
                                
                              
                            </div>
                        </div>
                        
                        <div class="tab-pane fade " id="policy" >
                            <div class="col-sm-12">
                               
                                <p>{{$productDetails->policy}}</p>
                                
                              
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
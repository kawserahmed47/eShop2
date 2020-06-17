<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                @if (!empty($recommends))
                @foreach ($recommends as $recommend)
                    	
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset($recommend->image)}}" alt="" />
                            <h2>&#2547 {{$recommend->price}}</h2>
                            <p>{{$recommend->name}}</p>
                                <a href="{{route('productDetails',$recommend->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach

                @else 
                <p>There are no products</p>
                    
                @endif
         
          
            </div>
            <div class="item">	
                @if (!empty($recommends))
                @foreach ($recommends as $recommend)
                    	
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset($recommend->image)}}" alt="" />
                            <h2>&#2547 {{$recommend->price}}</h2>
                            <p>{{$recommend->name}}</p>
                                <a href="{{route('productDetails',$recommend->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach

                @else 
                <p>There are no products</p>
                    
                @endif
            </div>
        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>			
    </div>
</div><!--/recommended_items-->

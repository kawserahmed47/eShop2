<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @if (!empty($tBrands))
            @foreach ($tBrands as $tbrand)
             <li><a href="{{route('productByBrand',$tbrand->slug)}}" >{{$tbrand->name}}</a></li>
            @endforeach

            @else  
            <p>No Data Available</p>    
            @endif
            
        
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tshirt" >
            @if (!empty($tProducts))
            @foreach ($tProducts as $tproduct)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset($tproduct->image)}}" alt="" />
                        <h2>&#2547 {{$tproduct->price}}</h2>
                            <p> {{$tproduct->name}}</p>
                            <a href="{{route('productDetails',$tproduct->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach

            @else  
            <p>No Data Available</p>    
            @endif
        </div>
        
     
    </div>
</div><!--/category-tab-->

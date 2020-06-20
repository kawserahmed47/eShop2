
    @if (!empty($products))
    @foreach ($products as $product)
        
    
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        @php
                        $pic= json_decode($product->image)
                         @endphp
                       
                        
                        <img src="{{ asset('/moreImg/'.$pic[0]) }}" alt="" />
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

  
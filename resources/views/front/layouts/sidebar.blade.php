<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
          
            @if(!empty($categories))
            @foreach($categories as $category )
            
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title"><a href="{{route('productByCategory',$category->slug)}}">{{$category->name}}</a></h4>
                </div>
            </div>
            @endforeach    
            @else 
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Empty Categories</a></h4>
                </div>
            </div>
            
            @endif
        </div><!--/category-products-->
    
        <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                   
                    @if(!empty($brands))
                  @foreach($brands as $brand)
                <li><a href="{{route('productByBrand',$brand->slug)}}"> <span class="pull-right"></span>{{$brand->name}}</a></li>
                    @endforeach

                    @else 
                    <li><a href="#"> <span class="pull-right"></span>Empty Brands </a></li>
                    
                    @endif
                </ul>
            </div>
        </div><!--/brands_products-->
        
        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->
        
        <div class="shipping text-center"><!--shipping-->
            <img src="{{asset('public/front/images/home/shipping.jpg')}}" alt="" />
        </div><!--/shipping-->
    
    </div>
</div>

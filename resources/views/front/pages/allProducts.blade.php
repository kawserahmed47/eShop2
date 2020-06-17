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
                    <h2 class="title text-center">All Products</h2>
           @include('front.layouts.features')
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
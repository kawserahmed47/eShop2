@extends('front.master')
@section('title')
{{$title}}
    
@endsection

@section('content')
	
<section>
    <div class="container">
        <div class="row">
            @include('front.layouts.sidebar')
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">About Us</h2>
                    <div class="single-blog-post">
                        <h3>Masud IT Shop</h3>
                        <div class="post-meta">
                            <p>Dogormura, CRP Road Savar,
                                Dhaka-1343, Bangladesh.</p>
                            {{-- <ul>
                                <li><i class="fa fa-user"></i> Mac Doe</li>
                                <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                            </ul>
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span> --}}
                        </div>
                        <a href="">
                            <img src="{{asset('public/front/images/blog/blog-one.jpg')}}" alt="">
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <br>

                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <br>

                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> <br>

                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                   
                    </div>
                </div><!--/blog-post-area-->

              
               
    
                
            </div>	
        </div>
        
    </div>
</section>

    
@endsection
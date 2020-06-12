<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1>MASUD <span>IT</span></h1>
                                <h2>Heading</h2>
                                <p>Sub Heading </p>
                            <a class="btn btn-primary" href="{{route('cart')}}">Get it now</a>
                              
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('public/front/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('public/front/images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>MASUD <span>IT</span></h1>
                                <h2>Heading</h2>
                                <p>Subheading </p>
                                <a class="btn btn-primary" href="{{route('cart')}}">Get it now</a>                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('public/front/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('public/front/images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>MASUD <span>IT</span></h1>
                                <h2>Heading</h2>
                                <p>Sub Heading </p>
                                <a class="btn btn-primary" href="{{route('cart')}}">Get it now</a>                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('public/front/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('public/front/images/home/pricing.png')}}" class="pricing" alt="" />
                            </div>
                        </div>
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->

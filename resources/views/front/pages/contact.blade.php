@extends('front.master')
@section('title')
{{$title}} 
@endsection
@section('content')
	 
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">    		
            <div class="col-sm-12">    			   			
                <h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
                <section id="advertisement">
                    <div class="container">
                    <img src="{{asset('public/front/images/shop/advertisement.jpg')}}" alt="" />
                    </div>
                </section>
            </div>			 		
        </div>    	
        <div class="row">  	
            <div class="col-sm-8">
              @include('front.layouts.contact')
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Contact Info</h2>
                    <address>
                        <p>MasudIT</p>
                        <p>Dogormura, CRP Road Savar,
                            Dhaka-1343, Bangladesh.</p>
                      
                        <p>Mobile: +88 01715 505 521</p>
                        {{-- <p>Fax: 1-714-252-0026</p> --}}
                        <p>Email: office@masudit.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/mitsavar.net/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            {{-- <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li> --}}
                            <li>
                                <a href="https://www.youtube.com/channel/UCaRqEsLDKXqeLmdKWoTUa3w" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    			
        </div>  
    </div>	
</div><!--/#contact-page-->

    
@endsection

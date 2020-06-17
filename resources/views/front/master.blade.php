<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title> @yield('title') | MasudIT</title>

     <link rel="icon" type="image/gif/png" href="{{asset('public/front/images/home/mi.jpg')}}"> 

    <link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/front/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/front/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/front/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/front/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/front/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('public/front/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/front/js/respond.min.js')}}"></script>
    <![endif]-->       
    {{-- <link rel="shortcut icon" href="{{asset('public/front/images/ico/favicon.ico')}}"> --}}
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/front/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/front/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/front/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/front/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>

    {{-- Header --}}
    @include('front.layouts.header')

    @yield('content')
    
    {{-- Footer --}}
    @include('front.layouts.footer')
  
    <script src="{{asset('public/front/js/jquery.js')}}"></script>
	<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/front/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/front/js/price-range.js')}}"></script>
    <script src="{{asset('public/front/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/front/js/main.js')}}"></script>
</body>
</html>
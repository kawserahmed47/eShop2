@extends('front.master')
@section('title')
{{$title}}    
@endsection

@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Customer Profile</h2>
<div class="container">
<div class="shopper-informations">
    
        @include('front.layouts.customerinfo')
      
  
</div>
</div>   
</div>
@endsection
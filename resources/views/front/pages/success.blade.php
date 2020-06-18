@extends('front.master')
@section('title')
{{$title}}
@endsection

@section('content')
<section id="advertisement">
    <div class="container">
    <img src="{{asset('public/front/images/shop/advertisement.jpg')}}" alt="Advertise" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            @include('front.layouts.sidebar')
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Order Successful</h2>
                </div>

                <div>
                    @if (Session::get('message'))
                    <p class="text-success text-center">{{ Session::get('message') }}</p>
                    @endif
                    <p class="text-center">Thanks for you Order. We will contact you soon</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@extends('front.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    
    {{-- Slider --}}
    @include('front.layouts.slider')

	<section>
		<div class="container">
			<div class="row">
                {{-- Sidebar --}}
                @include('front.layouts.sidebar')

				<div class="col-sm-9 padding-right">
                    {{-- Features Items --}}
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                    @include('front.layouts.features')
                    </div>
					
                    {{-- Top Products --}}
                    @include('front.layouts.topProducts')
                    {{-- Recommended Items --}}
                    @include('front.layouts.recommended')
				</div>
			</div>
		</div>
	</section>
@endsection
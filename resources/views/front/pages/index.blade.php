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
                    @include('front.layouts.features')
					
                    {{-- Top Products --}}
                    @include('front.layouts.topProducts')
                    {{-- Recommended Items --}}
                    @include('front.layouts.recommended')
				</div>
			</div>
		</div>
	</section>
@endsection
@extends('front.master')
@section('title')
{{$title}}
    
@endsection

@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Customer Login | Registration</h2>
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    @if (Session::get('message'))
                    <p class="text-primary text-center">{{ Session::get('message') }}</p>
                    @endif
                    <form action="{{route('customerLoginCheck')}}" method="POST" >
                      @csrf  
                        <input type="tel" name="mobile" placeholder="Mobile"/>
                        <input type="password" name="password" placeholder="Password" />
                        {{-- <span>
                            <input type="checkbox" class="checkbox"> 
                            Keep me signed in
                        </span> --}}
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    @if (Session::get('rmessage'))
                    <p class="text-primary text-center">{{ Session::get('rmessage') }}</p>
                    @endif
                    <form action="{{route('customerRegister')}}" method="POST">
                        @csrf
                        <input type="text" name="name" required placeholder="Name"/>
                        <input type="tel" name="mobile" required placeholder="Mobile"/>
                        <input type="password" name="password" required placeholder="Password"/>
                        <input type="password" name="conform_password" required placeholder="Confirm Password"/>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

</div>
    
@endsection
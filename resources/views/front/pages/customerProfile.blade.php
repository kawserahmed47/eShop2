@extends('front.master')
@section('title')
{{$title}}    
@endsection

@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Customer Profile</h2>
<div class="container">
<div class="shopper-informations">
    <div class="row">
        <div class="form-group">
            <div class="col-sm-1"></div>
        <div class="col-sm-5 clearfix">
            <div class="bill-to">
                <p>Billing Address</p>
                <form action="">
                <div class="form-one ">
                   
                        <input class="form-control" type="text" placeholder="First Name" value="Name Here"><br>
                        <input class="form-control" type="text" placeholder="First Name" value="Name Here"><br>
                        <input class="form-control" type="text" placeholder="Email*" value="Email here"><br>
                        <input class="form-control" type="phone" placeholder="Mobile*" value="Mobile1"><br>
                        <input class="form-control" type="phone" placeholder="Alternative Mobile" value="mobile2"><br>
                       
                    
                </div>
                <div class="form-two ">
                    
                        <input class="form-control" type="text" placeholder="Full Address*"value="Full Address"><br>
                        <input class="form-control" type="text" placeholder="Location" value="Location"><br>
                        <input class="form-control" type="text" placeholder="City" value="City"><br>
                        <input class="form-control" type="text" placeholder="Police Station*" value="Police Station"><br>
                        <input class="form-control" type="text" placeholder="District" value="District"><br>
                    
                </div>
                <ul>
                <li class="btn " style="background:rgb(255, 187, 0); width:180px"><a style="color: white" href="">Update Billing Address</a></li>
            </ul>
            </form>
              
            </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5 clearfix">
            <div class="shopper-info">
                
                <div class="bill-to">
                    <p>Profile Information</p>
                    <form action="" method="">
                    <div class="form-one ">
                    
                            <input class="form-control" type="text" placeholder="First Name" value="Name Here"><br>
                            <input class="form-control" type="text" placeholder="First Name" value="Email"><br>
                            <input class="form-control" type="phone" placeholder="Mobile" value="mobile2"><br>
                            <input class="form-control" type="text" placeholder="Change Password" ><br>
                            <input class="form-control" type="text" placeholder="Conform Password"><br>
                            <ul>
                                <li class="btn " style="background:rgb(255, 187, 0); width:180px"><a style="color: white" href="">Update Profile Info</a></li>
                            </ul>
                    
                    </div>
                </form>
                </div>
               
            </div>
        </div>
        {{-- <div class="col-sm-2"></div> --}}
    </div>
    			
    </div>
</div>
</div>   
</div>
@endsection
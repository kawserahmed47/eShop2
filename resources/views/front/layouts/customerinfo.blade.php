<div class="row">
    @if (!empty($shipping))
    <form action="{{route('updateShipping')}}" method="POST">
        @csrf
        <div class="form-group">
        <div class="col-sm-7 clearfix">
            <div class="bill-to">
                <p>Bill To</p>
                <div class="form-one ">
                    
                <input class="form-control" name="first_name" required type="text" placeholder="First Name*" value="{{$shipping->first_name}}"><br>
                    <input class="form-control" type="text" name="last_name" required  value="{{$shipping->last_name}}"  placeholder="Last Name*"><br>
                    <input class="form-control" type="text"value="{{$shipping->email}}"   name="email" placeholder="Email"><br>
                    <input class="form-control" type="phone" value="{{$shipping->contact_mobile}}"  name="contact_mobile" required placeholder="Mobile*"><br>
                    <input class="form-control" value="{{$shipping->alternative_mobile}}"  name="alternative_mobile"  type="phone" placeholder="Alternative Mobile"><br>
                   
               
                 </div>
                <div class="form-two ">
                        
                    <input class="form-control" name="address" required type="text" placeholder="Full Address*" value="{{$shipping->address}}" ><br>
                    <input class="form-control" type="text"value="{{$shipping->location}}" name="location" placeholder="Location"><br>
                    <input class="form-control" type="text"value="{{$shipping->city}}"  name="city" required placeholder="City*"><br>
                    <input class="form-control" type="text"value="{{$shipping->police_station}}"  name="police_station" required placeholder="Police Station*"><br>
                    <input class="form-control" name="district"value="{{$shipping->district}}"  required type="text" placeholder="District*"><br>
                
                </div>
              
            </div>
        </div>
        <div class="col-sm-1">
                
        </div>
        <div class="col-sm-4">
            <div class="shopper-info">
                <p>Shopper Information</p>
                <div  class="total_area" style="margin-left: -40px">
                <ul>
                    <li><label for="">Name:</label> <span>{{$customer->name}}</span></li>
                <li><label for="">Mobile:</label>  <span>{{$customer->mobile}}</span></li>
                    <li class="btn " style="background:rgb(255, 187, 0); width:180px"><a style="color: white" href="{{route('index')}}">Continue Shopping</a></li>
                    <li style="background:rgb(255, 187, 0);width:180px" class="btn p-5" > 
                        <button style="background:rgb(255, 187, 0);padding:2px;color:white;" type="submit" class="btn btn-outline-dark" >Update All Information</button>

                        </li>
                  
                </ul>
            </div>
               
            </div>
        </div>
        </div>
    </form>	
    @else 
<form action="{{route('insertShipping')}}" method="POST">

    @csrf
        <div class="form-group">
        <div class="col-sm-7 clearfix">
            <div class="bill-to">
                <p>Bill To</p>
                <div class="form-one ">
                    
                        <input class="form-control" name="first_name" required type="text" placeholder="First Name*"><br>
                        <input class="form-control" type="text" name="last_name" required  placeholder="Last Name*"><br>
                        <input class="form-control" type="text"  name="email" placeholder="Email"><br>
                        <input class="form-control" type="phone" name="contact_mobile" required placeholder="Mobile*"><br>
                        <input class="form-control"name="alternative_mobile"  type="phone" placeholder="Alternative Mobile"><br>
                       
                   
                </div>
                <div class="form-two ">
                    
                        <input class="form-control" name="address" required type="text" placeholder="Full Address*"><br>
                        <input class="form-control" type="text" name="location" placeholder="Location"><br>
                        <input class="form-control" type="text" name="city" required placeholder="City*"><br>
                        <input class="form-control" type="text" name="police_station" required placeholder="Police Station*"><br>
                        <input class="form-control" name="district" required type="text" placeholder="District*"><br>
                    
                </div>
              
            </div>
        </div>
         <div class="col-sm-1">
            {{-- <div class="order-message">
                <p>Shipping Order</p>
                <textarea class="form-control" style="height: 244px" name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                
            </div>	 --}}
        </div> 
        <div class="col-sm-4">
            <div class="shopper-info">
                <p>Shopper Information</p>
                <div  class="total_area" style="margin-left: -40px">
                <ul>
                    <li><label for="">Name:</label> <span>{{$customer->name}}</span></li>
                <li><label for="">Mobile:</label>  <span>{{$customer->mobile}}</span></li>
                    <li class="btn " style="background:rgb(255, 187, 0); width:180px"><a style="color: white" href="{{route('index')}}">Continue Shopping</a></li>
               <li style="background:rgb(255, 187, 0);width:180px" class="btn p-5" > 
               <button style="background:rgb(255, 187, 0);padding:2px;color:white;" type="submit" class="btn btn-outline-dark" >Update All Information</button>

               </li>
                  

                </ul>
            </div>
               
            </div>
        </div>
        </div>
    </form>	
        
    @endif
                  
</div>
<table class="table table-condensed">
    <thead>
        <tr class="cart_menu">
            <td class="image">Item</td>
            <td class="description"></td>
            <td class="price">Price</td>
            <td class="quantity">Quantity</td>
            <td class="total">Total</td>
            <td>Action
            <br> <a class="badge badge-danger" href="{{route('clearCart')}}">Clear All</a>
            </td>
        </tr>
    </thead>
    <tbody>
        @php
         $cartCollection = Cart::getContent();
        @endphp

        @if(!empty($cartCollection))
       
        @foreach ($cartCollection as $cart)
        <tr>
            <td class="cart_product">
                
                <a href=""><img style="height: 100px; width:100px" src="{{asset('/moreImg/'.$cart->attributes->image)}}" alt=""></a>
            </td>
            <td class="cart_description">
            <h4>{{$cart->name}}</h4>
                {{-- <p> ID: 1089772</p> --}}
            </td>
            <td class="cart_price">
            <p>&#2547 {{$cart->price}}</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                <form action="{{route('updateCart',$cart->id)}}" method="POST">
                      @csrf
                      <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart->quantity}}" autocomplete="off" size="2">
                      <button class="cart_quantity_down" > + </button>
                      

                  </form>
                   
                </div>
            </td>
            <td class="cart_total">
                @php
                 $summedPrice = Cart::get($cart->id)->getPriceSum();
                @endphp
                <p class="cart_total_price">&#2547 {{$summedPrice}} </p>
            </td>
            <td class="cart_delete">
                {{-- <a style="color: black"  class="btn" href="">Update</a> --}}

                <a style="color: black"  class="btn cart_quantity_delete" href="{{route('cartDelete',$cart->id)}}"><i class="fa fa-times"></i></a>
               

            </td>
        </tr>
        @endforeach
       
        @else 
        <tr>
            <td>
                <p>Empty Cart</p>
            </td>
        </tr> 
        @endif

    </tbody>
</table>
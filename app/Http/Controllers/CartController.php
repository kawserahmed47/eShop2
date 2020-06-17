<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function insertCart(Request $request, $id){
       $quantity = $request->quantity;
       $products= DB::table('products')->where('id',$id)->first();
       $data = array();
       $data['id']=$id;
       $data['name']=$products->name;
       $data['price']=$products->price;
       $data['quantity']=$quantity;
       $data['attributes']['image']=$products->image;

       \Cart::add($data);

       return redirect()->route('cart');
      

    }

    public function cart(){
        $data = array();
        $data['title']= "Cart";
        return view('front.pages.cart',$data);
        
    }

    public function cartDelete($id){
       \Cart::remove($id);
       return redirect()->route('cart');

    }

    public function updateCart(Request $request, $id){
        $quantity = $request->quantity;
        // $data= array();
        // $data['quantity']=$quantity;

        \Cart::update($id, array(
            'quantity' => $quantity, 
          ));

return redirect()->route('cart');

    }

    public function clearCart(){
        \Cart::clear();
        return redirect()->route('index');
    }

    public function checkout(){
        $data = array();
        $data['title']= "Checkout";
        return view('front.pages.checkout',$data);

    }
}

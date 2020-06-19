<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


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
        
      $id=  Auth::guard('customer')->id();
      $query = DB::table('customers')->where('id',$id)->first();
      $query2 = DB::table('shippings')->where('customer_id', $id)->first();


        $data = array();
        $data['title']= "Checkout";
        $data['shipping']=DB::table('shippings')->where('customer_id', $id)->first();
        $data['customer']=DB::table('customers')->where('id',$id)->first();
        return view('front.pages.checkout',$data);

    }

     public function insertShipping(Request $request){
        $id=  Auth::guard('customer')->id();
        $data= array();
        $time=time();             
        $data['customer_id']=$id;
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email'] = $request->email;
        $data['contact_mobile']=$request->contact_mobile ;
        $data['alternative_mobile']= $request->alternative_mobile;
        $data['address']=$request->address;
        $data['location']=$request->location;
        $data['city'] = $request->city;
        $data['police_station']=$request->police_station ;
        $data['district']=$request->district ;
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $result= DB::table('shippings')->insert($data);
        if($result){
            Session::flash('smessage', 'Shipping Inserted Successfully');
            return Redirect::route('checkout');
        }

     }

     public function updateShipping(Request $request){
        $id=  Auth::guard('customer')->id();
        $data= array();
        $time=time();             
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email'] = $request->email;
        $data['contact_mobile']=$request->contact_mobile ;
        $data['alternative_mobile']= $request->alternative_mobile;
        $data['address']=$request->address;
        $data['location']=$request->location;
        $data['city'] = $request->city;
        $data['police_station']=$request->police_station ;
        $data['district']=$request->district ;
        $data['updated_at']= date("Y-m-d H:i:s",$time);

        $result= DB::table('shippings')->where('customer_id',$id)->update($data);
        if($result){
            Session::flash('smessage', 'Shipping Updated Successfully');
            return Redirect::route('checkout');
        }

     }

     public function orderByCash(){
            $time=time();  

        $customer_id=  Auth::guard('customer')->id();
        $shipping= DB::table('shippings')->where('customer_id',$customer_id )->first();
        $shipping_id = $shipping->id;

         $payment = array();
         $payment['method'] = "Cash";
         $payment['amount'] = \Cart::getTotal();
         $payment['transaction_id'] = "None";
         $payment['status'] = 0;
         $payment['created_by'] =$customer_id;
         $payment['created_at'] = date("Y-m-d H:i:s",$time);

         $payment_id = DB::table('payments')->insertGetId($payment);

         $order = array();
         $order['shipping_id']=$shipping_id ;
         $order['payment_id']=$payment_id ;
         $order['status']=0;
         $order['created_by'] = $customer_id;
         $order['created_at'] = date("Y-m-d H:i:s",$time);

         $order_id = DB::table('orders')->insertGetId($order);

        $cartCollection = \Cart::getContent();
        $orderDetails = array();
         foreach($cartCollection as $cart){
             $orderDetails['order_id']= $order_id;
             $orderDetails['product_id']= $cart->id;
             $orderDetails['quantity']= $cart->quantity;
             $orderDetails['price']= $cart->price;
             $orderDetails['created_by'] =$customer_id;
            $orderDetails['created_at'] = date("Y-m-d H:i:s",$time);
            
            $pro = DB::table('products')->where('id',$cart->id)->first();
            if($pro->quantity >= $cart->quantity ){
                $nquantity = $pro->quantity - $cart->quantity;
                $result=  DB::table('order_infos')->insert($orderDetails);
                DB::table('products')->where('id', $cart->id)->update(array('quantity' => $nquantity));
                \Cart::remove($cart->id);
            }else{
                Session::flash('pmessage', 'Product Available only');
                Session::flash('pquantity', $pro->quantity );
                \Cart::remove($cart->id);
                return Redirect::route('productDetails',$pro->slug);

            }
           
         }
       

       if($result){
            \Cart::clear();
            Session::flash('message', 'Order Successfully');
            return Redirect::route('success');

       }else{
           print_r($orderDetails);
       }


        

     }


     

}

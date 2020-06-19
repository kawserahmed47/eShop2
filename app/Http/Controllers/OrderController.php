<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function viewOrders(){
        $data = array();
        $data['title']="View Messaage";
        $data['results']=DB::table('orders')->get();
        return view('back.pages.order.viewOrders',$data);

    }

    public function makeSuccess($id){
        $data= array();
        $time=time();
        $data['status']=1;
        $data['updated_by']=Auth::guard('admin')->id();
        $data['updated_at']= date("Y-m-d H:i:s",$time);
        $query = DB::table('orders')->where('id', $id)->first();
        DB::table('payments')->where('id',$query->payment_id)->update($data);
        $result= DB::table('orders')->where('id',$id)->update($data);
        if($result){
            Session::flash('omessage','Order Conform Successfully');
            return Redirect::route('viewOrders');
        }

    }
    public function deleteOrder($id){
        $result= DB::table('orders')->where('id',$id)->delete();
        if($result){
        Session::flash('message', 'Order Deleted  Successfully!!');
        return Redirect::route('viewOrders'); }

    }
    public function orderinfo($id){
        $data = array();
        $data['title']= "Order Information";
        $data['results']=DB::table('order_infos')->where('order_id',$id)->get();
        $query = DB::table('orders')->where('id',$id)->first();
        $shipping=$data['shipping']= DB::table('shippings')->where('id', $query->shipping_id)->first();
        $data['customer']=DB::table('customers')->where('id', $shipping->customer_id)->first();
        $data['payment']=DB::table('payments')->where('id',$query->payment_id)->first();
        return view('back.pages.order.viewOrderInfo',$data);
        
    }

}

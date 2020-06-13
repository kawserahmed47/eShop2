<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrders(){
        $data = array();
        $data['title']="View Messaage";
        $data['results']="";
        return view('back.pages.order.viewOrders',$data);

    }
}

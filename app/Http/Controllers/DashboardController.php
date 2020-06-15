<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __construct()
     {
         $this->middleware('admin');
     }
    public function dashboard(){
        $data = array();
        $data['title']="Dashboard";
        return view('back.pages.dashboard',$data);
    }

   
}

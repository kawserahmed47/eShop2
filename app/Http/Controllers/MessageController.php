<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function viewMessages(){
        $data = array();
        $data['title']="View Messaage";
        $data['results']="";
        return view('back.pages.message.viewMessages',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
        public function insertContact(Request $request){
            $data= array();
            $time=time();               
            $data['name']= $request->name;
            $data['email']=$request->email;
            $data['subject']=$request->subject;
            $data['message'] = $request->message;
            $data['created_at']= date("Y-m-d H:i:s",$time);

            $result = DB::table('contacts')->insert($data);
            if($result){
                Session::flash('message', 'Message Sent Successfully');
                return Redirect::route('contact');
            }


        }
}

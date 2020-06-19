<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function viewMessages(){
        $data = array();
        $data['title']="View Messaage";
        $data['results']=DB::table('contacts')->get();
        return view('back.pages.message.viewMessages',$data);
    }
    public function deleteMessage($id){
        $result= DB::table('contacts')->where('id',$id)->delete();
        if($result){
        Session::flash('message', 'Message Deleted  Successfully!!');
        return Redirect::route('viewMessages'); 
    
       }
    }
}

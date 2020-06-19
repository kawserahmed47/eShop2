<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(){
        // $details=[
        //     'title' => 'wetaitbd@gmail.com',
        //     'body'  => 'This is message'
        // ];
       // $details="this is detaisl mail";
       $details= array();
       $details['subject']="Subject";
       $details['from']="From this email";
       $details['name']="Name";
       $details['message']="Message";

      
        Mail::to('kawserahmed47@gmail.com')->send(new \App\Mail\SendMail($details));
      dd('send');
    }
}

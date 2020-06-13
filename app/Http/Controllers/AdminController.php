<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('back.pages.admin.adminLogin');
    }

    public function adminRegister(){
        return view('back.pages.admin.adminRegister');
    }

    public function viewAdmins(){
        $data = array();
        $data['title']="View Admins";
        $data['results']="";
        return view('back.pages.admin.viewAdmins',$data);
    }
}

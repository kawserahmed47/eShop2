<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
     {
         $this->middleware('admin');
     }
     
    public function addBrand(){
        $data = array();
        $data['title']="Add Brand";
        return view('back.pages.brand.addBrand',$data);
        
    }

    public function viewBrands(){
        $data = array();
        $data['title']="View Brand";
        $data['results']="";
        return view('back.pages.brand.viewBrands',$data);
        
    }

    public function editBrand(){
        $data = array();
        $data['title']="Edit Brand";
        $data['results']="";
        return view('back.pages.brand.editBrand',$data);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function addProduct(){
        $data = array();
        $data['title']="Add Product";
        $data['categories']="";
        $data['brands']="";
        return view('back.pages.product.addProduct',$data);
       }


       public function editProduct(){
        $data = array();
        $data['title']="Add Product";
        return view('back.pages.product.editProduct',$data);
       }

  
        public function viewProducts(){
            $data = array();
            $data['title']="View Product";
            return view('back.pages.product.viewProducts',$data);
           }
    
}

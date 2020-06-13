<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function addCategory(){
    $data = array();
    $data['title']="Add Category";
    return view('back.pages.category.addCategory',$data);
   }
   public function viewCategories(){
    $data = array();
    $data['title']="View Category";
    $data['results']="";
    return view('back.pages.category.viewCategories',$data);
   }
   public function editCategory(){
    $data = array();
    $data['title']="Edit Category";
    return view('back.pages.category.editCategory',$data);
   }

}

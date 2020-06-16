<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
   public function __construct()
   {
       $this->middleware('admin');
   }
   
   public function addCategory(){
    $data = array();
    $data['title']="Add Category";
    return view('back.pages.category.addCategory',$data);
   }

   public function insertCategory(Request $request){
        $slug = Str::slug($request->name);
        $query = DB::table('categories')->where('slug', $slug)->first();
    
        if(!$query){
            $data= array();
            $time=time();               
            $data['name']= $request->name;
            $data['description']=$request->description;
            $data['status']=$request->status;
            $data['slug'] = $slug;
            $data['created_by']= Session::get('email');
            $data['created_at']= date("Y-m-d H:i:s",$time);

            $result= DB::table('categories')->insert($data);
            if($result){
                Session::flash('message', 'Category Inserted Successfully');
                return Redirect::route('viewCategories');
            }
          


        }else{
            Session::flash('messsage','Category Must Be Unique');
            return Redirect::route('addCategory');
        }

   }



   public function viewCategories(){
    $data = array();
    $data['title']="View Category";
    $data['results']=DB::table('categories')->get();
    return view('back.pages.category.viewCategories',$data);
   }

   public function editCategory($id){
    $data = array();
    $data['title']="Edit Category";
    $data['results']=DB::table('categories')->where('id', $id)->first();
    return view('back.pages.category.editCategory',$data);
   }

   public function updateCategory(Request $request, $id){

    $query = DB::table('categories')->where('name', $request->name)->first();
    if(!$query){
        $slug = Str::slug($request->name);
        $query2 = DB::table('categories')->where('slug', $slug)->first();
        if(!$query2){
            $data= array();
            $time=time();               
            $data['name']= $request->name;
            $data['description']=$request->description;
            $data['slug']=$slug;
            $data['status']=$request->status;
            $data['updated_by']= Session::get('email');
            $data['updated_at']= date("Y-m-d H:i:s",$time);
            $result= DB::table('categories')->where('id',$id)->update($data);
            if($result){
                Session::flash('message','Category Updated With Name');
                return Redirect::route('viewCategories');       
            }

        }else{
            Session::flash('message','Category must be unique');
                return Redirect::route('editCategory',$id);  

        }
      
    }else{
        $data= array();
        $time=time();               
        $data['name']= $request->name;
        $data['description']=$request->description;
        $data['status']=$request->status;
        $data['updated_by']= Session::get('email');
        $data['updated_at']= date("Y-m-d H:i:s",$time);
        $result= DB::table('categories')->where('id',$id)->update($data);
        if($result){
            Session::flash('message','Category Updated');
            return Redirect::route('viewCategories');       
        }

    }

   



   }

   public function deleteCategory($id){
    $result= DB::table('categories')->where('id',$id)->delete();
    if($result){
    Session::flash('message', 'Category Deleted  Successfully!!');
    return Redirect::route('viewCategories'); }

   }

}

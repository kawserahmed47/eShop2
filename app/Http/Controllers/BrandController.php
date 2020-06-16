<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


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
    public function insertBrand(Request $request){
        $slug = Str::slug($request->name);
        $query = DB::table('brands')->where('slug', $slug)->first();
    
        if(!$query){
            $data= array();
            $time=time();
               
            $data['name']= $request->name;
            $data['description']=$request->description;
            $data['status']=$request->status;
            $data['slug'] = $slug;
            $data['created_by']= Session::get('email');
            $data['created_at']= date("Y-m-d H:i:s",$time);
        
            $image=$request->file('image');
        
                if($image){
                    $image_name=Str::random(12);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.".".$ext;
                    $upload_path='brandImg/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);
                    if($success){
                        $data['image']=$image_url;
                        DB::table('brands')->insert($data);
                        Session::flash('message', 'Brand Added Successfully!');
                        return Redirect::route('viewBrands');
                    }else{
                        Session::flash('message', 'Brand Insert Error!');
                        return Redirect::route('addBrand');
        
                    }
                }else{
                    DB::table('brands')->insert($data);
                    Session::flash('message', 'Brand Inserted Without Images');
                    return Redirect::route('viewBrands');
        
                }
        
        
    
        }else{
            Session::flash('message', 'Error !!! Brand must be unique !');
            return Redirect::route('addBrand');
    
    
    
        }
    
        
    }
    

    public function viewBrands(){
        $data = array();
        $data['title']="View Brand";
        $data['results']=DB::table('brands')->get();
        return view('back.pages.brand.viewBrands',$data);
        
    }

    public function editBrand($id){

        $data = array();
        $data['title']="Edit Brand";
        $data['results']=DB::table('brands')->where('id', $id)->first();
        return view('back.pages.brand.editBrand',$data);

    }
    public  function updateBrand(Request $request, $id){
        $data= array();
        $time=time();
        $data['name']= $request->name;
        $data['description']=$request->description;
        $data['status']=$request->status;
        $data['updated_by']= Session::get('email');
        $data['updated_at']= date("Y-m-d H:i:s",$time);
    
        $image=$request->file('image');
    
        if($image){
            $results = DB::table('brands')->where('id',$id)->first();
            if(!empty($results->image)){
                unlink($results->image);
            }
            
            $data['image']=$request->image;
            $image_name=Str::random(12);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='brandImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['image']=$image_url;
                DB::table('brands')->where('id',$id)->update($data);
                Session::flash('message', 'Brand Updated Successfully!');
                return Redirect::route('viewBrands');
            }else{
                Session::flash('message', 'Brand Updated Error!');
                return Redirect::route('editBrand',$id);
    
            }
        }else{
    
            DB::table('brands')->where('id',$id)->update($data);
            Session::flash('message', 'Brand Updated without image');
            return Redirect::route('viewBrands');
    
        }

        
    
    
    }

    public function deleteBrand($id){
            $results = DB::table('brands')->where('id',$id)->first();
            if(!empty($results->image)){
                unlink($results->image);
            }
           
                    $result= DB::table('brands')->where('id',$id)->delete();
                    if($result){
                    Session::flash('message', 'Brand Deleted  Successfully!!');
                    return Redirect::route('viewBrands'); }
          

    }
    
}

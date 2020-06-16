<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
        public function addProduct(){
        $data = array();
        $data['title']="Add Product";
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        return view('back.pages.product.addProduct',$data);
       }

       public function insertProduct(Request $request){
        $slug = Str::slug($request->name);
        $query = DB::table('products')->where('slug', $slug)->first();
        if(!$query){
        $data= array();
        $time=time(); 
        $data['product_code']= $request->product_code;
        $data['brand_id']=$request->brand_id;
        $data['category_id']=$request->category_id;
        $data['name']=$request->name;
        $data['slug']=$slug;
        $data['price']=$request->price;
        $data['quantity']=$request->quantity;
        $data['image']=$request->image;
        $data['status']=$request->status;
        $data['description']=$request->description;
        $data['specification']=$request->specification;
        $data['policy']=$request->policy;
        $data['termns_conditions']=$request->termns_conditions;
        $data['created_by']= Session::get('email');
        $data['created_at']= date("Y-m-d H:i:s",$time);
    
        $image=$request->file('image');
    
            if($image){
                $image_name=Str::random(12);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='productImg/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if($success){
                    $data['image']=$image_url;
                    DB::table('products')->insert($data);
                    Session::flash('message', 'Product Added Successfully!');
                    return Redirect::route('viewProducts');
                }else{
                    Session::flash('message', 'Product Insert Error!');
                    return Redirect::route('addProduct');
    
                }
            }else{
                    DB::table('products')->insert($data);
                    Session::flash('message', 'Product Added Without Image!');
                    return Redirect::route('viewProducts');

            }

        }else{
            $data= array();
            $time=time(); 
            $data['product_code']= $request->product_code;
            $data['brand_id']=$request->brand_id;
            $data['category_id']=$request->category_id;
            $data['name']=$request->name;
            $data['slug']=$slug.Str::random(6);
            $data['price']=$request->price;
            $data['quantity']=$request->quantity;
            $data['image']=$request->image;
            $data['status']=$request->status;
            $data['description']=$request->description;
            $data['specification']=$request->specification;
            $data['policy']=$request->policy;
            $data['termns_conditions']=$request->termns_conditions;
            $data['created_by']= Session::get('email');
            $data['created_at']= date("Y-m-d H:i:s",$time);
        
            $image=$request->file('image');
        
                if($image){
                    $image_name=Str::random(12);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.".".$ext;
                    $upload_path='productImg/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);
                    if($success){
                        $data['image']=$image_url;
                        DB::table('products')->insert($data);
                        Session::flash('message', 'Product Added Successfully!');
                        return Redirect::route('viewProducts');
                    }else{
                        Session::flash('message', 'Product Insert Error!');
                        return Redirect::route('addProduct');
        
                    }
                }else{
                        DB::table('products')->insert($data);
                        Session::flash('message', 'Product Added Without Image!');
                        return Redirect::route('viewProducts');
    
                }

        }

    }



       public function editProduct(){
        $data = array();
        $data['title']="Add Product";
        return view('back.pages.product.editProduct',$data);
       }

  
        public function viewProducts(){
            $data = array();
            $data['title']="View Product";
            $data['results']=DB::table('products')->get();
           
            return view('back.pages.product.viewProducts',$data);
           }
    
}

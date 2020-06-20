<?php

namespace App\Http\Controllers;

use App\Product;


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

        $this->validate($request, [
            'name'=>'required',
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,gif,png'
                ]);

                if($files=$request->file('image')){
                    foreach($files as $file){
                       
                    $name=$file->getClientOriginalName();
                    $file->move('moreImg',$name);
                    $data[]=$name;
                    }
                }
                // if($files=$request->file('image')){   
                //     $name=$file->getClientOriginalName();
                //     $file->move('productImg',$name);
                //     $image=$name;                
                // }

                $file= new Product();
                $file->image=json_encode($data);
               // $file->image= $image;
                $file->name=$request->name;
                $file->product_code=$request->product_code;
                $file->brand_id=$request->brand_id;
                $file->category_id=$request->category_id;
                $file->slug=$slug;
                $file->price=$request->price;
                $file->quantity=$request->quantity;
                $file->status=$request->status;
                $file->description=$request->description;
                $file->specification=$request->specification;
                $file->policy=$request->policy;
                $file->termns_conditions=$request->termns_conditions;
                $file->created_by=Session::get('email');
                $file->created_at= date("Y-m-d H:i:s",$time);
                $file->save();
                Session::flash('message', 'Product Added Successfully!');
                 return Redirect::route('viewProducts');
                
        // $data['product_code']= $request->product_code;
        // $data['brand_id']=$request->brand_id;
        // $data['category_id']=$request->category_id;
        // $data['name']=$request->name;
        // $data['slug']=$slug;
        // $data['price']=$request->price;
        // $data['quantity']=$request->quantity;
        // $data['image']=$request->image;
        // $data['status']=$request->status;
        // $data['description']=$request->description;
        // $data['specification']=$request->specification;
        // $data['policy']=$request->policy;
        // $data['termns_conditions']=$request->termns_conditions;
        // $data['created_by']= Session::get('email');
        // $data['created_at']= date("Y-m-d H:i:s",$time);
    
        // $image=$request->file('image');
    
        //     if($image){
        //         $image_name=Str::random(12);
        //         $ext=strtolower($image->getClientOriginalExtension());
        //         $image_full_name=$image_name.".".$ext;
        //         $upload_path='productImg/';
        //         $image_url=$upload_path.$image_full_name;
        //         $success=$image->move($upload_path,$image_full_name);
        //         if($success){
        //             $data['image']=$image_url;
        //             DB::table('products')->insert($data);
        //             Session::flash('message', 'Product Added Successfully!');
        //             return Redirect::route('viewProducts');
        //         }else{
        //             Session::flash('message', 'Product Insert Error!');
        //             return Redirect::route('addProduct');
    
        //         }
        //     }else{
        //             DB::table('products')->insert($data);
        //             Session::flash('message', 'Product Added Without Image!');
        //             return Redirect::route('viewProducts');

        //     }

        }else{
            $data= array();
            $time=time(); 
    
            $this->validate($request, [
                'name'=>'required',
                'image' => 'required',
                'image.*' => 'mimes:jpeg,jpg,gif,png'
                    ]);
    
                    if($files=$request->file('image')){
                        foreach($files as $file){
                            $name=$file->getClientOriginalName();
                            $file->move('moreImg',$name);
                            $data[]=$name;
                        }
                    }
                    // if($files=$request->file('image')){   
                    //     $name=$file->getClientOriginalName();
                    //     $file->move('productImg',$name);
                    //     $image=$name;                
                    // }
    
                    // $file= new Product();
                    $datass= array();
                    $datass['image']=json_encode($data);
                    // $datass['image']= $image;
                    $datass['name']=$request->name;
                    $datass['product_code']=$request->product_code;
                    $datass['brand_id']=$request->brand_id;
                    $datass['category_id']=$request->category_id;
                    $datass['slug']=$slug;
                    $datass['price']=$request->price;
                    $datass['quantity']=$request->quantity;
                    $datass['status']=$request->status;
                    $datass['description']=$request->description;
                    $datass['specification']=$request->specification;
                    $datass['policy']=$request->policy;
                    $datass['termns_conditions']=$request->termns_conditions;
                    $datass['created_by']=Session::get('email');
                    $datass['created_at']= date("Y-m-d H:i:s",$time);
                    // $file->save();
                    DB::table('products')->insert($datass);
                    Session::flash('message', 'Product Added Successfully!');
                     return Redirect::route('viewProducts');
                    
            // $data= array();
            // $time=time(); 
            // $data['product_code']= $request->product_code;
            // $data['brand_id']=$request->brand_id;
            // $data['category_id']=$request->category_id;
            // $data['name']=$request->name;
            // $data['slug']=$slug.Str::random(6);
            // $data['price']=$request->price;
            // $data['quantity']=$request->quantity;
            // $data['image']=$request->image;
            // $data['status']=$request->status;
            // $data['description']=$request->description;
            // $data['specification']=$request->specification;
            // $data['policy']=$request->policy;
            // $data['termns_conditions']=$request->termns_conditions;
            // $data['created_by']= Session::get('email');
            // $data['created_at']= date("Y-m-d H:i:s",$time);
        
            // $image=$request->file('image');
        
            //     if($image){
            //         $image_name=Str::random(12);
            //         $ext=strtolower($image->getClientOriginalExtension());
            //         $image_full_name=$image_name.".".$ext;
            //         $upload_path='productImg/';
            //         $image_url=$upload_path.$image_full_name;
            //         $success=$image->move($upload_path,$image_full_name);
            //         if($success){
            //             $data['image']=$image_url;
            //             DB::table('products')->insert($data);
            //             Session::flash('message', 'Product Added Successfully!');
            //             return Redirect::route('viewProducts');
            //         }else{
            //             Session::flash('message', 'Product Insert Error!');
            //             return Redirect::route('addProduct');
        
            //         }
            //     }else{
            //             DB::table('products')->insert($data);
            //             Session::flash('message', 'Product Added Without Image!');
            //             return Redirect::route('viewProducts');
    
            //     }

        }

    }



       public function editProduct($id){
        $data = array();
        $data['title']="Add Product";
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['result']=DB::table('products')->where('id', $id)->first();
        return view('back.pages.product.editProduct',$data);
        
       }

       public function updateProduct(Request $request, $id){
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
        $data['status']=$request->status;
        $data['description']=$request->description;
        $data['specification']=$request->specification;
        $data['policy']=$request->policy;
        $data['termns_conditions']=$request->termns_conditions;
        $data['updated_by']= Session::get('email');
        $data['updated_at']= date("Y-m-d H:i:s",$time);

        DB::table('products')->where('id',$id)->update($data);
        Session::flash('message', 'Product Updated !');
        return Redirect::route('viewProducts');
    
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
            $data['status']=$request->status;
            $data['description']=$request->description;
            $data['specification']=$request->specification;
            $data['policy']=$request->policy;
            $data['termns_conditions']=$request->termns_conditions;
            $data['created_by']= Session::get('email');
            $data['created_at']= date("Y-m-d H:i:s",$time);
            DB::table('products')->where('id',$id)->update($data);
            Session::flash('message', 'Product Updated!');
            return Redirect::route('viewProducts');
            

        }

       }

  
        public function viewProducts(){
            $data = array();
            $data['title']="View Product";
            $result= $data['results']=DB::table('products')->get();
        //    // print_r($data);
        //    $pic =json_decode($result->image);
        //    print_r($pic[0]);
             return view('back.pages.product.viewProducts',$data);
           }

           public function deleteProduct($id){
            $results = DB::table('products')->where('id',$id)->first();
            if(!empty($results->image)){
                // unlink($results->image);
            }
           
                    $result= DB::table('products')->where('id',$id)->delete();
                    if($result){
                    Session::flash('message', 'Product Deleted  Successfully!!');
                    return Redirect::route('viewProducts'); }
          

           }
    
}

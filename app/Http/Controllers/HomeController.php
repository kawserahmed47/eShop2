<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title']= "Home";
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['tBrands']= DB::table('brands')->orderByRaw('updated_at - created_at DESC')->take(5)
        ->get();
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['sliders']=DB::table('sliders')->where('status',1)->orWhere('status', 3)->get();
        $data['products']= DB::table('products')->orderByRaw('updated_at - created_at DESC')->take(8)
        ->get();
        $data['tProducts']=DB::table('products')->where('status', 3)->get();
        $data['recommends']=Product::all()->random(3);

        return view('front.pages.index',$data);
    }

    public function about(){
        $data = array();
        $data['title']= "About";
        return view('front.pages.about',$data);

    }
    public function contact(){
        $data = array();
        $data['title']= "Contact";
        return view('front.pages.contact',$data);

    }
   
    public function allProducts(){
        $data = array();
        $data['title']= "All Products";
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['tBrands']= DB::table('brands')->orderByRaw('updated_at - created_at DESC')->take(5)
        ->get();
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['products']= DB::table('products')->orderByRaw('updated_at - created_at DESC')->take(8)
        ->get();
        $data['tProducts']=DB::table('products')->where('status', 3)->get();
        $data['recommends']=Product::all()->random(3);
        return view('front.pages.allProducts',$data);

    }

    public function productDetails($slug){
        $data = array();
        $data['title']= "Product Details";
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['recommends']=Product::all()->random(3);
        $data['productDetails']=DB::table('products')->where('slug',$slug)->first();

        return view('front.pages.productDetails',$data);


    }
    public function productByCategory($slug){
        $data = array();
        $data['title']= "Product By Category";
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['tBrands']= DB::table('brands')->orderByRaw('updated_at - created_at DESC')->take(5)
        ->get();
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['tProducts']=DB::table('products')->where('status', 3)->get();
        $data['recommends']=Product::all()->random(3);
        $data['categoryslug']=DB::table('categories')->where('slug', $slug)->first();
        return view('front.pages.productByCategory',$data);

    }
    public function productByBrand($slug){
        $data = array();
        $data['title']= "Product By Brand";
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        $data['recommends']=Product::all()->random(3);
        $data['brandslug']=DB::table('brands')->where('slug', $slug)->first();
        return view('front.pages.productByBrand',$data);

    }

    public function success(){
        $data = array();
        $data['title']= "Success";
        $data['brands']=DB::table('brands')->where('status', 1)->get();
        $data['categories']=DB::table('categories')->where('status', 1)->get();
        return view('front.pages.success',$data);
    }

  
}

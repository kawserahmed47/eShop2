<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title']= "Home";
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
    public function cart(){
        $data = array();
        $data['title']= "Cart";
        return view('front.pages.cart',$data);
        
    }
    public function checkout(){
        $data = array();
        $data['title']= "Checkout";
        return view('front.pages.checkout',$data);

    }
    public function allProducts(){
        $data = array();
        $data['title']= "All Products";
        return view('front.pages.allProducts',$data);

    }

    public function productDetails(){
        $data = array();
        $data['title']= "Product Details";
        return view('front.pages.productByCategory',$data);


    }
    public function productByCategory(){
        $data = array();
        $data['title']= "Product By Category";
        return view('front.pages.productByCategory',$data);

    }
    public function productByBrand(){
        $data = array();
        $data['title']= "Product By Brand";
        return view('front.pages.productByBrand',$data);

    }

    public function customerLogin(){
        $data = array();
        $data['title']= "Customer Login";
        return view('front.pages.customerLogin',$data);

    }
}

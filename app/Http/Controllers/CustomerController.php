<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerLogin(){
        $data = array();
        $data['title']= "Customer Login";
        return view('front.pages.customerLogin',$data);

    }

    public function customerLoginCheck(Request $request){
        $mobile = $request->mobile;
        $query= DB::table('customers')->where('mobile', $mobile)->first();
        $password = $request->password;

        if($query){
  
            if (Hash::check($password, $query->password)) {
                Session::put('customerLogin',TRUE);
                Session::put('cname',$query->name);
                Session::put('cmobile',$query->mobile);
                Session::put('cstatus',$query->status);
               // Session::flash('message', 'Login Successfully!!');
               
                    if(Auth::guard('customer')->attempt(['mobile' => $mobile, 'password' => $password]))
                    {
                        Session::flash('message', 'Authenticating Login Successfull');
                        return redirect()->route('checkout');
                    }
                        else{
                            Session::flash('message', 'Authorization not found');
                            return redirect()->route('customerLogin');
                        }
            }else{
                Session::flash('message', 'Password Does not match!!');
                return redirect()->route('customerLogin');

            }

    }else{
        Session::flash('message', 'Number Not Found!!');
        return redirect()->route('customerLogin');
    }

    }

    public function customerRegister(Request $request){
        $mobile = $request->mobile;
        $query = DB::table('customers')->where('mobile', $mobile)->first();
        if($query){
            Session::flash('rmessage','This number alreay registered!!!');
            return redirect()->route('customerLogin');

        }else{
        $time=time();
        $data=array();
        $data['name']= $request->name;
        $data['mobile']=$mobile;
        $data['username']=Str::slug($request->name).Str::random(6);
        $password = $data['password']= Hash::make($request->password);
        $conform_password = $request->conform_password;
        $data['status']=1;
        $data['created_at']= date("Y-m-d H:i:s",$time);
        
        if (Hash::check($conform_password, $password)) {
            $result= DB::table('customers')->insert($data);
                if($result==TRUE){
                    Session::flash('rmessage','Registration Successfull!!!');
                    return redirect()->route('customerLogin');
                
                }else{
                    Session::flash('rmessage','Data is not inserted');
                    return redirect()->route('customerLogin');
                }
        

        }else{
            Session::flash('rmessage','Password Doses not Match');
            return redirect()->route('customerLogin');
        }

    }

    }

    public function customerLogout(){
        Auth::guard('customer')->logout();
        Session::put('customerLogin',FALSE);
        Session::put('cname',NULL);
        Session::put('cmobile',NULL);
        Session::put('cstatus',NULL);
        Session::flash('message', 'Log out Successfully');
        
        return redirect()->route('customerLogin');

    }

    public function customerProfile($id){
        $id=  Auth::guard('customer')->id();
        $query = DB::table('customers')->where('id',$id)->first();
        $query2 = DB::table('shippings')->where('customer_id', $id)->first();
  
  
          $data = array();
          $data['title']= "Customer Profile";
          $data['shipping']=DB::table('shippings')->where('customer_id', $id)->first();
          $data['customer']=DB::table('customers')->where('id',$id)->first();
          return view('front.pages.customerProfile',$data);
  
        

    }
}

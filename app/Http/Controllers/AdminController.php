<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function adminLogin(){
        
        return view('back.pages.admin.adminLogin');
    }

    public function loginCheck(Request $request){

        $email = $request->email;
        $query= DB::table('admins')->where('email', $email)->first();
        $password = $request->password;

        if($query){
  
            if (Hash::check($password, $query->password)) {
                Session::put('adminLogin',TRUE);
                Session::put('name',$query->name);
                Session::put('email',$query->email);
                Session::put('role',$query->status);
               // Session::flash('message', 'Login Successfully!!');
               
                    if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]))
                    {
                        Session::flash('message', 'Authenticating Login Successfull');
                        return redirect()->route('dashboard');
                    }
                        else{
                            Session::flash('message', 'Authorization not found');
                            return redirect()->route('adminLogin');
                        }
            }else{
                Session::flash('message', 'Password Does not match!!');
                return redirect()->route('adminLogin');

            }

    }else{
        Session::flash('message', 'Email Not Found!!');
        return redirect()->route('adminLogin');
    }

    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        Session::put('adminLogin',FALSE);
        Session::put('name',NULL);
        Session::put('email',NULL);
        Session::put('status',NULL);
        Session::flash('message', 'Log out Successfully');
        
        return redirect()->route('adminLogin');
    }

    public function adminRegister(){
        return view('back.pages.admin.adminRegister');
    }

    public function registerAdmin(Request $request){
        $time=time();
        $data=array();
        $data['name']= $request->name;
        $data['email']=$request->email;
        $data['username']=Str::slug($request->name).Str::random(6);
        $password = $data['password']= Hash::make($request->password);
        $conform_password = $request->conform_password;
        $data['status']=$request->status;
        $data['created_at']= date("Y-m-d H:i:s",$time);
        
        if (Hash::check($conform_password, $password)) {
            $result= DB::table('admins')->insert($data);
                if($result==TRUE){
                    Session::flash('message','Registration Successfull!!!');
                    return redirect()->route('adminLogin');
                
                }else{
                    Session::flash('message','Data is not inserted');
                    return redirect()->route('adminRegister');
                }
        

        }else{
            Session::flash('message','Password Doses not Match');
            return redirect()->route('adminRegister');
        }
    }

    public function viewAdmins(){
        $data = array();
        $data['title']="View Admins";
        $data['results']="";
        return view('back.pages.admin.viewAdmins',$data);
    }
}

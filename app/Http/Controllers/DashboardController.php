<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Contact;
use App\Customer;
use App\Order;
use App\Product;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class DashboardController extends Controller
{
     public function __construct()
     {
         $this->middleware('admin');
     }
    public function dashboard(){
        $data = array();
        $data['title']="Dashboard";
        $data['cProducts']=Product::all()->count();
        $data['cOrders']=Order::all()->count();
        $data['cCustomers']=Customer::all()->count();
        $data['cContact']=Contact::all()->count();
        return view('back.pages.dashboard',$data);
    }

    public function viewAdmins(){
        $data = array();
        $data['title']="Dashboard";
        $data['results']=Admin::all();
        return view('back.pages.admin.viewAdmins',$data);

    }
    public function editAdmin($id){
        $data = array();
        $data['title']="Edit Admin";
        $data['results']=DB::table('admins')->where('id',$id)->first();
        return view('back.pages.admin.editAdmin',$data);


    }

    public function adminUpdate(Request $request, $id){
        $pass = $request->password;
        if(!empty($pass)){
            $time=time();
            $data=array();
            $data['name']= $request->name;
            $password = $data['password']= Hash::make($request->password);
            $conform_password = $request->conform_password;
            $data['status']=$request->status;
            $data['updated_at']= date("Y-m-d H:i:s",$time);
            
            if (Hash::check($conform_password, $password)) {
                $result= DB::table('admins')->where('id',$id)->update($data);
                    if($result==TRUE){
                        Session::flash('message','Update Successfull!!!');
                        return redirect()->route('viewAdmins');
                    
                    }else{
                        Session::flash('message','Data is not inserted');
                        return redirect()->route('editAdmin',$id);
                    }
            
    
            }else{
                Session::flash('message','Password Doses not Match');
                return redirect()->route('editAdmin',$id);
            }

        }else{
            $time=time();
            $data=array();
            $data['name']= $request->name;
            $data['status']=$request->status;
            $data['updated_at']= date("Y-m-d H:i:s",$time);
            $result= DB::table('admins')->where('id',$id)->update($data);
            Session::flash('message','Update Successfull!!!');
            return redirect()->route('viewAdmins');
        }
       
    }

    public function deleteAdmin($id){
        $result= DB::table('admins')->where('id',$id)->delete();
        if($result){
        Session::flash('message', 'Admin Deleted  Successfully!!');
        return Redirect::route('viewAdmins'); }
    
       

    }

   
}

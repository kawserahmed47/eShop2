<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function addSlider(){
        $data = array();
        $data['title'] ="Add Slider";
        return view('back.pages.slider.addSlider',$data);
    }
    public function insertSlider(Request $request){
        $data= array();
        $time=time();     
        $data['title']= $request->title;
        $data['subtitle']=$request->subtitle;
        $data['status']=$request->status;
        $data['created_by']= Session::get('email');
        $data['created_at']= date("Y-m-d H:i:s",$time);
    
        $image=$request->file('image');
    
            if($image){
                $image_name=Str::random(12);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='slideImg/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if($success){
                    $data['image']=$image_url;
                    DB::table('sliders')->insert($data);
                    Session::flash('message', 'Slider Added Successfully!');
                    return Redirect::route('viewSliders');
                }else{
                    Session::flash('message', 'Brand Insert Error!');
                    return Redirect::route('addSlider');
    
                }
            }else{
                    DB::table('sliders')->insert($data);
                    Session::flash('message', 'Slider Added Without Image!');
                    return Redirect::route('viewSliders');

            }

    }

    public function editSlider($id){
        $data = array();
        $data['title'] ="Edit Slider";
        $data['results']=DB::table('sliders')->where('id', $id)->first();
        return view('back.pages.slider.editSlider',$data);

    }
    public function viewSliders(){
        $data = array();
        $data['title'] ="View Slider";
        $data['results']=DB::table('sliders')->get();
        return view('back.pages.slider.viewSliders',$data);
        
    }

    public function updateSlider(Request $request, $id){
        $data= array();
        $time=time();
        $data['title']= $request->title;
        $data['subtitle']=$request->subtitle;
        $data['status']=$request->status;
        $data['updated_by']= Session::get('email');
        $data['updated_at']= date("Y-m-d H:i:s",$time);
    
        $image=$request->file('image');
    
        if($image){
            $results = DB::table('sliders')->where('id',$id)->first();
            if(!empty($results->image)){
                unlink($results->image);
            }
            
            $data['image']=$request->image;
            $image_name=Str::random(12);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='slideImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['image']=$image_url;
                DB::table('sliders')->where('id',$id)->update($data);
                Session::flash('message', 'Slider Updated Successfully!');
                return Redirect::route('viewSliders');
            }else{
                Session::flash('message', 'Slider Updated Error!');
                return Redirect::route('editSlider',$id);
    
            }
        }else{
    
            DB::table('sliders')->where('id',$id)->update($data);
            Session::flash('message', 'Slider Updated without image');
            return Redirect::route('viewSliders');
    
        }

        
    
    }

    public function deleteSlider($id){
        $results = DB::table('sliders')->where('id',$id)->first();
            if(!empty($results->image)){
                unlink($results->image);
            }
           
                    $result= DB::table('sliders')->where('id',$id)->delete();
                    if($result){
                    Session::flash('message', 'Slide Deleted  Successfully!!');
                    return Redirect::route('viewSliders'); }
    }
}

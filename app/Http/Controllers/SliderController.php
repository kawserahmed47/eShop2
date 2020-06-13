<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){
        $data = array();
        $data['title'] ="Add Slider";
        return view('back.pages.slider.addSlider',$data);
    }

    public function editSlider(){
        $data = array();
        $data['title'] ="Edit Slider";
        return view('back.pages.slider.editSlider',$data);

    }
    public function viewSliders(){
        $data = array();
        $data['title'] ="View Slider";
        $data['results']="";
        return view('back.pages.slider.viewSliders',$data);
        
    }
}

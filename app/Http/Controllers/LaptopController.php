<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function getInfo(){
        return $this->get_json('info');
    }
    public function getBrand(){
        $row = $this->get_json('logo');
        unset($row[-1]);
        return $row;
        //return response()->json($row);
    }
    public function getBanner(){
        $row = $this->get_json('banner');
        return $row;
        //return response()->json($row);
    }
    public function getSlider(){
        $row = $this->get_json('slide');
        unset($row[-1]);
        return $row;
        //return response()->json($row);
    }
    public function index(){
        $row_brand = $this->getBrand();
        $row_banner = $this->getBanner();
        $row_slider = $this->getSlider();
        return view('index',[
            'row_brand'=>$row_brand,
            'row_banner'=>$row_banner,
            'row_slider'=>$row_slider,
            'title'=>'',
            'keywords'=>'',
            'description'=>''
        ]);
    }
}

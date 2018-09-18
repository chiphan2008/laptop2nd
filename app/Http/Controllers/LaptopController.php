<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaptopController extends Controller
{
    public function getInfo(){
        return $this->get_json('info');
    }
    public function selectCat($id=0){
    	$menu = DB::table('category')
					->select('name','idcat','alias')
          ->where(['idcha'=>$id,'anhien'=>1])
					->orderBy('thutu','asc')->orderBy('name','asc')
					->get();
		  return $menu;
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
    public function getContact(){
        $row = $this->get_json('map');
        return view('contact',compact('row'));
    }
    public function index(){
        $row_brand = $this->getBrand();
        $row_banner = $this->getBanner();
        $row_slider = $this->getSlider();
        $row_new_product = DB::table('product')
        ->select('idsp','tensp','giaban','gianhap','urlhinh')
        ->orderBy('idsp','desc')->limit(8)->get();
        $row_selling_product = DB::table('product')
        ->select('idsp','tensp','giaban','gianhap','urlhinh')
        ->orderBy('solanban','desc')->limit(12)->get();
        $row_view_product = DB::table('product')
        ->select('idsp','tensp','giaban','gianhap','urlhinh')
        ->orderBy('solanxem','desc')->limit(12)->get();
        $row_highlight_product = DB::table('product')
        ->select('idsp','tensp','giaban','gianhap','urlhinh')
        ->where(['noibat'=>1])->orderBy('thutu','desc')
        ->limit(12)->get();
        return view('index',[
            'row_brand'=>$row_brand,
            'row_banner'=>$row_banner,
            'row_slider'=>$row_slider,
            'row_new_product'=>$row_new_product,
            'row_selling_product'=>$row_selling_product,
            'row_view_product'=>$row_view_product,
            'row_highlight_product'=>$row_highlight_product,
            'title'=>'','keywords'=>'','description'=>''
        ]);
    }
}

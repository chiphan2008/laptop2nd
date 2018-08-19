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
        return response()->json($row);
    }
    public function index(){
        return view('index',[
            'title'=>'',
            'keywords'=>'',
            'description'=>''
        ]);
    }
}

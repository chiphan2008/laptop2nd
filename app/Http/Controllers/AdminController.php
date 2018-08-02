<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    //Hinh anh
    public function getSlide()
    {
        $rs_slide = $this->get_json('slide');
        unset($rs_slide[-1]);
        return view('admin.slide',[
          'rs_slide'=>$rs_slide
        ]);
    }
    public function postSlide()
    {
        $rs_slide = $this->get_json('slide');
        unset($rs_slide[-1]);
        return view('admin.slide',[
          'rs_slide'=>$rs_slide
        ]);
    }
    public function getLogo()
    {
        $rs_logo = $this->get_json('logo');
        unset($rs_logo[-1]);
        return view('admin.logo',[
          'rs_logo'=>$rs_logo
        ]);
    }
    public function postLogo(Request $request){
      	$row = $this->get_json('logo');
        //print_r($request->input('chon'));exit;
      	if(!empty($request->input('chon'))){
        		foreach ($request->input('chon') as $v) {
    	    		$stt = $v-1;
              if(array_key_exists($stt,$row)){
                $rs = $row[$stt];
                if(is_file('./images/logo/'.$rs['urlhinh']))
            			unlink('./images/logo/'.$rs['urlhinh']);
          		  unset($row[$stt]);

              }
    	    	}
            if(count($row)==1) $row[-1] = array("kid"=>"0");
            $this->put_json('logo',$row);
      	}
      	return back();
    }
    public function deleteLogo($id){
      	$row = $this->get_json('logo');
        $stt = $id-1;
        if(array_key_exists($stt,$row)){
          $rs = $row[$stt];
          if(is_file('./images/logo/'.$rs['urlhinh']))
      			unlink('./images/logo/'.$rs['urlhinh']);
    		  unset($row[$stt]);
        	if(count($row)==1) $row[-1] = array("kid"=>"0");
    		  $this->put_json('logo',$row);
        }
		    return back()->with('success',"Đã xóa thành công.");
    }
    //news
    public function getNews()
    {
        return view('admin.news');
    }

    public function getNewsForm(Request $request)
    {
        return view('admin.newsForm',['id'=>$request->id]);
    }
    public function postNewsForm(Request $request)
    {
        //var_dump($request->tieude);
        return view('admin.news');
    }

    public function getDelNews($id=0)
    {
        return view('admin.news');
    }
}

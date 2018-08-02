<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
    //Hinh slide
    public function getSlide()
    {
        $rs_slide = $this->get_json('slide');
        unset($rs_slide[-1]);
        return view('admin.slide',[
          'rs_slide'=>$rs_slide
        ]);
    }
    public function postSlide(Request $request)
    {
      $row = $this->get_json('slide');
      if(!empty($request->input('chon'))){
          foreach ($request->input('chon') as $v) {
            $stt = $v-1;
            if(array_key_exists($stt,$row)){
              $rs = $row[$stt];
              if(is_file('./images/slider/'.$rs['urlhinh']))
                unlink('./images/slider/'.$rs['urlhinh']);
              unset($row[$stt]);
            }
          }
          if(count($row)==1) $row[-1] = array("kid"=>"0");
          $this->put_json('slide',$row);
      }
      return redirect()->route('slide');
    }
    public function deleteSlide($id){
      	$row = $this->get_json('slide');
        $stt = $id-1;
        if(array_key_exists($stt,$row)){
          $rs = $row[$stt];
          if(is_file('./images/slider/'.$rs['urlhinh']))
      			unlink('./images/slider/'.$rs['urlhinh']);
    		  unset($row[$stt]);
        	if(count($row)==1) $row[-1] = array("kid"=>"0");
    		  $this->put_json('slide',$row);
        }
		    return redirect()->route('slide');
    }
    public function getSlideForm(Request $request)
    {
        $id = round($request->id);
        $row = [];
        if($id>0){
          $row = $this->get_json('slide');
          $row = $row[$id-1];
        }
        return view('admin.slideForm',['id'=>$id,'row'=>$row ]);
    }
    public function postSlideForm(Request $request)
    {
        $row = $this->get_json('slide');
        $stt = $row[-1]['kid'];
        $data['id'] = $stt + 1;
        $id = round($request->id);
        $filename = '';

        if($request->hasFile('urlhinh')){
          $file = $request->file('urlhinh');
          $filename = time().'_'.$this->rname_url_hinh($file->getClientOriginalName());
          $img = Image::make($file->getRealPath())->resize('200','200');
          $img->save('./images/slider/'.$filename);
        }

        $data['ten'] = $request->input('ten');
        $data['link'] = $request->input('link');
        $data['urlhinh'] = $filename;
        $data['anhien'] = round($request->input('anhien'));

        if($id>0){
          // update slide
          $data['id'] = $id;
          $rs = $row[$id-1];
          if($filename!=''){
            if(is_file('./images/slider/'.$rs['urlhinh']))
            unlink('./images/slider/'.$rs['urlhinh']);
          }else {
            $data['urlhinh'] = $rs['urlhinh'];
          }
          $row[$id-1] = $data;
        }else {
          $row[-1]['kid'] = $data['id'];
          $row[$stt] = $data;
        }
        $this->put_json('slide',$row);
        return redirect()->route('slide');
    }
    //hinh logo
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
      	if(!empty($request->input('chon'))){
        		foreach ($request->input('chon') as $v) {
    	    		$stt = $v-1;
              if(array_key_exists($stt,$row)){
                $rs = $row[$stt];
                if(is_file('./images/slider/'.$rs['urlhinh']))
            			unlink('./images/slider/'.$rs['urlhinh']);
          		  unset($row[$stt]);
              }
    	    	}
            if(count($row)==1) $row[-1] = array("kid"=>"0");
            $this->put_json('logo',$row);
      	}
      	return redirect()->route('logo');
    }
    public function deleteLogo($id){
      	$row = $this->get_json('logo');
        $stt = $id-1;
        if(array_key_exists($stt,$row)){
          $rs = $row[$stt];
          if(is_file('./images/slider/'.$rs['urlhinh']))
      			unlink('./images/slider/'.$rs['urlhinh']);
    		  unset($row[$stt]);
        	if(count($row)==1) $row[-1] = array("kid"=>"0");
    		  $this->put_json('logo',$row);
        }
		    return redirect()->route('logo');
    }
    public function getLogoForm(Request $request)
    {
        $id = round($request->id);
        $row = [];
        if($id>0){
          $row = $this->get_json('logo');
          $row = $row[$id-1];
        }
        return view('admin.logoForm',['id'=>$id,'row'=>$row ]);
    }
    public function postLogoForm(Request $request)
    {
        $row = $this->get_json('logo');
        $stt = $row[-1]['kid'];
        $data['id'] = $stt + 1;
        $id = round($request->id);
        $filename = '';

        if($request->hasFile('urlhinh')){
          $file = $request->file('urlhinh');
          $filename = time().'_'.$this->rname_url_hinh($file->getClientOriginalName());
          $img = Image::make($file->getRealPath())->resize('200','200');
          $img->save('./images/slider/'.$filename);
        }

        $data['ten'] = $request->input('ten');
        $data['link'] = $request->input('link');
        $data['urlhinh'] = $filename;
        $data['anhien'] = round($request->input('anhien'));

        if($id>0){
          // update logo
          $data['id'] = $id;
          $rs = $row[$id-1];
          if($filename!=''){
            if(is_file('./images/slider/'.$rs['urlhinh']))
            unlink('./images/slider/'.$rs['urlhinh']);
          }else {
            $data['urlhinh'] = $rs['urlhinh'];
          }
          $row[$id-1] = $data;
        }else {
          $row[-1]['kid'] = $data['id'];
          $row[$stt] = $data;
        }
        $this->put_json('logo',$row);
        return redirect()->route('logo');
    }
    //banner
    public function getBanner()
    {
        return view('admin.banner');
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

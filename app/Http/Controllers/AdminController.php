<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
use Carbon\Carbon;
use Rap2hpoutre\FastExcel\FastExcel;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //private $excel;
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->excel = $excel;
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
    public function importFile(Request $request)
    {
      return back();
      if($request->file('imported-file'))
      {
            $path = $request->file('imported-file')->getRealPath();
            (new FastExcel)->import($path, function ($row) {
              DB::table('area')->insert([
                "id" => $row['id'],
                "name" => $row['name'],
                "id_parent" => $row['id_parent'],
                "weight" => $row['weight']
              ]);
            });

            //dd($path);
            //$data = Excel::load($path,function(){})->get();
            //dd($data);
      }
        //return back();
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
              if(is_file('./public/images/slider/'.$rs['urlhinh']))
                unlink('./public/images/slider/'.$rs['urlhinh']);
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
          if(is_file('./public/images/slider/'.$rs['urlhinh']))
      			unlink('./public/images/slider/'.$rs['urlhinh']);
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
          $img = Image::make($file->getRealPath())->resize('1281','434');
          $img->save('./public/images/slider/'.$filename);
        }

        $data['ten'] = trim($request->ten);
        $data['link'] = trim($request->link);
        $data['content'] = trim($request->content);
        $data['urlhinh'] = $filename;
        $data['thutu'] = round($request->input('thutu'));
        $data['anhien'] = round($request->input('anhien'));

        if($id>0){
          // update slide
          $data['id'] = $id;
          $rs = $row[$id-1];
          if($filename!=''){
            if(is_file('./public/images/slider/'.$rs['urlhinh']))
            unlink('./public/images/slider/'.$rs['urlhinh']);
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
                if(is_file('./public/images/slider/'.$rs['urlhinh']))
            			unlink('./public/images/slider/'.$rs['urlhinh']);
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
          if(is_file('./public/images/slider/'.$rs['urlhinh']))
      			unlink('./public/images/slider/'.$rs['urlhinh']);
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
          $img = Image::make($file->getRealPath());//->resize('200','200');
          $img->save('./public/images/slider/'.$filename);
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
            if(is_file('./public/images/slider/'.$rs['urlhinh']))
            unlink('./public/images/slider/'.$rs['urlhinh']);
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
    public function add_banner($request,$urlhinh,$name,$link,$banner,$x='480',$y='240'){
      $filename='';
      if($request->hasFile($urlhinh)){
        $file = $request->file($urlhinh);
        $filename = time().'_'.$this->rname_url_hinh($file->getClientOriginalName());
        $img = Image::make($file->getRealPath())->resize($x,$y);
        $img->save('./public/images/banner/'.$filename);
        $data['urlhinh'] = $filename;
      }
      $data['name'] = trim($name);
      $data['link'] = trim($link);
      if($filename!=''){
        if(is_file('./public/images/banner/'.$banner))
        unlink('./public/images/banner/'.$banner);
      }else {
        $data['urlhinh'] = $banner;
      }
      return $data;
    }
    public function postBanner(Request $request)
    {
        $data = $this->add_banner($request,'urlhinh0',$request->name0,$request->link0,$request->banner0);
        $row[0] = $data;
        $data = $this->add_banner($request,'urlhinh1',$request->name1,$request->link1,$request->banner1);
        $row[1] = $data;
        $data = $this->add_banner($request,'urlhinh2',$request->name2,$request->link2,$request->banner2);
        $row[2] = $data;
        $data = $this->add_banner($request,'urlhinh3',$request->name3,$request->link3,$request->banner3);
        $row[3] = $data;
        $data = $this->add_banner($request,'urlhinh4',$request->name4,$request->link4,$request->banner4,'1170','200');
        $row[4] = $data;
        //$row = $this->get_json('banner');
        $this->put_json('banner',$row);
        return back()->with('success',"Đã cập nhật thành công.");
    }

    public function getBanner()
    {
        $row = $this->get_json('banner');
        return view('admin.banner',['row'=>$row]);
    }

    // info
    public function getInfo()
    {
        $row = $this->get_json('info');
        return view('admin.info',['row'=>$row]);
    }
    public function postInfo(Request $request)
    {
        $row['title_index'] = trim($request->title_index);
        $row['copyright'] = trim($request->copyright);
        $row['footer'] = trim($request->footer);
        $row['contact'] = trim($request->contact);
        $row['about'] = trim($request->about);
        $row['google_analytic'] = trim($request->google_analytic);
        $row['bank_sys'] = trim($request->bank_sys);
        $row['order_success'] = trim($request->order_success);
        $row['total_freeship'] = round($request->total_freeship);
        $row['fb'] = trim($request->fb);
        $row['kw'] = trim($request->kw);
        $row['des'] = trim($request->des);
        $this->put_json('info',$row);
        return back()->with('success',"Đã cập nhật thành công.");
    }

    //promotion
    public function getPromotion()
    {
        return view('admin.promotion');
    }
    //maps
    public function getMap()
    {
        $row = $this->get_json('map');
        return view('admin.map',[
          'row'=>$row
        ]);
    }
    public function postMap(Request $request)
    {
        $data['ten'] = trim($request->ten);
        $data['chitiet'] = trim($request->chitiet);
        $data['diachi'] = trim($request->diachi);
        $data['noidung'] = trim($request->noidung);
        $data['toado'] = trim($request->toado);
        $data['anhien'] = round($request->anhien);
        $this->put_json('map',$data);

        return redirect()->route('map');
    }
    //category
    public function getCat()
    {
        return view('admin.cat');
    }
    public function postCat(Request $request)
    {
        if(!empty($request->input('chon'))){
            foreach ($request->input('chon') as $id) {
              DB::table('category')->where(['idcat'=>$id])->delete();
            }
        }
        return redirect()->route('category');
    }
    public function deleteCat($id)
    {
        DB::table('category')->where(['idcat'=>$id])->delete();
        return redirect()->route('category');
    }
    public function getCatForm(Request $request)
    {
        $id = round($request->id);
        $row =[];
        $rs = DB::table('category')->where(['idcat'=>$id])->get();
        if(count($rs)>0) $row =$rs[0];
        return view('admin.catForm',[
          'id'=> $id,'row'=>$row
        ]);
    }
    public function postCatForm(Request $request)
    {
        $id = round($request->id);
        $data['name'] = trim($request->name);
        $data['icon'] = trim($request->icon);
        $data['alias'] = trim($request->alias);
        $data['idcha'] = round($request->idcha);
        $data['thutu'] = round($request->thutu);
        $data['anhien'] = round($request->anhien);
        $data['kw'] = trim($request->kw);
        $data['des'] = trim($request->des);
        $data['updated_at'] = Carbon::now();
        if($id>0){
          DB::table('category')->where(['idcat'=>$id])->update($data);
        }else {
          $data['created_at'] = Carbon::now();
          DB::table('category')->insert($data);
        }
        return redirect()->route('category');
    }
    //product
    public function getProduct(){
      $rs_product = DB::table('product')
					->select('idsp','tensp','alias','giaban','urlhinh','anhien','idcat')
          ->orderBy('idsp','desc')->paginate(20);
      return view('admin.product',[
        'rs_product'=>$rs_product
      ]);
    }
    // delete all pro
    public function postProduct(Request $request){
    	if(!empty($request->input('chon'))){
    		foreach ($request->input('chon') as $k) {
    			$rs = DB::table('product')->select('urlhinh')
						    ->where(['idsp'=>$k])->get();
          $hinh = json_decode($rs[0]->urlhinh,true);
          foreach ($hinh as $img_name) {
            if(is_file('./public/images/product/'.$img_name))
                unlink('./public/images/product/'.$img_name);
            if(is_file('./public/images/product/thumb/'.$img_name))
              unlink('./public/images/product/thumb/'.$img_name);
            if(is_file('./public/images/product/thumbnail/'.$img_name))
              unlink('./public/images/product/thumbnail/'.$img_name);
          }
				  DB::table('product')->where(['idsp'=>$k])->delete();
	    	}
			return back()->with('success',"Đã xóa thành công.");
    	}
    	return back();
    }
    // add, update form
    public function getProductForm(Request $request){
        $id = round($request->id);$row =[];
        $rs = DB::table('product')->where(['idsp'=>$id])->get();
        if(count($rs)>0) $row =$rs[0];
        return view('admin.productForm',[
          'id'=> $id,'row'=>$row
        ]);
    }
    public function postProductForm(Request $request){
        $id = round($request->id);
        $data['tensp'] = trim($request->tensp);
        $data['alias'] = trim($request->alias);
        $data['giaban'] = round($request->giaban);
        $data['gianhap'] = round($request->gianhap);
        $data['giakm'] = round($request->giakm);
        $data['khoiluong'] = round($request->khoiluong);
        $data['freeship'] = round($request->freeship);

        $arr['hinh'] = is_array($request->name_hinh)?$request->name_hinh:[];
        if ($request->hasFile('undefined')) {
          $files = $request->undefined;
          foreach($files as $file){
            $img_name[] = $file->getClientOriginalName();
            $img_path[] = $file->getRealPath();
          }
          //print_r($img_path);exit;
          for($i=0;$i<count($img_name);$i++){
            $filename = time().'_'.$this->rname_url_hinh($img_name[$i]);
            array_push($arr['hinh'],$filename);

            $img = Image::make($img_path[$i]);
            $img->save('./public/images/product/'.$filename);

            $img = Image::make($img_path[$i]);
            $img->resize(300, 300);
            $img->save("./public/images/product/thumb/".$filename);

            $img = Image::make($img_path[$i]);
            $img->resize(150, 150);
            $img->save("./public/images/product/thumbnail/".$filename);

          }//foreach
        }
        $data['urlhinh'] = json_encode($arr['hinh']);

        $data['mota'] = trim($request->mota);
        $data['noidung'] = trim($request->noidung);
        $data['idcat'] = round($request->idcat);
        $data['thutu'] = round($request->thutu);
        $data['noibat'] = round($request->noibat);
        $data['anhien'] = round($request->anhien);
        $data['kw'] = trim($request->kw);
        $data['des'] = trim($request->des);
        $data['updated_at'] = Carbon::now();

        if($id>0){
          DB::table('product')->where(['idsp'=>$id])->update($data);
        }else {
          DB::select('call update_total_cat(?)',array($data['idcat']));
          $data['created_at'] = Carbon::now();
          DB::table('product')->insert($data);
        }
        return redirect()->route('product');
    }

    //delete urlhinh
    public function delHinhsp($idsp,$loc){
    	$rs = DB::table('product')->select('urlhinh')
            ->where(['idsp'=>$idsp])
            ->get();
      $hinh = json_decode($rs[0]->urlhinh,true);

      if(is_file('./public/images/product/'.$hinh[$loc]))
        unlink('./public/images/product/'.$hinh[$loc]);
      if(is_file('./public/images/product/thumb/'.$hinh[$loc]))
        unlink('./public/images/product/thumb/'.$hinh[$loc]);
      if(is_file('./public/images/product/thumbnail/'.$hinh[$loc]))
        unlink('./public/images/product/thumbnail/'.$hinh[$loc]);
      unset($hinh[$loc]);
      $update = json_encode($hinh);
      DB::table('product')->where(['idsp'=>$idsp])->update(['urlhinh'=>$update]);
      return back()->with('success',"Đã xóa thành công.");
    }
    // deleteProduct
    public function deleteProduct($id){
    	$rs = DB::table('product')->where(['idsp'=>$id])->get();
      $hinh = json_decode($rs[0]->urlhinh,true);
      foreach ($hinh as $img_name) {
        if(is_file('./public/images/product/'.$img_name))
          unlink('./public/images/product/'.$img_name);
        if(is_file('./public/images/product/thumb/'.$img_name))
          unlink('./public/images/product/thumb/'.$img_name);
        if(is_file('./public/images/product/thumbnail/'.$img_name))
          unlink('./public/images/product/thumbnail/'.$img_name);
      }
      DB::table('product')->where(['idsp'=>$id])->delete();
      DB::select('call remove_total_cat(?)',array($rs[0]->idcat));
      return back()->with('success',"Đã xóa thành công.");
    }


    //selectMenu
    public function selectCat($id=0){
    	$menu = DB::table('category')
					->select('name','idcat','thutu','anhien')->where(['idcha'=>$id])
					->orderBy('thutu','asc')->orderBy('name','asc')
					->get();
		  return $menu;
    }
    //news
    public function getNews()
    {
        $rs_news = DB::table('news')
        ->select('tieude','idtin','urlhinh','solanxem','anhien','alias')
        ->orderBy('idtin','desc')->paginate(20);
        return view('admin.news',[
          'rs_news'=>$rs_news
        ]);
    }
    //news del all
    public function postNews(Request $request){
    	if(!empty($request->input('chon'))){
    		foreach ($request->input('chon') as $k) {
    			$rs = DB::table('news')->where(['idtin'=>$k])->get();
          if(is_file('./public/images/news/'.$rs[0]->urlhinh))
              unlink('./public/images/news/'.$rs[0]->urlhinh);
				  DB::table('news')->where(['idtin'=>$k])->delete();
	    	}
			return back()->with('success',"Đã xóa thành công.");
    	}
    	return back();
    }
    // add, update news
    public function getNewsForm(Request $request)
    {
        $id = round($request->id);$row =[];
        $rs = DB::table('news')->where(['idtin'=>$id])->get();
        if(count($rs)>0) $row =$rs[0];
        return view('admin.newsForm',[
          'id'=> $id,'row'=>$row
        ]);
    }
    public function postNewsForm(Request $request)
    {
      $id = round($request->id);
      $data['tieude'] = trim($request->tieude);
      $data['alias'] = trim($request->alias);
      $data['tomtat'] = trim($request->tomtat);
      $data['noidung'] = trim($request->noidung);

      $filename = '';
      if($request->hasFile('urlhinh')){
        $file = $request->file('urlhinh');
        $filename = time().'_'.$this->rname_url_hinh($file->getClientOriginalName());
        $img = Image::make($file->getRealPath())->resize('480','480');
        $img->save('./public/images/news/'.$filename);
      }
      $data['urlhinh'] = $filename;
      $data['solanxem'] = round($request->solanxem);
      $data['anhien'] = round($request->anhien);
      $data['kw'] = trim($request->kw);
      $data['update_at'] = Carbon::now();

      if($id>0){
        if($filename!=''){
          if(is_file('./public/images/news/'.$request->file_name))
            unlink('./public/images/news/'.$request->file_name);
        }else {
          $data['urlhinh'] = $request->file_name;
        }
        DB::table('news')->where(['idtin'=>$id])->update($data);
      }else {
        $data['create_at'] = Carbon::now();
        DB::table('news')->insert($data);
      }
      return redirect()->route('news');
    }

    public function deleteNews($id=0)
    {
      $rs = DB::table('news')->where(['idtin'=>$id])->get();
      if(is_file('./public/images/news/'.$rs[0]->urlhinh))
          unlink('./public/images/news/'.$rs[0]->urlhinh);
      DB::table('news')->where(['idtin'=>$id])->delete();
			return back()->with('success',"Đã xóa thành công.");
    }
}

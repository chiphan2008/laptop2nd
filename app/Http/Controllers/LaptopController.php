<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Client;

class LaptopController extends Controller
{
    public $endpoint = "https://services.giaohangtietkiem.vn/services/shipment/fee";

    public function __construct(){
    //    $news = DB::table('news')->get();
    //    foreach ($news as $v) {
    //      DB::table('news')->where(['idtin'=>$v->idtin])
    //      ->update(['alias'=>$this->vn_str_filter($v->tieude)]);
    //    }
    }
    function getDelivery(Request $request){
      $client = new Client();
      $delivery = $client->request('GET',$this->endpoint,
      ['query' => [
        "pick_province" => "Hồ Chí Minh",
        "pick_district" => "Quận Gò Vấp",
        "province" => $request->city,
        "district" => $request->district,
        "address" => $request->address,
        "weight" => $request->weight
      ],
      'headers' => ['Token' => "1742E42776eB397C64640634a02dE4e28cF6c698"]
      ])->getBody()->getContents();
      return $delivery;
    }
    public function checkout(){
      $cart_detail = @session()->get('cart_detail');
      if(count($cart_detail)==0){
        return redirect()->route('index');
      }

      return view('checkout',[
        'cart_detail'=>$cart_detail
      ]);
    }
    public function handlePostCart(Request $request){
      //dd($request->qty);
      $cart_detail=[];
      foreach ($request->qty as $key => $value) {
        $value=max(1,round($value));
        $data[$key]=$value;
        $products = DB::table('product')
  					->select('tensp','alias','giaban','urlhinh','khoiluong')
            ->where(['idsp'=>$key])->get()->toArray();
        $product = $products[0];
        $product->qty = $value;
        $product->urlhinh = json_decode($product->urlhinh,true);
        $cart_detail[$key]=$product;
        @$cart_detail['total'] += $value*$product->giaban;
        @$cart_detail['weight'] += $value*$product->khoiluong;
      }
      session()->put('cart',$data);
      session()->put('cart_detail',$cart_detail);
      return back();
    }
    public function handleCart($act,$idsp){
      $data = session()->get('cart');
      if($act=='add'){
        @$data[$idsp]++;
      }
      if($act=='remove'){
        unset($data[$idsp]);
      }
      $cart_detail=[];
      foreach ($data as $key => $value) {
        $products = DB::table('product')
  					->select('tensp','alias','giaban','urlhinh','khoiluong')
            ->where(['idsp'=>$key])->get()->toArray();
        $product = $products[0];
        $product->qty = $value;
        $product->urlhinh = json_decode($product->urlhinh,true);
        $cart_detail[$key]=$product;
        @$cart_detail['total'] += $value*$product->giaban;
        @$cart_detail['weight'] += $value*$product->khoiluong;
      }
      session()->put('cart',$data);
      session()->put('cart_detail',$cart_detail);
      return back();
    }
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
    public function getDetailTech($alias){
        $tech = DB::table('news')
          ->where('alias',$alias)->get()->toArray();
        $solanxem = $tech[0]->solanxem+1;
        DB::table('news')->where('alias',$alias)
            ->update(['solanxem'=>$solanxem]);
          //inRandomOrder()
        //dd($tech[0]->idtin);exit;
        $other_tech = DB::table('news')
        ->where('idtin','!=',$tech[0]->idtin)->orderBy('idtin','desc')
        ->limit(3)->get();
        $rand = DB::table('news')->orderBy('solanxem','desc')
        ->limit(10)->get();
        return view('detail_tech',[
            'rand'=>$rand,'tech'=>$tech,'other_tech'=>$other_tech,
            'title'=>$tech[0]->tieude,'keywords'=>$tech[0]->kw,'description'=>$tech[0]->tomtat
        ]);
    }
    public function getTech(){
        $tech = DB::table('news')
          ->where('anhien',1)->orderBy('idtin','desc')
          ->paginate(12);
          //inRandomOrder()
        $rand = DB::table('news')->orderBy('solanxem','desc')
        ->limit(10)->get();
        return view('tech',[
            'rand'=>$rand,'tech'=>$tech,
            'title'=>'','keywords'=>'','description'=>''
        ]);
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

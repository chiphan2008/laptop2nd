<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Validator;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use GuzzleHttp\Client;

class LaptopController extends Controller
{
    public $endpoint = "https://services.giaohangtietkiem.vn/services/shipment/fee";
    public function __construct(){
        //$bill_detail = DB::table('bill_detail')->get();
        //foreach ($bill_detail as $v) {
        //  //dd($v->idsp);
        //  DB::select('call update_total_sell(?,?)',[$v->idsp,$v->qty]);

        //}
    }
    public function getArea($id_parent){
      $data = DB::table('area')->where(['id_parent'=>$id_parent])
      ->orderBy('weight','asc')->get();
      return $data;
    }

    function getDelivery(Request $request){
      $cart_detail = session()->get('cart_detail');
      $info = $this->getInfo();
      if($cart_detail['freeship']>0 || $cart_detail['total']>=$info['total_freeship']){
        @$data->fee = "Miễn phí vận chuyển.";
        @$data->val =0;
      }else {
        $client = new Client();
        $delivery = json_decode($client->request('GET',$this->endpoint,
        ['query' => [
          "pick_province" => "Hồ Chí Minh",
          "pick_district" => "Quận Gò Vấp",
          "province" => $request->city,
          "district" => $request->district,
          "address" => $request->address,
          "weight" => $request->weight
        ],
        'headers' => ['Token' => "1742E42776eB397C64640634a02dE4e28cF6c698"]
        ])->getBody()->getContents());
        $data = $delivery->fee;
        $data->fee +=10000;
        $data->val =$data->fee;
        $data->fee = number_format($data->fee,0).' VNĐ';
      }
      return json_encode($data);
    }
    public function getCart(){
        $cart_detail = @session()->get('cart_detail');
        if(count($cart_detail)==0){
          return redirect()->route('index');
        }
        return view('cart');
    }
    public function checkout(){
        $cart_detail = @session()->get('cart_detail');
        if(count($cart_detail)==0){
          return redirect()->route('index');
        }
        $info = $this->getInfo();
        return view('checkout',[
          'cart_detail'=>$cart_detail,
          'info'=>$info
        ]);
    }
    public function postCheckout(Request $request){
      $rules = [
        'name' => 'required',
        'city' => 'required',
        'district' => 'required',
        'phone' => 'required',
        'email' => 'required|email'
  		];
  		$messages = [
        'name.required' => 'Vui lòng nhập họ tên',
        'city.required' => 'Vui lòng chọn Tỉnh/TP',
        'district.required' => 'Vui lòng chọn Quận/huyện',
        'phone.required' => 'Vui lòng nhập số điện thoại',
        'emai.required' => 'Vui lòng nhập email',
  			'emai.email' => 'Vui lòng nhập đúng định dạng email',
  		];
  		$validator = Validator::make($request->all(), $rules,$messages);

  		if ($validator->fails()) {
  			return redirect()->back()->withErrors($validator)->withInput();
  		}else {
        $data['name'] = trim($request->name);
        $data['sex'] = round($request->sex);
        $data['address'] = trim($request->address);
        $data['email'] = trim($request->email);
        $data['phone'] = trim($request->phone);
        $data['city'] = round($request->city);
        $data['district'] = round($request->district);
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        if(DB::table('client')->count()==0){
          DB::table('client')->insert($data);
        }
        $count = DB::table('bill')->count()+1000;
        $data['code_bill'] = 'LT'.$count;
        $data['code_discount'] = trim($request->code_discount);
        $data['note'] = trim($request->note);
        $data['ship'] = round($request->ship);
        $data['payment'] = round($request->payment);
        $data['status'] = 0;

        DB::table('bill')->insert($data);
        $idbill = DB::getPdo()->lastInsertId();
        $bill['idbill'] = $idbill;

        $cart_detail = session()->get('cart_detail');
        $area['city_name'] = trim($request->city_name);
        $area['district_name'] = trim($request->district_name);
        $area['payment_label'] = trim($request->payment_label);
        Mail::send('layouts.emailtemplate', ['data'=>$data,'area'=>$area,'cart_detail'=>$cart_detail], function ($message) use ($data){
            $message->from('se7en.hs@gmail.com', 'Laptop2nd.vn');
            $message->subject('Đơn hàng #'.$data['code_bill']);
            $message->bcc("se7en.hs@gmail.com");
            $message->to($data['email']);
        });

        foreach ($cart_detail as $k => $v) {
          if(is_numeric($k)){
            $bill['idsp'] = $k;
            $bill['qty'] = $v->qty;
            $bill['price'] = ($v->giakm==0?$v->giaban:$v->giaban);
            DB::table('bill_detail')->insert($bill);
          }
        }
        $request->session()->forget('cart');
        $request->session()->forget('cart_detail');
        return redirect()->route('index');
      }
    }
    public function handlePostCart(Request $request){
      //dd($request->qty);
      $cart_detail=[];
      foreach ($request->qty as $key => $value) {
        $value=max(1,round($value));
        $cart[$key]=$value;
        $products = DB::table('product')
  					->select('tensp','alias','giaban','giakm','urlhinh','khoiluong','freeship')
            ->where(['idsp'=>$key])->get()->toArray();
        $product = $products[0];
        $product->qty = $value;
        $product->urlhinh = json_decode($product->urlhinh,true);
        $cart_detail[$key]=$product;
        @$cart_detail['total'] += $value*($product->giakm==0?$product->giaban:$product->giakm);
        @$cart_detail['weight'] += $value*$product->khoiluong;
        @$cart_detail['freeship'] += $product->freeship;
      }
      session()->put('cart',$cart);
      session()->put('cart_detail',$cart_detail);
      return back();
    }

    public function handleCart($act,$idsp,$qty=0){
      $data = session()->get('cart');
      if($act=='add'){
        @$data[$idsp]++;
      }
      if($act=='remove'){
        unset($data[$idsp]);
      }
      if($qty>0){
        $data[$idsp]=$qty;
      }
      $cart_detail=[];
      foreach ($data as $key => $value) {
        $products = DB::table('product')
  					->select('tensp','alias','giaban','giakm','urlhinh','khoiluong','freeship')
            ->where(['idsp'=>$key])->get()->toArray();
        $product = $products[0];
        $product->qty = $value;
        $product->urlhinh = json_decode($product->urlhinh,true);
        $cart_detail[$key]=$product;
        @$cart_detail['total'] += $value*($product->giakm==0?$product->giaban:$product->giakm);
        @$cart_detail['weight'] += $value*$product->khoiluong;
        @$cart_detail['freeship'] += $product->freeship;
      }
      session()->put('cart',$data);
      session()->put('cart_detail',$cart_detail);
      return redirect()->route('cart');
    }
    public function getSearch(Request $request){
      $shop = DB::table('product')
      ->where([
        ['anhien','=',1],
        ['tensp','like','%' . $request->kw . '%'],
        ['mota','like','%' . $request->kw . '%']
      ])
      //->orWhere('noidung', 'like', '%' . $request->kw . '%')
      ->orderBy('idsp','desc')->paginate(16);
      return view('search',compact('shop'));
    }
    public function getInfo(){
        return $this->get_json('info');
    }
    public function selectCat($id=0){
    	$menu = DB::table('category')
					->select('name','idcat','alias','total')
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
    public function getShop(){
        $shop = DB::table('product')
        ->where('anhien',1)->orderBy('idsp','desc')
        ->paginate(16);
        return view('shop',compact('shop'));
    }
    public function getCategory($alias){
        $cat = DB::table('category')->where(['alias'=>$alias])->get();
        $shop = DB::table('product')
        ->where(['anhien'=>1,'idcat'=>$cat[0]->idcat])->orderBy('idsp','desc')
        ->paginate(16);
        return view('category',compact('shop','cat'));
    }
    public function postContact(Request $request){
      $rules = [
        'name' => 'required',
        'contents' => 'required',
        'title' => 'required',
        'phone' => 'required',
        'email' => 'required|email'
  		];
  	   $messages = [
         'email.required' => 'Vui lòng nhập email',
         'email.email' => 'Email không đúng định dạng',
         'name.required' => 'Vui lòng nhập họ tên',
         'title.required' => 'Vui lòng nhập tiêu đề',
	       'contents.required' => 'Vui lòng nhập nội dung liên hệ',
      ];
  		$validator = Validator::make($request->all(), $rules,$messages);

  		if ($validator->fails()) {

        return redirect()->back()->withErrors($validator)->withInput();
  			//return back()->with('err',$validator->getMessageBag()->toArray());
  		}else {
        $data['title'] = $request->title;
        $data['contents'] = $request->contents;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        Mail::send('layouts.contacttemplate', ['data'=>$data], function ($message) use ($data){
            $message->from($data['email'], 'Laptop2nd.vn');
            $message->subject($data['title']);
            $message->to('se7en.hs@gmail.com');
        });
        return back()->with('success','Cảm ơn quý khách đã liên hệ đến laptop2nd. Chúng tôi sẽ phản hồi đến quý khách trong thời gian sớm nhất.');
      }

    }
    public function getDetailProduct($alias){
        $products = DB::table('product')
          ->where('alias',$alias)->get()->toArray();
        $solanxem = $products[0]->solanxem+1;
        DB::table('product')->where('alias',$alias)
            ->update(['solanxem'=>$solanxem]);

        $other_products = DB::table('product')
        ->where('idsp','!=',$products[0]->idsp)->orderBy('idsp','desc')
        ->limit(5)->get();

        return view('product',[
            'products'=>$products,'other_products'=>$other_products,
            'title'=>$products[0]->tensp,'keywords'=>$products[0]->kw,'description'=>$products[0]->des
        ]);
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
        ->select('idsp','tensp','alias','giaban','giakm','gianhap','urlhinh')
        ->orderBy('idsp','desc')->limit(16)->get();
        $row_selling_product = DB::table('product')
        ->select('idsp','tensp','alias','giaban','giakm','gianhap','urlhinh')
        ->orderBy('solanban','desc')->limit(12)->get();
        $row_view_product = DB::table('product')
        ->select('idsp','tensp','alias','giaban','giakm','gianhap','urlhinh')
        ->orderBy('solanxem','desc')->limit(12)->get();
        $row_highlight_product = DB::table('product')
        ->select('idsp','tensp','alias','giaban','giakm','gianhap','urlhinh')
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

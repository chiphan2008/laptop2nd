@extends("layouts.public")
@inject('LaptopCtrl', 'App\Http\Controllers\LaptopController')
<?php
$cart = session()->get('cart');
$row_gen = $LaptopCtrl->getInfo();
$product = $products[0];
$urlhinh = json_decode($product->urlhinh,true);
?>
@section("content")

<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span class="separator">/</span>
                    <a href="{{asset('/san-pham.html')}}">Sản phẩm</a>
                    <span class="separator">/</span> {{$product->tensp}}
                </nav>
            </div>
        </div>
        </div>
    </div>

    <div class="wrapper home-one single-product-page">

      <div class="single-product-area" style="padding-top:20px">
               <div class="container">
                   <div class="single-product-wrapper">
                       <div class="row">
                           <div class="col-xs-12 col-md-7 col-lg-7">
                                <div class="product-details-img-content">
                                    <div class="product-details-tab mr-40">
                                        <div class="product-details-large tab-content">
                                          @foreach($urlhinh as $k=>$v)

                                            <div class="tab-pane active" id="pro-details{{$k}}">
                                                <div class="product-popup">
                                                    <a href="{{asset('/images/product/'.$v)}}">
                                                        <img src="{{asset('/images/product/'.$v)}}" alt="{{$product->tensp}}">
                                                    </a>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                        <div class="product-details-small nav product-dec-slider owl-carousel slick-initialized slick-slider slick-dotted slick-vertical"><i class="fa fa-chevron-up slick-arrow" style=""></i>
                                          <div class="slick-list draggable" style="height: 488px;"><div class="slick-track" style="opacity: 1; height: 2928px; transform: translate3d(0px, -488px, 0px);">
                                            <div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details2" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details3" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details4" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details5" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 150px;" role="tabpanel" id="slick-slide00"><div><a class="active" href="#pro-details1" style="width: 100%; display: inline-block;" tabindex="0">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 150px;" role="tabpanel" id="slick-slide01"><div><a href="#pro-details2" style="width: 100%; display: inline-block;" tabindex="0">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 150px;" role="tabpanel" id="slick-slide02"><div><a href="#pro-details3" style="width: 100%; display: inline-block;" tabindex="0">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 150px;" role="tabpanel" id="slick-slide03"><div><a href="#pro-details4" style="width: 100%; display: inline-block;" tabindex="0">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 150px;" tabindex="-1" role="tabpanel" id="slick-slide04"><div><a href="#pro-details5" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 150px;" tabindex="-1" role="tabpanel" id="slick-slide05"><div><a class="active" href="#pro-details1" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 150px;" tabindex="-1" role="tabpanel" id="slick-slide06"><div><a href="#pro-details2" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 150px;" tabindex="-1" role="tabpanel" id="slick-slide07"><div><a href="#pro-details3" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 150px;" tabindex="-1" role="tabpanel" id="slick-slide08"><div><a href="#pro-details4" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 150px;" tabindex="-1" role="tabpanel" id="slick-slide09"><div><a href="#pro-details5" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a class="active" href="#pro-details1" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details2" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details3" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details4" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details5" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a class="active" href="#pro-details1" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="16" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details2" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="17" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details3" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="18" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details4" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div><div class="slick-slide slick-cloned" data-slick-index="19" aria-hidden="true" style="width: 150px;" tabindex="-1"><div><a href="#pro-details5" style="width: 100%; display: inline-block;" tabindex="-1">
                                                <img src="{{asset('/images/product/thumbnail/'.$urlhinh[0])}}" alt="">
                                            </a></div></div></div></div><i class="fa fa-chevron-down slick-arrow" style=""></i><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide04" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide08" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>

                                    </div>
                                </div>
                           </div>
                           <div class="col-xs-12 col-md-5 col-lg-5">
                               <div class="single-product-info">
                                   <h1>{{$product->tensp}}</h1>
                                    <span class="price">
                                        @if($product->gianhap)
                                        <del>{{number_format($product->giaban,0)}}</del>
                                        @endif
                                        @if($product->gianhap)
                                        {{number_format($product->gianhap,0)}}
                                        @endif
                                    </span>
                                    <p>{!!$product->mota!!}</p>
                                    <div class="box-quantity d-flex">
                                        <form action="" method="post">
                                          {{csrf_field()}}
                                            <input id="qty" class="quantity mr-40" min="1" value="{{max(1,round(@$cart[$product->idsp]))}}" type="number">
                                        </form>
                                        <a class="add-cart" href="javascript:void(0)">Thêm vào giỏ hàng</a>
                                    </div>


                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


    </div>

    <script>
    jQuery(document).ready(function(){
      //jQuery(".product-details-small").not('.slick-initialized').slick();
      jQuery('.add-cart').click(function(){
        var idsp = {{$product->idsp}};
        var qty = $('#qty').val();
        url = "{{asset('/cart/add')}}/"+idsp+"/"+qty;
        //alert(url)
        window.location.href = url;
      })
    })
    
    </script>

@endsection

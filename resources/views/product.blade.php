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
                                          <div class="tab-pane {{$k==0?'active':''}}" id="pro-details{{$k}}">
                                              <div class="product-popup">
                                                  <a href="{{asset('public/images/product/'.$v)}}">
                                                      <img src="{{asset('public/images/product/'.$v)}}" alt="{{$product->tensp}}">
                                                  </a>
                                              </div>
                                          </div>
                                          @endforeach
                                      </div>
                                      <div class="product-details-small nav product-dec-slider owl-carousel">
                                          @foreach($urlhinh as $k=>$v)
                                          <a class="{{$k==0?'active':''}}" href="#pro-details{{$k}}">
                                              <img src="{{asset('public/images/product/thumb/'.$v)}}" alt="{{$product->tensp}}">
                                          </a>
                                          @endforeach

                                      </div>
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

           <div class="product-description-area">
                     <div class="container">
                         <div class="row">
                             <div class="col-sm-12">
                                 <!-- <ul class="nav nav-tabs">
                                     <li class="active">
                                         <a data-toggle="tab" href="#description">Description</a>
                                     </li>

                                 </ul> -->
                                 <div class="tab-content">
                                     <div id="description" class="tab-pane fade in show active">
                                         <h2>Nội dung</h2>
                                         <p>{!!$product->noidung!!}</p>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="single-related-product-area">
                           <div class="container">
                               <div class="row">
                                   <div class="col-sm-12">
                                       <div class="section-title">
                                           <h3>Sản phẩm khác</h3>
                                       </div>
                                   </div>
                               </div>
                               <div class="row">
                                 @foreach($other_products as $r_other_product)
                                 <?php $hinh = json_decode($r_other_product->urlhinh,true) ?>
                                   <div class="related-product">
                                       <div class="single-product-area">
                                           <div class="product-wrapper gridview">
                                               <div class="list-col4">
                                                   <div class="product-image">
                                                       <a href="{{asset('/san-pham/'.$r_other_product->alias.'.html')}}">
                                                           <img src="{{asset('public/images/product/thumb/'.$hinh[0])}}" alt="{{$r_other_product->tensp}}">
                                                       </a>
                                                       <div class="quickviewbtn">
                                                           <a href="{{asset('/san-pham/'.$r_other_product->alias.'.html')}}" ><i class="ion-eye"></i></a>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="list-col8">
                                                   <div class="product-info">
                                                       <h2><a href="{{asset('/san-pham/'.$r_other_product->alias.'.html')}}">{{$r_other_product->tensp}}</a></h2>
                                                       <span class="price">
                                                           <del>{{number_format($r_other_product->giaban,0)}}</del> {{number_format($r_other_product->giaban,0)}}
                                                       </span>
                                                   </div>
                                                   <div class="product-hidden">
                                                       <div class="add-to-cart">
                                                           <a href="{{asset('/cart/add/'.$r_other_product->idsp)}}">Thêm vào giỏ hàng</a>
                                                       </div>

                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   @endforeach
                               </div>
                               <div class="clearfix mb-20"></div>
                           </div>
                           <div class="clearfix mb-20"></div>
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

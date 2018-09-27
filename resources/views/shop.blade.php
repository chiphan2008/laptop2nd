@extends("layouts.public")
@inject('LaptopCtrl', 'App\Http\Controllers\LaptopController')
<?php
$menu1 = $LaptopCtrl->selectCat();
?>
@section("content")

<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span class="separator">/</span> Sản phẩm
                </nav>
            </div>
        </div>
        </div>
    </div>

    <div class="wrapper home-one single-product-page">


<!-- Shop page wraper -->
           <div class="shop-page-wraper">
               <div class="container">
                   <div class="row">
                       <div class="col-xs-12 col-md-3 sidebar-shop">
                           <div class="sidebar-product-categori">

                               <div class="widget-content">
                                   <ul class="product-categories">
                                     @foreach($menu1 as $r1)
                                         <li class="cat-item">
                                             <a href="{{asset('/san-pham/'.$r1->alias)}}">{{$r1->name}}</a>
                                             <span class="count">({{$r1->total}})</span>
                                         </li>
                                      @endforeach
                                   </ul>
                               </div>

                           </div>
                       </div>
                       <div class="col-xs-12 col-md-9 shop-content">

                           <div class="product-toolbar">
                               <div class="shop-page-product-area tab-content">
                                   <div id="grid" class="tab-pane fade in show active">
                                       <div class="row">
                                         @foreach($shop as $r_shop)
                                         <?php $hinh = json_decode($r_shop->urlhinh,true)?>
                                           <div class="col-sm-6 col-md-4 col-xl-3">
                                               <div class="single-product-area">
                                                   <div class="product-wrapper gridview">
                                                       <div class="list-col4">
                                                           <div class="product-image">
                                                               <a href="{{asset('/san-pham/'.$r_shop->alias.'.html')}}">
                                                                   <img src="{{asset('public/images/product/thumb/'.$hinh[0])}}" alt="{{$r_shop->tensp}}">
                                                               </a>
                                                               <div class="quickviewbtn">
                                                                   <a href="{{asset('/san-pham/'.$r_shop->alias.'.html')}}"  ><i class="ion-eye"></i></a>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="list-col8">
                                                           <div class="product-info">
                                                               <h2><a href="{{asset('/san-pham/'.$r_shop->alias.'.html')}}">{{$r_shop->tensp}}</a></h2>
                                                               <span class="price">
                                                                 @if($r_shop->giakm==0)
                                                                   {{number_format($r_shop->giaban,0)}}
                                                                 @else
                                                                   <del>{{number_format($r_shop->giaban,0)}}</del>
                                                                   {{number_format($r_shop->giakm,0)}}
                                                                 @endif
                                                               </span>
                                                           </div>
                                                           <div class="product-hidden">
                                                               <div class="add-to-cart">
                                                                   <a href="{{asset('/cart/add/'.$r_shop->idsp)}}" rel="{{$r_shop->idsp}}">Thêm vào giỏ hàng</a>
                                                               </div>

                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                        @endforeach
                                       </div>
                                   </div>

                               </div>
                           </div>
                           <nav class="woocommerce-pagination pull-right">
                             {{$shop->render()}}
                               <!-- <ul class="page-numbers">
                                   <li><span aria-current="page" class="page-numbers current">1</span></li>
                                   <li><a class="page-numbers" href="#">2</a></li>
                                   <li><a class="page-numbers" href="#">3</a></li>
                                   <li><a class="page-numbers" href="#">4</a></li>
                                   <li><a class="next page-numbers" href="#">→</a></li>
                               </ul> -->
                           </nav>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Shop page wraper end -->
  </div>

@endsection

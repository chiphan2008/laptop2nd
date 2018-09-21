@inject('LaptopCtrl', 'App\Http\Controllers\LaptopController')
<?php
$row_gen = $LaptopCtrl->getInfo();
$menu1 = $LaptopCtrl->selectCat();
$cart = @session()->get('cart');
$cart_detail = @session()->get('cart_detail');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="content-language" content="vi" />
        @if(empty($keywords))
        <meta name="keywords" content="{{$row_gen['kw']}}">
        @else
        <meta name="keywords" content="{{$keywords}}">
        @endif
        @if(empty($description))
        <meta name="description" content="{{$row_gen['des']}}">
        @else
        <meta name="description" content="{{$description}}">
        @endif
        <meta name="author" content="Laptop 2nd">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
        <title>@if(empty($title)) {{$row_gen['title_index']}} @else {{$title}} @endif </title>

        <link type="text/css" rel="stylesheet" href="{{ asset('/css/app.css') }}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-plugins-call.css')}}">
        <link rel="stylesheet" href="{{asset('css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/colors.css')}}">
        {!! $row_gen['google_analytic'] !!}
        <!-- jQuery CDN -->
        <script src="{{asset('js/jquery-3.2.1.min.js')}}" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="{{asset('js/func.js')}}"></script>

    </head>
    <body>
        <!-- Body main wrapper start -->
        <div class="wrapper home-three home-four">
            <!-- HEADER AREA START -->
            <header class="header-area">

                <!-- Header middle area start -->
                <div class="header-middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-md-12">
                                <!-- site-logo -->
                                <div class="site-logo">
                                    <a href="{{asset('/')}}"><img src="{{asset('/images/logo/logo-black.png')}}" alt="Laptop 2nd"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <!-- header-search -->
                                <div class="header-search clearfix">

                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search product...">
                                            <input type="submit" name="submit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12">
                                <!-- shop-cart-menu -->
                                <div class="shop-cart-menu pull-right">
                                    <ul>
                                        <li><a href="{{route('cart')}}">
                                            <span class="cart-icon">
                                                <i class="ion-bag"></i><sup>{{count($cart)}}</sup>
                                            </span>
                                            <span class="cart-text">
                                                <span class="cart-text-title">Giỏ hàng <br> <strong>{{number_format(@$cart_detail['total'],0)}} đ</strong> </span>
                                            </span>
                                        </a>
                                            @if(count($cart_detail)>0)
                                            <ul>
                                              @foreach($cart_detail as $k=>$v)
                                                @if(is_numeric($k))
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('/images/product/'.$v->urlhinh[0])}}" alt="{{$v->tensp}}"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">{{$v->tensp}}</a></h5>
                                                            <span class="price">{{number_format($v->giaban,0)}}</span>
                                                            <span class="quantaty">Số lượng: {{$v->qty}}</span>
                                                            <span class="cart-remove"><a href="{{asset('/cart/remove/'.$k)}}"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                                <li>
                                                    <div class="shop-cart-btn">
                                                        <a href="{{route('checkout')}}">Thanh toán</a>
                                                        <a href="{{route('cart')}}" class="pull-right">Giỏ hàng</a>
                                                    </div>
                                                </li>
                                            </ul>
                                          @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header middle area end -->
                <!-- Header bottom area start -->
                <div class="header-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 hidden-md hidden-sm pull-left category-wrapper">
                                <div class="categori-menu">
                                <span class="categorie-title">Danh mục sản phẩm</span>
                                <nav>
                                    <ul class="categori-menu-list menu-hidden">
                                      @foreach($menu1 as $r_cat1)
                                        <li>
                                          <a href="{{asset('/danh-muc/'.$r_cat1->alias.'.html')}}">{{$r_cat1->name}}<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <!-- categori Mega-Menu Start -->
                                            <?php $menu2 = $LaptopCtrl->selectCat($r_cat1->idcat); ?>
                                            @if(count($menu2)>0)
                                            <ul class="ht-dropdown megamenu first-megamenu">
                                                @foreach($menu2 as $r_cat2)
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <!-- <li class="menu-tile">Cameras</li> -->
                                                        <li><a href="{{asset('/danh-muc/'.$r_cat2->alias.'.html')}}">{{$r_cat2->name}}</a></li>
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                            <!-- categori Mega-Menu End -->
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            </div>
                            <div class="col-lg-9">
                                <!-- main-menu -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <!-- <li class="current"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home Shop 1</a></li>
                                                    <li><a href="index-2.html">Home Shop 2</a></li>
                                                    <li><a href="index-3.html">Home Shop 3</a></li>
                                                    <li><a href="index-4.html">Home Shop 4</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="{{asset('/')}}">Trang chủ</a></li>
                                            <li><a href="{{route('about')}}">Giới thiệu</a></li>
                                            <li><a href="{{route('shop')}}">Sản phẩm</a></li>
                                            <li><a href="{{route('tech')}}">Công nghệ</a></li>
                                            <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                          </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu-area">
                                    <div class="mobile-menu">
                                        <nav id="mobile-menu-active">
                                            <ul class="menu-overflow">
                                              <li><a href="{{asset('/')}}">Trang chủ</a></li>
                                              <li><a href="{{route('about')}}">Giới thiệu</a></li>
                                              <li><a href="{{route('shop')}}">Sản phẩm</a></li>
                                              <li><a href="{{route('tech')}}">Công nghệ</a></li>
                                              <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header bottom area end -->
            </header>
            <!-- HRADER AREA END -->

          @yield('content')
          <script src="{{asset('js/app.js')}}"></script>

                        <footer class="footer-area">
                            <!-- newsletter area -->
                            <div class="newsletter-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-xl-12">
                                            <div class="newsletter-text">
                                                <div class="icon"><i class="icon ion-email"></i></div>
                                                <h3>Sign Up To Newsletter</h3>
                                                <h4>..and Receive $29 Coupon For First Shopping</h4>
                                            </div>
                                            <div class="newsletter">
                                                <div class="newsletter-box">
                                                     <form action="#">
                                                          <input class="subscribe" placeholder="your email address" name="email" id="subscribe" type="email">
                                                          <button type="submit" class="submit">subscribe!</button>
                                                     </form>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- newsletter area end -->
                            <!-- footer main -->
                            <div class="footer-main">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                                            <div class="footer-logo-area">
                                            {!! $row_gen['footer'] !!}

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                                            <div class="footer-menu">
                                            {!! $row_gen['contact'] !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12">
                                            <div class="footer-menu">
                                            <div id="fb-root"></div>
                                            <script>(function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                            fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-like-box" data-href="{{$row_gen['fb']}}" data-width="500" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- footer main end -->
                            <!-- footer copyright area -->
                            <div class="footer-copyright-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 col-md-6">
                                            <p>{!! $row_gen['copyright'] !!}</p>
                                        </div>
                                        <!-- <div class="col-sm-12 col-lg-6 col-md-6 pull-right">
                                            <img src="images/icons/payment-icon.png" alt="payment icon">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- footer copyright area end -->
                        </footer>
                        <!-- QUICKVIEW PRODUCT START -->

                        <!-- QUICKVIEW PRODUCT END -->


          </div>


        <!-- <script>window.jQuery || document.write('<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>')</script> -->

        <!-- Popper min js -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap min js  -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- nivo slider pack js  -->
        <script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
        <!-- All plugins here -->
        <script src="{{asset('js/plugins.js')}}"></script>

        <!-- Main js  -->
        <script src="{{asset('js/main.js')}}"></script>


    </body>

</html>

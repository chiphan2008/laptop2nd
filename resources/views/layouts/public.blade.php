<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo.png">
        <title>Laptop2nd</title>

        <link type="text/css" rel="stylesheet" href="{{ asset('/css/app.css') }}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-plugins-call.css')}}">
        <link rel="stylesheet" href="{{asset('css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/colors.css')}}">
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
                                    <a href="index.html"><img src="images/logo/logo-black.png" alt="Nikado"></a>
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
                                        <li><a href="#">
                                            <span class="cart-icon">
                                                <i class="ion-bag"></i><sup>3</sup>
                                            </span>
                                            <span class="cart-text">
                                                <span class="cart-text-title">My cart <br> <strong>$ 145.00</strong> </span>
                                            </span>
                                        </a>
                                            <ul>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="images/product/1.jpg" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">sport t-shirt men</a></h5>
                                                            <span class="price">£515.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="images/product/2.jpg" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">sport coat amet</a></h5>
                                                            <span class="price">£100.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="images/product/3.jpg" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">Pellentesque men</a></h5>
                                                            <span class="price">£265.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- shop-cart-total -->
                                                    <div class="shop-cart-total">
                                                        <p>Subtotal: <span class="pull-right">£880.00</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cart-btn">
                                                        <a href="checkout.html">Checkout</a>
                                                        <a href="cart.html" class="pull-right">View Cart</a>
                                                    </div>
                                                </li>
                                            </ul>
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
                                        <li><a href="shop.html"><span><img src="images/icons/1.png" alt="menu-icon"></span>Electronics<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <!-- categori Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu first-megamenu">
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Cameras</li>
                                                        <li><a href="shop.html">Cords and Cables</a></li>
                                                        <li><a href="shop.html">gps accessories</a></li>
                                                        <li><a href="shop.html">Microphones</a></li>
                                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Digital Cameras</li>
                                                        <li><a href="shop.html">Camera one</a></li>
                                                        <li><a href="shop.html">Camera two</a></li>
                                                        <li><a href="shop.html">Camera three</a></li>
                                                        <li><a href="shop.html">Camera four</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Digital Cameras</li>
                                                        <li><a href="shop.html">Camera one</a></li>
                                                        <li><a href="shop.html">Camera two</a></li>
                                                        <li><a href="shop.html">Camera three</a></li>
                                                        <li><a href="shop.html">Camera four</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                            </ul>
                                            <!-- categori Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/2.png" alt="menu-icon"></span>Fashion<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <!-- categori Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu megamenu-two">
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Men’s Fashion</li>
                                                        <li><a href="shop.html">Blazers</a></li>
                                                        <li><a href="shop.html">Boots</a></li>
                                                        <li><a href="shop.html">pants</a></li>
                                                        <li><a href="shop.html">Tops & Tees</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Women’s Fashion</li>
                                                        <li><a href="shop.html">Bags</a></li>
                                                        <li><a href="shop.html">Bottoms</a></li>
                                                        <li><a href="shop.html">Shirts</a></li>
                                                        <li><a href="shop.html">Tailored</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                            </ul>
                                            <!-- categori Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/3.png" alt="menu-icon"></span>Home & Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <!-- categori Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu megamenu-two">
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Large Appliances</li>
                                                        <li><a href="shop.html">Armchairs</a></li>
                                                        <li><a href="shop.html">Bunk Bed</a></li>
                                                        <li><a href="shop.html">Mattress</a></li>
                                                        <li><a href="shop.html">Sideboard</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Small Appliances</li>
                                                        <li><a href="shop.html">Bootees Bags</a></li>
                                                        <li><a href="shop.html">Jackets</a></li>
                                                        <li><a href="shop.html">Shelf</a></li>
                                                        <li><a href="shop.html">Shoes</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                            </ul>
                                            <!-- categori Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/4.png" alt="menu-icon"></span>Phones & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                    </a>
                                            <!-- categori Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu megamenu-two">
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Tablet</li>
                                                        <li><a href="shop.html">tablet one</a></li>
                                                        <li><a href="shop.html">tablet two</a></li>
                                                        <li><a href="shop.html">tablet three</a></li>
                                                        <li><a href="shop.html">tablet four</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Smartphone</li>
                                                        <li><a href="shop.html">phone one</a></li>
                                                        <li><a href="shop.html">phone two</a></li>
                                                        <li><a href="shop.html">phone three</a></li>
                                                        <li><a href="shop.html">phone four</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                            </ul>
                                            <!-- categori Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/5.png" alt="menu-icon"></span>TV & Video<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <!-- categori Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu megamenu-two">
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Gaming Desktops</li>
                                                        <li><a href="shop.html">Alpha Desktop</a></li>
                                                        <li><a href="shop.html">rober Desktop</a></li>
                                                        <li><a href="shop.html">Ultra Desktop </a></li>
                                                        <li><a href="shop.html">beta desktop</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Women’s Fashion</li>
                                                        <li><a href="shop.html">3D-Capable</a></li>
                                                        <li><a href="shop.html">Clearance</a></li>
                                                        <li><a href="shop.html">Free Shipping Eligible</a></li>
                                                        <li><a href="shop.html">On Sale</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Single Column End -->
                                            </ul>
                                            <!-- categori Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/6.png" alt="menu-icon"></span>Beauty</a>
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/7.png" alt="menu-icon"></span>Sport & tourism</a>
                                        </li>
                                        <li><a href="shop.html"><span><img src="images/icons/8.png" alt="menu-icon"></span>Fruits & Veggies</a></li>
                                        <li><a href="shop.html"><span><img src="images/icons/9.png" alt="menu-icon"></span>Computer & Laptop</a></li>
                                        <li><a href="shop.html"><span><img src="images/icons/10.png" alt="menu-icon"></span>Meat & Seafood</a></li>
                                        <li><a href="shop.html"><span><img src="images/icons/12.png" alt="menu-icon"></span>Samsung</a></li>
                                        <li><a href="shop.html"><span><img src="images/icons/11.png" alt="menu-icon"></span>Sanyo</a></li>
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
                                            <li><a href="#">Trang chủ</a></li>
                                            <li><a href="#">Giới thiệu</a></li>
                                            <li><a href="#">Sản phẩm</a></li>
                                            <li><a href="#">Tin tức</a></li>
                                            <li><a href="#">Liên hệ</a></li>
                                          </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu-area">
                                    <div class="mobile-menu">
                                        <nav id="mobile-menu-active">
                                            <ul class="menu-overflow">
                                              <li><a href="#">Trang chủ</a></li>
                                              <li><a href="#">Giới thiệu</a></li>
                                              <li><a href="#">Sản phẩm</a></li>
                                              <li><a href="#">Tin tức</a></li>
                                              <li><a href="#">Liên hệ</a></li>
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
                                                <ul>
                                                    <li>
                                                        <h4>Contact info:</h4>
                                                        <p>169-C, Technohub, Dubai Silicon Oasis.</p>
                                                    </li>
                                                    <li>
                                                        <h4>Telephone:</h4>
                                                        <p>(+011) 123 777 8888 - (+011) 123 888 9999</p>
                                                    </li>
                                                    <li>
                                                        <h4>Email:</h4>
                                                        <p>Support@example.com</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                                            <div class="footer-menu">
                                                <h3>Customer Service</h3>
                                                <ul>
                                                    <li><a href="#">Contact Us</a></li>
                                                    <li><a href="#">Returns</a></li>
                                                    <li><a href="#">Order History</a></li>
                                                    <li><a href="#">Site Map</a></li>
                                                    <li><a href="#">Testimonials</a></li>
                                                    <li><a href="#">My Account</a></li>
                                                    <li><a href="#">Unsubscribe Notification</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                                            <div class="footer-menu">
                                                <h3>Information</h3>
                                                <ul>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Delivery infomation</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                    <li><a href="#">Terms & Conditions</a></li>
                                                    <li><a href="#">Warranty</a></li>
                                                    <li><a href="#">FAQ</a></li>
                                                    <li><a href="#">Seller Login</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                                            <div class="footer-menu">
                                                <h3>Extras</h3>
                                                <ul>
                                                    <li><a href="#">Brands</a></li>
                                                    <li><a href="#">Gift Vouchers</a></li>
                                                    <li><a href="#">Affiliates</a></li>
                                                    <li><a href="#">Wishlist</a></li>
                                                    <li><a href="#">Order History</a></li>
                                                    <li><a href="#">Track Your Order</a></li>
                                                </ul>
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
                                            <p>Copyright © 2018 Bege . All Rights Reserved.</p>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-md-6 pull-right">
                                            <img src="images/icons/payment-icon.png" alt="payment icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer copyright area end -->
                        </footer>
                        <!-- QUICKVIEW PRODUCT START -->
                        <div id="quickview-wrapper">
                            <!-- Modal -->
                            <div class="modal fade" id="product_modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-btn">
                                            <button class="close" data-dismiss="modal">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <!-- Single product area -->
                                           <div class="single-product-area">
                                               <div class="container-fullwidth">
                                                   <div class="single-product-wrapper">
                                                       <div class="row">
                                                           <div class="col-xs-12 col-md-7 col-lg-7">
                                                                <div class="product-details-img-content">
                                                                    <div class="product-details-tab mr-40">
                                                                        <div class="product-details-large tab-content">
                                                                            <div class="tab-pane active" id="pro-details1">
                                                                                <div class="product-popup">
                                                                                    <a href="images/product/single/product4.jpg">
                                                                                        <img src="images/product/single/product4.jpg" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="pro-details2">
                                                                                <div class="product-pop">
                                                                                    <a href="#">
                                                                                        <img src="images/product/single/product5.jpg" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="pro-details3">
                                                                                <div class="product-pop">
                                                                                    <a href="#">
                                                                                        <img src="images/product/single/product6.jpg" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="pro-details4">
                                                                                <div class="product-pop">
                                                                                    <a href="#">
                                                                                        <img src="images/product/single/product7.jpg" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="pro-details5">
                                                                                <div class="product-pop">
                                                                                    <a href="#">
                                                                                        <img src="images/product/single/product8.jpg" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-details-small nav product-dec-slider-qui owl-carousel">
                                                                            <a class="active" href="#pro-details1">
                                                                                <img src="images/product/thumbnails/product4.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details2">
                                                                                <img src="images/product/thumbnails/product5.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details3">
                                                                                <img src="images/product/thumbnails/product6.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details4">
                                                                                <img src="images/product/thumbnails/product7.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details5">
                                                                                <img src="images/product/thumbnails/product8.jpg" alt="">
                                                                            </a>
                                                                            <a class="active" href="#pro-details1">
                                                                                <img src="images/product/thumbnails/product4.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details2">
                                                                                <img src="images/product/thumbnails/product5.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details3">
                                                                                <img src="images/product/thumbnails/product6.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details4">
                                                                                <img src="images/product/thumbnails/product7.jpg" alt="">
                                                                            </a>
                                                                            <a href="#pro-details5">
                                                                                <img src="images/product/thumbnails/product8.jpg" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </div>
                                                           <div class="col-xs-12 col-md-5 col-lg-5">
                                                               <div class="single-product-info">
                                                                   <h1>Sit voluptatem</h1>

                                                                    <span class="price">
                                                                        <del>$ 77.00</del> $ 66.00
                                                                    </span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                    <div class="box-quantity d-flex">
                                                                        <form action="#">
                                                                            <input class="quantity mr-40" min="1" value="1" type="number">
                                                                        </form>
                                                                        <a class="add-cart" href="cart.html">add to cart</a>
                                                                    </div>
                                                                    <div class="wishlist-compear-area">
                                                                        <a href="wishlist.html"><i class="ion-ios-heart-outline"></i> Add to Wishlist</a>
                                                                        <a href="#"><i class="ion-ios-loop-strong"></i> Compare</a>
                                                                    </div>
                                                                    <div class="product_meta">
                                                                        <span class="posted_in">Categories: <a href="#" rel="tag">Accessories</a>, <a href="#" rel="tag">Clothings</a></span>
                                                                    </div>
                                                                    <div class="single-product-sharing">
                                                                        <div class="widget widget_socialsharing_widget">
                                                                            <h3 class="widget-title">Share this product</h3>
                                                                            <ul class="social-icons">
                                                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                            <!-- Single product area end -->
                                        </div>
                                    </div><!-- .modal-content -->
                                </div><!-- .modal-dialog -->
                            </div><!-- END Modal -->
                        </div>
                        <!-- QUICKVIEW PRODUCT END -->


          </div>
        <script src="{{asset('js/app.js')}}"></script>
        <!-- jQuery CDN -->
        <script src="{{asset('js/jquery-3.2.1.min.js')}}" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

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

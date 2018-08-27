@extends("layouts.public")

@section("content")

<div class="slider-area">
            <div class="slider-area-inner">

              <div class="slider-inner">
                <div id="mainSlider" class="nivoSlider nevo-slider">
                @foreach($row_slider as $r)
                <img src="{{asset('images/slider/'.$r['urlhinh'])}}" alt="{{$r['ten']}}" title="#htmlcaption{{$r['id']}}" />
                @endforeach
                </div>
                @foreach($row_slider as $r)
                <div id="htmlcaption{{$r['id']}}" class="nivo-html-caption slider-caption">
                      <div class="slider-progress"></div>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="slider-content slider-content-{{$r['id']}} slider-animated-{{$r['id']}}" >
                            {!! $r['content'] !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
                
              </div>

            </div>
            </div>

<!-- end slider-area -->
        <div class="home-four-banner-area">
              <div class="container">
                  <div class="row">
                  @foreach($row_banner as $k=>$r)
                    @if($k<4)
                    <div class="four-fast col-sm-6 col-lg-3 col-md-6 col-xs-12">
                                    <div class="four-single-banner-text">
                                        <div class="four-banner-img">
                                            <a href="{{$r['link']}}">
                                                <img src="images/banner/{{$r['urlhinh']}}" alt="{{$r['name']}}" />
                                            </a>
                                        </div>
                                        <div class="four-banner-text">
                                            <h3>{{$r['name']}}</h3>
                                        </div>
                                    </div>
                                </div>
                    @endif
                  @endforeach
                  
                  </div>
              </div>
            </div>

            
            <div class="home-fullwidth-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{$row_banner[4]['link']}}">
                                <img src="images/banner/{{$row_banner[4]['urlhinh']}}" alt="{{$row_banner[4]['name']}}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start product -->
            <div class="product-area">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="section-title">
                              <h3>Sản phẩm mới</h3>
                          </div>
                      </div>
                  </div>
                  <div class="product-area-inner">
                      <div class="row">
                          <div class="home-two-product-carousel-active owl-carousel">
                              <div class="col-sm-12">
                                <!-- {/*single product*/} -->
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/1.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/2.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Nulla sed libero</a></h2>
                                                  <span class="price">
                                                      $ 45.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <span class="onsale">Sale!</span>
                                                      <img src="images/product/3.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                                  <span class="price">
                                                      $ 100.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/4.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Tincidunt malesuada</a></h2>
                                                  <span class="price">
                                                      <del>$ 80.00</del> $ 50.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/5.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                                  <span class="price">
                                                      $ 45.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <span class="onsale">Sale!</span>
                                                      <img src="images/product/6.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Kaoreet lobortis</a></h2>
                                                  <span class="price">
                                                      $ 95.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/7.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Aliquam lobortis est</a></h2>
                                                  <span class="price">
                                                      $ 80.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <span class="onsale">Sale!</span>
                                                      <img src="images/product/8.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/9.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Phasellus vel hendrerit</a></h2>
                                                  <span class="price">
                                                      $ 55.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <span class="onsale">Sale!</span>
                                                      <img src="images/product/10.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Auctor gravida enim</a></h2>
                                                  <span class="price">
                                                      <del>$ 85.00</del> $ 75.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/11.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/12.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/13.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/1.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-sm-12">


                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/2.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/3.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="cart.html">Add to cart</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>


                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <!-- end product -->
            <div class="brand-logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="four-brand-carousel-active owl-carousel">
                            @foreach($row_brand as $r)
                            <div class="brand-logo">
                                    <a href="{{$r['link']}}"><img style="height:100px" src="images/slider/{{$r['urlhinh']}}" alt="{{$r['ten']}}" /></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end banner static -->
    <!-- end banner -->
    <div class="product-carosel-area">
              <div class="container">
                  <div class="row">

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm bán chạy</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/18.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Itaque earum</a></h2>
                                                  <span class="price">
                                                      $ 866.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/19.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Nostrum exercita</a></h2>
                                                  <span class="price">
                                                      $ 550.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/20.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Consequuntur magni</a></h2>
                                                  <span class="price">
                                                      $ 366.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/21.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Porro quisquam</a></h2>
                                                  <span class="price">
                                                      $ 88.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/22.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/1.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/2.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/3.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/4.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/5.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/6.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/7.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm được quan tâm</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/6.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Duis pulvinar</a></h2>
                                                  <span class="price">
                                                      $ 84.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/7.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Porro quisquam</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 68.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/8.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Laudantium</a></h2>
                                                  <span class="price">
                                                      $ 75.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/9.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Nullam maximus</a></h2>
                                                  <span class="price">
                                                      $ 95.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/10.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Nemo enim</a></h2>
                                                  <span class="price">
                                                      $ 55.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/11.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Natus erro</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/12.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Epicuri per</a></h2>
                                                  <span class="price">
                                                      $ 88.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/13.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/14.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Auctor gravida enim</a></h2>
                                                  <span class="price">
                                                       $ 63.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/15.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Nulla sed libero</a></h2>
                                                  <span class="price">
                                                      $ 86.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/16.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                                  <span class="price">
                                                      $ 78.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/17.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm đề xuất</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/1.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Donec tempus</a></h2>
                                                  <span class="price">
                                                      $ 82.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/2.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sed tempor</a></h2>
                                                  <span class="price">
                                                      <del>$ 87.00</del> $ 80.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/3.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Cras neque</a></h2>
                                                  <span class="price">
                                                      $ 70.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/4.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Pellentesque ultricies</a></h2>
                                                  <span class="price">
                                                      $ 85.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/5.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Vestibulum suscipit</a></h2>
                                                  <span class="price">
                                                      $ 84.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/6.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Nemo enim</a></h2>
                                                  <span class="price">
                                                      $ 220.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/7.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Epicuri per</a></h2>
                                                  <span class="price">
                                                      $ 152.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/8.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="mini-product-listview">

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/9.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Laudantium</a></h2>
                                                  <span class="price">
                                                      $ 86.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/10.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Porro quisquam</a></h2>
                                                  <span class="price">
                                                      $ 68.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/11.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/mini/12.jpg" alt="" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                  <span class="price">
                                                      <del>$ 77.00</del> $ 66.00
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="cart.html">Add to cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        <!-- end product -->


          <!-- Body main wrapper end -->
@endsection

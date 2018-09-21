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
                              <?php $i=0; ?>
                              @while($i<count($row_new_product))
                              <div class="col-sm-12">
                                <!-- {/*single product*/} -->
                                @foreach($row_new_product as $r_new_product)
                                <?php
                                  $hinh = json_decode($r_new_product->urlhinh,true);
                                ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/{{$hinh[0]}}" alt="{{$r_new_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">{{$r_new_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      <del>{{number_format($r_new_product->giaban,0)}}</del>
                                                      {{number_format($r_new_product->gianhap,0)}}
                                                  </span>
                                              </div>
                                              <div class="product-hidden">
                                                  <div class="add-to-cart">
                                                      <a href="{{asset('/cart/add/'.$r_new_product->idsp)}}" rel="{{$r_new_product->idsp}}">Thêm vào giỏ hàng</a>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php $i++;if($i%2==0) break; ?>
                                @endforeach
                              </div>
                              @endwhile
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
                            <?php $i=0; ?>
                            @while($i<count($row_selling_product))
                              <div class="mini-product-listview">
                                @foreach($row_selling_product as $r_selling_product)
                                <?php
                                  $hinh = json_decode($r_selling_product->urlhinh,true);
                                ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/thumbnail/{{$hinh[0]}}" alt="{{$r_selling_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">{{$r_selling_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      {{number_format($r_selling_product->giaban,0)}}
                                                  </span>
                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="{{asset('/cart/add/'.$r_selling_product->idsp)}}" rel="{{$r_selling_product->idsp}}">Thêm vào giỏ hàng</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php $i++;if($i%4==0) break; ?>
                                @endforeach
                              </div>
                            @endwhile
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm được quan tâm</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                            <?php $i=0; ?>
                            @while($i<count($row_view_product))
                              <div class="mini-product-listview">
                                @foreach($row_view_product as $r_view_product)
                                <?php
                                  $hinh = json_decode($r_view_product->urlhinh,true);
                                ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/thumbnail/{{$hinh[0]}}" alt="{{$r_view_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">{{$r_view_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      {{number_format($r_view_product->giaban,0)}}
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="{{asset('/cart/add/'.$r_view_product->idsp)}}"  rel="{{$r_view_product->idsp}}">Thêm vào giỏ hàng</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php $i++;if($i%4==0) break; ?>
                                @endforeach
                              </div>
                            @endwhile
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm đề xuất</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                              <?php $i=0; ?>
                              @while($i<count($row_highlight_product))
                              <div class="mini-product-listview">
                                  @foreach($row_highlight_product as $r_highlight_product)
                                  <?php
                                    $hinh = json_decode($r_highlight_product->urlhinh,true);
                                  ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="#">
                                                      <img src="images/product/thumbnail/{{$hinh[0]}}" alt="{{$r_highlight_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="single-product.html">{{$r_highlight_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      {{number_format($r_highlight_product->giaban,0)}}
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="{{asset('/cart/add/'.$r_highlight_product->idsp)}}" rel="{{$r_highlight_product->idsp}}">Thêm vào giỏ hàng</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php $i++;if($i%4==0) break; ?>
                                  @endforeach
                              </div>
                              @endwhile
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        <!-- end product -->

        <script type="text/javascript">
        var obj;
        jQuery(function(){
            jQuery(".add_cart").click(function(event) {
              var idsp=jQuery(this).attr("rel");
              url = "{{asset('/cart/add')}}/"+idsp;
              jQuery.get(url,null,function(data){
                console.log(data);
              });
            });
        });
        </script>
          <!-- Body main wrapper end -->
@endsection

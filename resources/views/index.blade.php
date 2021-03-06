@extends("layouts.public")

@section("content")

<div class="slider-area">
            <div class="slider-area-inner">

              <div class="slider-inner">
                <div id="mainSlider" class="nivoSlider nevo-slider">
                @foreach($row_slider as $r)
                <img src="{{asset('public/images/slider/'.$r['urlhinh'])}}" alt="{{$r['ten']}}" title="#htmlcaption{{$r['id']}}" />
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
                                                <img src="{{asset('public/images/banner/'.$r['urlhinh'])}}" alt="{{$r['name']}}" />
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
                                <img src="{{asset('public/images/banner/'.$row_banner[4]['urlhinh'])}}" alt="{{$row_banner[4]['name']}}" />
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
                              @for($i=0;$i<16;$i+=2)
                              <div class="col-sm-12">
                                <!-- {/*single product*/} -->
                                @for($j=$i;$j<count($row_new_product);$j++)
                                <?php
                                  $r_new_product = $row_new_product[$j];
                                  $hinh = json_decode($r_new_product->urlhinh,true);
                                ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper gridview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="{{asset('/san-pham/'.$r_new_product->alias.'.html')}}">
                                                      <img src="{{asset('public/images/product/thumb/'.$hinh[0])}}" alt="{{$r_new_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="{{asset('/san-pham/'.$r_new_product->alias.'.html')}}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="{{asset('/san-pham/'.$r_new_product->alias.'.html')}}">{{$r_new_product->tensp}}</a></h2>
                                                  <span class="price">
                                                    @if($r_new_product->giakm==0)
                                                      {{number_format($r_new_product->giaban,0)}}
                                                    @else
                                                      <del>{{number_format($r_new_product->giaban,0)}}</del>
                                                      {{number_format($r_new_product->giakm,0)}}
                                                    @endif
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
                                <?php if(($j+1-$i)%2==0) break; ?>
                                @endfor
                              </div>
                              @endfor
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
                                    <a href="{{$r['link']}}"><img style="height:100px" src="{{asset('public/images/slider/'.$r['urlhinh'])}}" alt="{{$r['ten']}}" /></a>
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
                            @for($i=0;$i<12;$i=$i+4)

                              <div class="mini-product-listview">
                                @for($j=$i;$j<count($row_selling_product);$j++)
                                <?php
                                  $r_selling_product = $row_selling_product[$j];
                                  $hinh = json_decode($r_selling_product->urlhinh,true);
                                ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="{{asset('/san-pham/'.$r_selling_product->alias.'.html')}}">
                                                      <img src="{{asset('public/images/product/thumbnail/'.$hinh[0])}}" alt="{{$r_selling_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="{{asset('/san-pham/'.$r_selling_product->alias.'.html')}}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="{{asset('/san-pham/'.$r_selling_product->alias.'.html')}}">{{$r_selling_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      @if($r_selling_product->giakm==0)
                                                        {{number_format($r_selling_product->giaban,0)}}
                                                      @else
                                                        <del>{{number_format($r_selling_product->giaban,0)}}</del>
                                                        {{number_format($r_selling_product->giakm,0)}}
                                                      @endif
                                                  </span>
                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="{{asset('/cart/add/'.$r_selling_product->idsp)}}" rel="{{$r_selling_product->idsp}}">Thêm vào giỏ hàng</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php if(($j+1-$i)%4==0) break; ?>
                                @endfor
                              </div>
                            @endfor
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm được quan tâm</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                            @for($i=0;$i<12;$i=$i+4)
                              <div class="mini-product-listview">
                                @for($j=$i;$j<count($row_view_product);$j++)
                                <?php
                                  $r_view_product = $row_view_product[$j];
                                  $hinh = json_decode($r_view_product->urlhinh,true);
                                ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="{{asset('/san-pham/'.$r_view_product->alias.'.html')}}">
                                                      <img src="{{asset('public/images/product/thumbnail/'.$hinh[0])}}" alt="{{$r_view_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="{{asset('/san-pham/'.$r_view_product->alias.'.html')}}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="{{asset('/san-pham/'.$r_view_product->alias.'.html')}}">{{$r_view_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      @if($r_view_product->giakm==0)
                                                        {{number_format($r_view_product->giaban,0)}}
                                                      @else
                                                        <del>{{number_format($r_view_product->giaban,0)}}</del>
                                                        {{number_format($r_view_product->giakm,0)}}
                                                      @endif
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="{{asset('/cart/add/'.$r_view_product->idsp)}}"  rel="{{$r_view_product->idsp}}">Thêm vào giỏ hàng</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php if(($j+1-$i)%4==0) break; ?>
                                @endfor
                              </div>
                            @endfor
                          </div>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-xl-4">
                          <div class="home-three-mini-product">
                          <div class="section-title">
                              <h3>Sản phẩm đề xuất</h3>
                          </div>
                          <div class="mini-product carosel-next-prive owl-carousel">
                              @for($i=0;$i<12;$i=$i+4)
                              <div class="mini-product-listview">
                                  @for($j=$i;$j<count($row_highlight_product);$j++)
                                  <?php
                                    $r_highlight_product = $row_highlight_product[$j];
                                    $hinh = json_decode($r_highlight_product->urlhinh,true);
                                  ?>
                                  <div class="single-product-area">
                                      <div class="product-wrapper listview">
                                          <div class="list-col4">
                                              <div class="product-image">
                                                  <a href="{{asset('/san-pham/'.$r_highlight_product->alias.'.html')}}">
                                                      <img src="{{asset('public/images/product/thumbnail/'.$hinh[0])}}" alt="{{$r_highlight_product->tensp}}" />
                                                  </a>
                                                  <div class="quickviewbtn">
                                                      <a href="{{asset('/san-pham/'.$r_highlight_product->alias.'.html')}}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="list-col8">
                                              <div class="product-info">
                                                  <h2><a href="{{asset('/san-pham/'.$r_highlight_product->alias.'.html')}}">{{$r_highlight_product->tensp}}</a></h2>
                                                  <span class="price">
                                                      @if($r_highlight_product->giakm==0)
                                                        {{number_format($r_highlight_product->giaban,0)}}
                                                      @else
                                                        <del>{{number_format($r_highlight_product->giaban,0)}}</del>
                                                        {{number_format($r_highlight_product->giakm,0)}}
                                                      @endif
                                                  </span>

                                              </div>
                                              <div class="add-to-cart">
                                                  <a href="{{asset('/cart/add/'.$r_highlight_product->idsp)}}" rel="{{$r_highlight_product->idsp}}">Thêm vào giỏ hàng</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php if(($j+1-$i)%4==0) break; ?>
                                  @endfor
                              </div>
                              @endfor
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
                //console.log(data);
              });
            });
        });
        </script>
          <!-- Body main wrapper end -->
@endsection

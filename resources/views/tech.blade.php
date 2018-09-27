@extends("layouts.public")

@section("content")
<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span class="separator">/</span> Công nghệ
                </nav>
            </div>
        </div>
        </div>
    </div>

    <div class="wrapper home-one">
        <!-- cart page content -->
        <div class="blog-page-area" style="padding-top:20px">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-9">
                        <div class="page-content blog-page blog-sidebar right-sidebar blog-text-align">
                          @foreach($tech as $r_news)
                            <!-- blog post -->
                            <article class="text-center">
                                <div class="blog-entry-header">
                                    <h1><a href="{{asset('/cong-nghe/'.$r_news->alias.'.html')}}">{{$r_news->tieude}}</a></h1>
                                    <div class="post-meta">
                                        <div class="post-date">
                                          <i class="fa fa-calendar"></i>{{date('d-m-Y H:m:s', strtotime($r_news->create_at))}}
                                        </div>
                                    </div>
                                </div>
                                <div class="post-thumbnail">
                                    <a href="{{asset('/cong-nghe/'.$r_news->alias.'.html')}}"><img src="{{asset('public/images/news/'.$r_news->urlhinh)}}" alt="{{$r_news->tieude}}"></a>
                                </div>
                                <div class="postinfo-wrapper">
                                    <p>{{$r_news->tomtat}}</p>
                                    <a class="readmore button" href="{{asset('/cong-nghe/'.$r_news->alias.'.html')}}">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </article>
                            <!-- blog post end -->
                          @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="clearfix mb-20 pull-right">
                                  {{$tech->render()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="blog_sidebar">
                            <div class="row_products_side">
                                <div class="product_left_sidbar">
                                    <!-- <div class="product-filter  mb-30">
                                      <h5>Search </h5>
                                      <div class="search__sidbar">
                                         <div class="input_form">
                                            <input type="text" id="search_input" name="s" value="Search..." class="input_text">
                                            <button id="blogsearchsubmit" type="submit" class="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                         </div>
                                      </div>
                                    </div> -->
                                    <div class="product-filter  mb-30">
                                      <h5>Tin được quan tâm </h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                              @foreach($rand as $r_view)
                                                <li><a href="{{asset('/cong-nghe/'.$r_view->alias.'.html')}}">
                                                  <img class="pull-left" style="margin-right:7px;width:70px" src="{{asset('public/images/news/'.$r_view->urlhinh)}}" alt="{{$r_view->tieude}}"  />
                                                  {{$r_view->tieude}}
                                                </a></li>
                                              @endforeach
                                            </ul>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart page content end -->
    </div>

@endsection

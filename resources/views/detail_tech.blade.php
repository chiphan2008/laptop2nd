@extends("layouts.public")

@section("content")
@foreach($tech as $r_news)
<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span class="separator">/</span>
                    <a href="{{asset('/cong-nghe.html')}}">Công nghệ</a>
                    <span class="separator">/</span> {{$r_news->tieude}}
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
                        <div class="single-blog page-content blog-page blog-sidebar right-sidebar">

                            <!-- blog post -->
                            <article class="text-center">
                                    <div class="blog-entry-header">
                                        <h1>{{$r_news->tieude}}</h1>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{date('d/m/Y H:m:s',strtotime($r_news->create_at))}} </a>
                                        </div>
                                    </div>

                                    <div class="postinfo-wrapper">
                                        {!! $r_news->noidung !!}
                                    </div>
                                </article>
                            <!-- blog post end -->
                          @endforeach


                          <div class="relatedposts">
                                    <h3>Bài viết liên quan</h3>
                                    <div class="row">
                                      @foreach($other_tech as $r_other)
                                        <!-- related post -->
                                        <div class="relatedthumb col-md-4 col-sm-6">
                                            <div class="image">
                                                <img src="{{asset('images/news/'.$r_other->urlhinh)}}" alt="{{$r_other->tieude}}">
                                            </div>
                                            <h4><a rel="external" href="single-blog.html">{{$r_other->tieude}}</a></h4>
                                            <span class="post-date"> {{date('d/m/Y H:m:s',strtotime($r_other->create_at))}} </span>
                                        </div>
                                        <!-- related post end -->
                                      @endforeach
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
                                                  <img class="pull-left" style="margin-right:7px;width:70px" src="{{asset('/images/news/'.$r_view->urlhinh)}}" alt="{{$r_view->tieude}}"  />
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

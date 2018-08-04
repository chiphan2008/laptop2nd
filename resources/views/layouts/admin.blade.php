<?php
$user = session()->get('user');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Administrator </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

   <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASulEnnbaigVNev_MwNTJrdu32ddguhkA&sensor=false">
    </script> -->
    <!-- Custom Theme Style -->
    <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet" />
    
    <link href="{{asset('css/jquery.filer.css')}}" rel="stylesheet" />
    <link href="{{asset('css/jquery.filer-dragdropbox-theme.css')}}" rel="stylesheet" />
    
	  <?php date_default_timezone_set('Asia/Ho_Chi_Minh');?>
    <!-- jQuery -->
    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/ckfinder/ckfinder.js')}}"></script>
    
    
    <style type="text/css">
           
    .inpput{width:99%; border:1px solid #DDD; padding:5px}
    #mapCanvas {
        width: 60%;
        height: 500px;
        float: left;
    }
    #infoPanel 
    {
        width:35%;
        float: left;
        margin-left: 10px;
    }
    #infoPanel div {
        margin-bottom: 5px;
    }
    .huongdan{margin-top:10px; border:1px solid #DDD; background:#EEE; line-height:200%; font-size:15px; color:#f00; padding:20px; text-align:center;}
    
        
    .file_input{
        display: inline-block;
        padding: 10px 16px;
        outline: none;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        white-space: nowrap;
        font-family: sans-serif;
        font-size: 11px;
        font-weight: bold;
        border-radius: 3px;
        color: #008BFF;
        border: 1px solid #008BFF;
        vertical-align: middle;
        background-color: #fff;
        margin-bottom: 10px;
        box-shadow: 0px 1px 5px rgba(0,0,0,0.05);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
    }
    .file_input:hover,
    .file_input:active {
        background: #008BFF;
        color: #fff;
        text-decoration: none;
    }
	.item_trich{ height:100px; float:left; margin-right:5px; border:1px solid #CCC; padding:5px; position:relative; margin-bottom:5px;}
	.item_trich img{ height: 100%;}
	.change_stt{ position:absolute; bottom:0px; right:0px; z-index:999; background:#FFF; padding:5px;}
	.loader_trich{ display:none; position:absolute; top:37px; left:37px;}
</style>
    <script>
    var j = jQuery.noConflict();
    //ckeditor
    j(document).ready(function() {
          j('.ck_editor').each(function(index, el) {
            var id=j(this).attr('id');
            var baseurl = '{{asset('/admin')}}';
            var editor = CKEDITOR.replace( ''+id,{
              uiColor : '#9AB8F3',
              language:'en',
              skin:'moono',
              height: 300,
              filebrowserImageBrowseUrl : baseurl +'/ckfinder/ckfinder.html?Type=Images',
              filebrowserFlashBrowseUrl : baseurl +'/ckfinder/ckfinder.html?Type=Flash',
              filebrowserLinkBrowseUrl : baseurl +'/ckfinder/ckfinder.html',

              filebrowserImageUploadUrl : baseurl +'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
              filebrowserFlashUploadUrl : baseurl +'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
              filebrowserLinkUploadUrl : baseurl +'/ckfinder/core/connector/php/connector.php?command=QuickUpload',
            });
          });
        });

  // j(function() {
  //   var dateFormat = "dd-mm-yy";
  //   j( "#date_active" )
  //       .datepicker({
  //         defaultDate: "+1w",
  //         numberOfMonths: 1,
  //         showOn: "button",
  //         buttonImage: "la_demo/images/calendar.png",
  //         buttonImageOnly: true,
  //         dateFormat: "dd-mm-yy"

  //       })
  //       .on( "change", function() {
  //         to.datepicker( "option", "minDate", getDate( this ) );
  //       });

  //     from = j( "#from" )
  //       .datepicker({
  //         defaultDate: "+1w",
  //         numberOfMonths: 1,
  //         showOn: "button",
  //         buttonImage: "la_demo/images/calendar.png",
  //         buttonImageOnly: true,
  //         dateFormat: "dd-mm-yy"

  //       })
  //       .on( "change", function() {
  //         to.datepicker( "option", "minDate", getDate( this ) );
  //       }),
  //     to = j( "#to" ).datepicker({
  //         defaultDate: "+1w",
  //         numberOfMonths: 1,
  //         showOn: "button",
  //         buttonImage: "la_demo/images/calendar.png",
  //         buttonImageOnly: true,
  //         dateFormat: "dd-mm-yy"
  //     })
  //     .on( "change", function() {
  //       from.datepicker( "option", "maxDate", getDate( this ) );
  //     });

  //   function getDate( element ) {
  //     var date;
  //     try {
  //       date = j.datepicker.parseDate( dateFormat, element.value );
  //     } catch( error ) {
  //       date = null;
  //     }

  //     return date;
  //   }
  // } );

  </script>
    <script src="{{asset('js/func.js')}}"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('dashboard')}}" class="site_title">
              <i class="fa fa-laptop"></i>
              <span>Laptop2nd</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2>{{$user->name}}</h2>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Dashboard</h3>

                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> Danh mục sản phẩm<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('category')}}">Danh mục</a></li>
                      <li><a href="{{route('product')}}">Sản phẩm</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-image"></i> Hình ảnh<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('slide')}}">Banner slider</a></li>
                      <li><a href="{{route('banner')}}">Banner</a></li>
                      <li><a href="{{route('logo')}}">Logo thương hiệu</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i> Khách hàng<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('client')}}">Danh sách thành viên</a></li>
                      <li><a href="{{route('order')}}">Quản lý đơn hàng</a></li>
                    </ul>
                  </li>

                  <li><a href="{{route('news')}}"><i class="fa fa-newspaper-o"></i> Tin tức</a>
                  </li>

                  <li><a><i class="fa fa-cog"></i> Cấu hình <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('info')}}">Thông tin chung</a></li>
                      <li><a href="{{route('map')}}">Bản đồ</a></li>
                      <li><a href="{{route('promotion')}}">Tạo khuyến mãi</a></li>
                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{$user->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li>
                <a href="{{ Config::get('app.url') }}" target="_blank">
                {{$_SERVER['SERVER_NAME']}}
                <i class="fa fa-external-link"></i>
                </a>
                </li>
                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Laptop2nd - Copyright @2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>



    <script src="{{asset('js/my.js')}}"></script>
    <script src="{{asset('js/jquery.filer.min.js')}}"></script>
    
    <!-- Bootstrap -->
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin/build/js/custom.js')}}"></script>

  </body>
</html>

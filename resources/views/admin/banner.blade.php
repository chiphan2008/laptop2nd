@extends("layouts.admin")

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" id="frm" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Banner index</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li>
                    <input type="submit" name="save" value="Save" class="btn btn-primary">
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">

                      <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_310">
                            <div class="x_title">
                                <h2>#1</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                <li>(480*240px)</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div style="text-align: center; margin-bottom: 15px;">
                                    <img src="{{asset('images/banner/banner1.jpg')}}" height="133" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="banner1" id="banner1" type="file" />
                                </div>

                                <div class="form-group">
                                    <input name="ten1" id="ten1" type="text" class="form-control" placeholder="Tiêu đề"/>
                                </div>
                                
                                <div class="form-group">
                                    <input name="link1" id="link1" type="text" class="form-control" placeholder="Liên kết"/>
                                </div>
                            </div>
                        </div>
                      </div>
                      
                    <div class="col-md-3 col-xs-12 widget widget_tally_box">

                        <div class="x_panel fixed_height_310">
                            <div class="x_title">
                                <h2>#2</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                <li>(480*240px)</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div style="text-align: center; margin-bottom: 15px;">
                                    <img src="{{asset('images/banner/banner2.jpg')}}" height="133" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="banner2" id="banner2" type="file" />
                                </div>

                                <div class="form-group">
                                    <input name="ten2" id="ten2" type="text" class="form-control" placeholder="Tiêu đề"/>
                                </div>
                                
                                <div class="form-group">
                                    <input name="link2" id="link2" type="text" class="form-control" placeholder="Liên kết"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_310">
                        <div class="x_title">
                            <h2>#3</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li>(480*240px)</li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>

                            <div class="x_content">
                                <div style="text-align: center; margin-bottom: 15px;">
                                    <img src="{{asset('images/banner/banner1.jpg')}}" height="133" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="banner3" id="banner3" type="file" />
                                </div>

                                <div class="form-group">
                                    <input name="ten3" id="ten3" type="text" class="form-control" placeholder="Tiêu đề"/>
                                </div>
                                
                                <div class="form-group">
                                    <input name="link3" id="link3" type="text" class="form-control" placeholder="Liên kết"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_310">
                        <div class="x_title">
                            <h2>#4</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li>(480*240px)</li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                            <div class="x_content">
                                <div style="text-align: center; margin-bottom: 15px;">
                                    <img src="{{asset('images/banner/banner1.jpg')}}" height="133" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="banner4" id="banner4" type="file" />
                                </div>

                                <div class="form-group">
                                    <input name="ten4" id="ten4" type="text" class="form-control" placeholder="Tiêu đề"/>
                                </div>
                                
                                <div class="form-group">
                                    <input name="link4" id="link4" type="text" class="form-control" placeholder="Liên kết"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Banner full</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li>(1170*200px)</li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          
                          <div class="x_content">
                                <div style="text-align: center; margin-bottom: 15px;">
                                    <img src="{{asset('images/banner/home4-banner2.jpg')}}" width="1000" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="banner_full" id="banner_full" type="file" />
                                </div>

                                <div class="form-group">
                                    <input name="link_full" id="link_full" type="text" class="form-control" placeholder="Liên kết"/>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
    </form>
</div>
@endsection

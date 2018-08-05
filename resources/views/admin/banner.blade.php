@extends("layouts.admin")

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" id="frm" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                @if ($message = Session::get('success'))
                    <div class="panel-body">
                        <div class="alert alert-success" role="alert">
                        {{$message}}
                        </div>
                    </div>
                    @endif
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
                                    <img src="{{asset('images/banner/'.@$row[0]['urlhinh'])}}" class="img-responsive" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="urlhinh0" id="urlhinh0" type="file" />
                                    <input name="banner0" value="{{@$row[0]['urlhinh']}}" type="hidden" />
                                </div>

                                <div class="form-group">
                                    <input value="{{@$row[0]['name']}}"  name="name0" id="name0" type="text" class="form-control" placeholder="Mô tả"/>
                                </div>
                                
                                <div class="form-group">
                                    <input value="{{@$row[0]['link']}}" name="link0" id="link0" type="text" class="form-control" placeholder="Liên kết"/>
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
                                    <img src="{{asset('images/banner/'.@$row[1]['urlhinh'])}}" class="img-responsive" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="urlhinh1" id="urlhinh1" type="file" />
                                    <input name="banner1" value="{{@$row[1]['urlhinh']}}" type="hidden" />
                                </div>

                                <div class="form-group">
                                    <input value="{{@$row[1]['name']}}"  name="name1" id="name1" type="text" class="form-control" placeholder="Mô tả"/>
                                </div>
                                
                                <div class="form-group">
                                    <input value="{{@$row[1]['link']}}" name="link1" id="link1" type="text" class="form-control" placeholder="Liên kết"/>
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
                                    <img src="{{asset('images/banner/'.@$row[2]['urlhinh'])}}" class="img-responsive" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="urlhinh2" id="urlhinh2" type="file" />
                                    <input name="banner2" value="{{@$row[2]['urlhinh']}}" type="hidden" />
                                </div>

                                <div class="form-group">
                                    <input value="{{@$row[2]['name']}}"  name="name2" id="name2" type="text" class="form-control" placeholder="Mô tả"/>
                                </div>
                                
                                <div class="form-group">
                                    <input value="{{@$row[2]['link']}}" name="link2" id="link2" type="text" class="form-control" placeholder="Liên kết"/>
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
                                    <img src="{{asset('images/banner/'.@$row[3]['urlhinh'])}}" class="img-responsive" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="urlhinh3" id="urlhinh3" type="file" />
                                    <input name="banner3" value="{{@$row[3]['urlhinh']}}" type="hidden" />
                                </div>

                                <div class="form-group">
                                    <input value="{{@$row[3]['name']}}"  name="name3" id="name3" type="text" class="form-control" placeholder="Mô tả"/>
                                </div>
                                
                                <div class="form-group">
                                    <input value="{{@$row[3]['link']}}" name="link3" id="link3" type="text" class="form-control" placeholder="Liên kết"/>
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
                                    <img src="{{asset('images/banner/'.@$row[4]['urlhinh'])}}" class="img-responsive" />
                                </div>
                                <div class="divider"></div>
                                <div class="form-group">
                                    <input name="urlhinh4" id="urlhinh4" type="file" />
                                    <input name="banner4" value="{{@$row[4]['urlhinh']}}" type="hidden" />
                                </div>
                                <div class="form-group">
                                    <input value="{{@$row[4]['name']}}" name="name4" id="name4" type="text" class="form-control" placeholder="Mô tả"/>
                                </div>
                                <div class="form-group">
                                    <input value="{{@$row[4]['link']}}" name="link4" id="link4" type="text" class="form-control" placeholder="Liên kết"/>
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

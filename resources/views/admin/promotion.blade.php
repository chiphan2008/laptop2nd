@extends("layouts.admin")

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" id="frm" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
              <div class="col-md-12">

                <!-- form date pickers -->
                <div class="x_panel" style="">
                  <div class="x_title">
                    <h2>Tạo khuyến mãi</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="well" style="overflow: auto">

                      <div class="col-md-5">
                      <h2 style="margin-bottom:19px;">
                        Thời gian áp dụng:
                        </h2>
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text" name="reservation-time" id="reservation-time" class="form-control" value="01/01/2016 - 01/25/2016">
                                </div>
                              </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-4">
                        <p>
                        <div class="radio">
                            <label class="">
                              <div class="iradio_flat-green" style="position: relative;">
                              <input type="radio" checked class="flat" name="loaikm" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Giá
                            </label>
                            <label class="">
                              <div class="iradio_flat-green" style="position: relative;">
                              <input type="radio" class="flat" name="loaikm" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                              </div> %
                            </label>
                            <label class="">
                              <div class="iradio_flat-green" style="position: relative;">
                              <input type="radio" class="flat" name="loaikm" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Code
                            </label>
                        </div>


                        </p>
                          <fieldset>
                          <div class="form-group">
                              <p>
                                  <input  type="text" id="fb" name="fb" class="form-control">
                              </p>
                            </div>
                          </fieldset>
                      </div>

                    </div>



                  </div>
                </div>
                <!-- /form datepicker -->


              </div>
            </div>
    </form>
</div>
@endsection

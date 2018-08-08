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

                      <div class="col-md-6">
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

                      <div class="col-md-6">
                        <p>
                        <div class="radio">
                            <label class="" id="loaikmPri">
                              <div class="iradio_flat-green" style="position: relative;">
                              <input value="1" type="radio" checked class="flat" name="loaikm" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Giá
                            </label>
                            <label class="" id="loaikmPer">
                              <div class="iradio_flat-green" style="position: relative;">
                              <input value="2" type="radio" class="flat" name="loaikm" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                              </div> %
                            </label>
                            <label class="" id="loaikmCode">
                              <div class="iradio_flat-green" style="position: relative;">
                              <input value="3" type="radio" class="flat" name="loaikm"  style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Code
                            </label>
                            <span id="generate_code" class="pull-right"><a href="#" style="text-decoration: underline; color: #337ab7; font-size: 14px; font-weight: bold;">Generate code</a></span>
                        </div>


                        </p>
                          <fieldset>
                          <div class="form-group">
                              <p>
                                  <input  type="text" id="val_promotion" name="val_promotion" class="form-control">
                              </p>
                            </div>
                          </fieldset>
                      </div>

                    </div>

                    <div class="col-md-12">
                      <div class="ln_solid"></div>
                        <div class="col-md-6">
                          <label class="clearfix center-block">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" name="limit_once" id="limit_once" class="flat" style="position: absolute; opacity: 0;" />
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Giới hạn mỗi khách hàng chỉ được sử dụng mã giảm giá này 1 lần
                          </label>
                          <label class="clearfix center-block" id="check_limit_times">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" id="input_limit_times" class="flat" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Giới hạn số lần mã giảm giá được áp dụng
                          </label>
                          <input  type="text" id="limit_times" name="limit_times" class="form-control">
                          <label class="clearfix center-block" id="check_min_price">
                            <div class="icheckbox_flat-green" style="position: relative;">
                              <input type="checkbox" id="input_min_price" class="flat" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Áp dụng với đơn hàng có tổng giá trị sản phẩm thuộc chương trình khuyến mại từ
                          </label>
                          <input  type="text" id="min_price" name="min_price" class="form-control">
                        </div>
                    </div>
                    <!-- row -->

                  </div>
                </div>
                <!-- /form datepicker -->
              </div>
              <!-- row -->

            </div>
    </form>
</div>

<script type="text/javascript">
j(document).ready(function() {
    //j("#generate_code").addClass('pull-right hide');
    j("#generate_code").hide();
    j("#limit_times").hide();
    j("#min_price").hide();
    j("#check_limit_times").click(function(){
        var ok = j('#input_limit_times:checkbox:checked').length;
        //alert(ok)
        if(ok===0){
          j("#limit_times").show();
        }else {
          j("#limit_times").hide();
          j("#limit_times").val('');
        }
    });
    j("#check_min_price").click(function(){
        var ok = j('#input_min_price:checkbox:checked').length;
        //alert(ok)
        if(ok===0){
          j("#min_price").show();
        }else {
          j("#min_price").hide();
          j("#min_price").val('');
        }
    });
    j("#loaikmCode").click(function(){
        j("#generate_code").show();
    });
    j("#loaikmCode").click(function(){
        j("#generate_code").show();
    });
    j("#loaikmPri").click(function(){
        j("#generate_code").hide();
        j("#val_promotion").val('');
    });
    j("#loaikmPer").click(function(){
        j("#generate_code").hide();
        j("#val_promotion").val('');
    });
    j("#generate_code").find('a').click(function(){
        j("#val_promotion").val(generate_str(12))
    });
});

</script>
@endsection

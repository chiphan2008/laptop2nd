@extends("layouts.public")
@inject('LaptopCtrl', 'App\Http\Controllers\LaptopController')
<?php $area = $LaptopCtrl->getArea(0); ?>
@section("content")
<div class="breadcrumbs-container">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <nav class="woocommerce-breadcrumb">
                <a href="{{asset('/')}}">Trang chủ</a>
                <span class="separator">/</span> Thanh toán
            </nav>
          </div>
      </div>
    </div>
</div>
<div class="wrapper home-one single-product-page" style="padding-top:20px">
  <div class="checkout-page-area">
                  <div class="checkout-area">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            @if ($message = Session::get('err'))
                              <div class="panel-body">
                                <div class="alert alert-warning" role="alert">
                                  {{$message}}
                                </div>
                              </div>
                            @endif
                          </div>
                        </div>
                          <form action="" method="post">
                            {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                      <div class="checkbox-form">
                                          <h3>THÔNG TIN NGƯỜI NHẬN</h3>
                                          <div class="row">

                                              <div class="col-md-3">
                                                  <div class="checkout-form-list">
                                                      <label>Xưng hô: <span class="required">*</span></label>
                                                      <select name="sex">
                                                          <option value="1">Anh</option>
                                                          <option value="0">Chị</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-9">
                                                  <div class="checkout-form-list mb-10">
                                                      <label>Họ tên: <span class="required">*</span></label>
                                                      <input type="text" name="name" id="name" placeholder="Họ tên" />
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="checkout-form-list mb-10">
                                                    <label>Tỉnh/TP <span class="required">*</span></label>
                                                    <select name="city" id="city" onchange="callDistrict(this.value)">
                                                        <option value="-1">Tỉnh/TP</option>
                                                        @foreach($area as $v)
                                                        <option value="{{$v->id}}">{{$v->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="checkout-form-list mb-10">
                                                    <label>Quận/Huyện <span class="required">*</span></label>
                                                    <select name="district" id="district">
                                                        <option value="-1">Quận/Huyện</option>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="checkout-form-list">
                                                      <label>Địa chỉ:<span class="required">*</span></label>
                                                      <input onblur="getDelivery()" type="text" name="address" id="address" placeholder="Địa chỉ" />
                                                  </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label> Email <span class="required">*</span></label>
                                                    <input type="email" name="email" id="email" placeholder="">
                                                </div>
                                            </div>

                                              <div class="col-md-6">
                                                  <div class="checkout-form-list mb-30">
                                                      <label>Số điện thoại:  <span class="required">*</span></label>
                                                      <input type="text" name="phone" id="phone" placeholder="Số điện thoại" />
                                                  </div>
                                              </div>

                                          </div>
                                          <div class="different-address">

                                              <div class="order-notes">
                                                  <div class="checkout-form-list">
                                                      <label>Ghi chú</label>
                                                      <textarea id="notes" name="note" cols="30" rows="10" ></textarea>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="your-order">
                                          <h3>Đơn hàng của bạn</h3>
                                          <div class="your-order-table table-responsive">
                                            @if(count($cart_detail)>0)
                                              <table>
                                                  <thead>
                                                      <tr>
                                                          <th class="product-name">Sản phẩm</th>
                                                          <th class="product-total">Tổng</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach($cart_detail as $k=>$v)
                                                    @if(is_numeric($k))
                                                      <tr class="cart_item">
                                                          <td class="product-name">
                                                              {{$v->tensp}} <strong class="product-quantity"> × {{$v->qty}}</strong>
                                                          </td>
                                                          <td class="product-total">
                                                              <span class="amount">{{number_format($v->qty*$v->giaban,0)}}</span>
                                                          </td>
                                                      </tr>
                                                    @endif
                                                    @endforeach
                                                  </tbody>
                                                  <tfoot>
                                                      <tr class="order-total">
                                                          <th>Tổng đơn hàng (VNĐ)</th>
                                                          <td><strong><span class="amount">{{number_format($cart_detail['total'],0)}}</span></strong>
                                                          </td>
                                                      </tr>
                                                  </tfoot>
                                              </table>
                                              @endif
                                          </div>
                                          <span>Phí vận chuyển tạm tính GHTK: <strong id="delivery"></strong></span>
                                          <input type="hidden" id="ship" name="ship" value="0" />
                                          <div class="payment-method">
                                              <div class="payment-accordion">

                                                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <h5>Hình thức thanh toán:</h5>

                                                      <div class="panel-heading" role="tab" id="headingOne">
                                                        <label  for="cod" class="panel-title">
                                                        <input type="radio" checked name="payment" id="cod" value="1" />
                                                         Vận chuyển COD (Thanh toán khi nhận hàng)
                                                       </label>
                                                      </div>

                                                      <div>
                                                          <div class="panel-heading" role="tab" id="headingTwo">
                                                              <h4 class="panel-title">
                                                                <label  for="transfer" class="panel-title">
                                                                <input type="radio" name="payment" id="transfer" value="2" />
                                                                 Chuyển khoản
                                                               </label>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                              <div class="panel-body">
                                                                  {!! $info['bank_sys'] !!}
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="order-button-payment">
                                                      <input type="submit" value="Đặt hàng" />
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

              </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
    //$('input[type=submit]').prop('disabled', true);
    var dist = $('#district').val();
    $('#headingTwo').click(function(){
      $('#collapseTwo').show();
    });
    $('#headingOne').click(function(){
      $('#collapseTwo').hide();
    })
    $('input[type=submit]').click(function(){

      if($('#name').val().trim()=='') {alert('Vui lòng nhập họ tên.');$('#name').focus();return false;}
      if($('#city').val()==-1) {alert('Vui lòng chọn Tỉnh/TP.');$('#city').focus();return false;}
      //if(dist.trim()==-1) {alert('Vui lòng chọn Quận/Huyện.');$('#district').focus();return false;}
      if($('#address').val().trim()=='') {alert('Vui lòng nhập địa chỉ.');$('#address').focus();return false;}
      if($('#email').val().trim()=='') {alert('Vui lòng nhập email.');$('#email').focus();return false;}
      if($('#phone').val().trim()=='') {alert('Vui lòng nhập số điện thoại.');$('#phone').focus();return false;}
    });


});
function callDistrict(id){
  // var dist = jQuery('#district').val();
  $('#district').html('');
  if(id!=-1){
    var url = "{{asset('/area')}}/"+id;
    jQuery.get(url,null,function(data){
      data.map(e=>{
        $('#district').append("<option value="+e.id+">"+e.name+"</option>")
      })
    })
  }else {
    $('#district').append("<option value='-1'>Quận/Huyện</option>");
  }
}
function getDelivery(){
  //$("#list option[value='2']").text()
  var id_city = jQuery('#city').val();
  var city = $("#city option[value='"+id_city+"']").text();
  var id_district = jQuery('#district').val();
  var district = $("#district option[value='"+id_district+"']").text();
  var address = jQuery('#address').val();
  var weight = {{$cart_detail['weight']}} || 0;
  //alert(city);
  const params = {city,district,address,weight};
  url = "{{asset('/cart/delivery')}}";
  if(params.address!==''){
    jQuery.ajax({
        url,
        type: 'post',
        data: {
            city,district,address,weight
        },
        headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        success: function (data) {
          jQuery( "#delivery" ).text(data.fee);
          if($.isNumeric(data.val)){
            $("#ship").val(data.val);
          }
        }
    });
  }
}
</script>
          <!-- Body main wrapper end -->
@endsection

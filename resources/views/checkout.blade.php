@extends("layouts.public")

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
                          <form action="#">
                              <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                      <div class="checkbox-form">
                                          <h3>THÔNG TIN NGƯỜI NHẬN</h3>
                                          <div class="row">

                                              <div class="col-md-3">
                                                  <div class="checkout-form-list">
                                                      <label>Xưng hô: <span class="required">*</span></label>
                                                      <select name="gioitinh">
                                                          <option value="1">Anh</option>
                                                          <option value="0">Chị</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-9">
                                                  <div class="checkout-form-list mb-10">
                                                      <label>Họ tên: <span class="required">*</span></label>
                                                      <input type="text" name="hoten" placeholder="Họ tên" />
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="checkout-form-list mb-10">
                                                    <label>Tỉnh/TP <span class="required">*</span></label>
                                                    <input type="text" name="city" id="city" placeholder="Tỉnh/TP">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="checkout-form-list mb-10">
                                                    <label>Quận/Huyện <span class="required">*</span></label>
                                                    <input type="text" name="district" id="district" placeholder="Quận/Huyện">
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="checkout-form-list">
                                                      <label>Địa chỉ:<span class="required">*</span></label>
                                                      <input onblur="getDelivery()" type="text" name="diachi" id="address" placeholder="Địa chỉ" />
                                                  </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label> Email <span class="required">*</span></label>
                                                    <input type="email" name="email" placeholder="">
                                                </div>
                                            </div>

                                              <div class="col-md-6">
                                                  <div class="checkout-form-list mb-30">
                                                      <label>Số điện thoại:  <span class="required">*</span></label>
                                                      <input type="text" name="dienthoai" placeholder="Số điện thoại" />
                                                  </div>
                                              </div>

                                          </div>
                                          <div class="different-address">

                                              <div class="order-notes">
                                                  <div class="checkout-form-list">
                                                      <label>Ghi chú</label>
                                                      <textarea id="checkout-mess" name="ghichu" cols="30" rows="10" ></textarea>
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
                                                          <th>Tổng đơn hàng</th>
                                                          <td><strong><span class="amount">{{number_format($cart_detail['total'],0)}}</span></strong>
                                                          </td>
                                                      </tr>
                                                  </tfoot>
                                              </table>
                                              @endif
                                          </div>
                                          <div class="col-lg-12 col-md-12">
                                            <label>Phí vận chuyển từ giaohangtietkiem:</label>
                                            <strong id="delivery"></strong>
                                          </div>
                                          <div class="payment-method">
                                              <div class="payment-accordion">
                                                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingOne">
                                                              <h4 class="panel-title">
                                                                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                              Direct Bank Transfer
                                                              </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                              <div class="panel-body">
                                                                  <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingTwo">
                                                              <h4 class="panel-title">
                                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                              Cheque Payment
                                                              </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                              <div class="panel-body">
                                                                  <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingThree">
                                                              <h4 class="panel-title">
                                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                              PayPal
                                                              </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                              <div class="panel-body">
                                                                  <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
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
// jQuery(function(){
//
//
// });
function getDelivery(){
  var city = jQuery('#city').val();
  var district = jQuery('#district').val();
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
          jQuery( "#delivery" ).append(format_number(data.fee.fee)+" VNĐ");
            //console.info(data.fee.fee);
        }
    });
  }
}
</script>
          <!-- Body main wrapper end -->
@endsection

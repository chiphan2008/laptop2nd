@extends("layouts.public")
<?php $cart_detail = @session()->get('cart_detail'); ?>
@section("content")

<div class="breadcrumbs-container">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <nav class="woocommerce-breadcrumb">
                  <a href="{{asset('/')}}">Trang chủ</a>
                  <span class="separator">/</span> Giỏ hàng
              </nav>
          </div>
      </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="wrapper home-one single-product-page" style="padding-top:20px">

    <div class="cart-page-area">
      <div class="container">
          <div class="row">
            @if(count($cart_detail)>0)
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <form action="" method="post">
                    {{ csrf_field() }}
                      <div class="table-content table-responsive mb-50">
                          <table>
                              <thead>
                                  <tr>
                                      <th class="product-thumbnail">Hình ảnh</th>
                                      <th class="product-name">Sản phẩm</th>
                                      <th class="product-price">Giá</th>
                                      <th class="product-quantity">Số lượng</th>
                                      <th class="product-subtotal">Tổng</th>
                                      <th class="product-remove">Xoá</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($cart_detail as $k=>$v)
                                @if(is_numeric($k))
                                  <tr>
                                      <td class="product-thumbnail">
                                          <a href="{{asset('/san-pham/'.$v->alias.'.html')}}"><img src="{{asset('/images/product/'.$v->urlhinh[0])}}" alt="{{$v->tensp}}"></a>
                                      </td>
                                      <td class="product-name"><a href="{{asset('/san-pham/'.$v->alias.'.html')}}">{{$v->tensp}}</a></td>
                                      <td class="product-price"><span class="amount">{{number_format($v->giaban,0)}}</span></td>
                                      <td class="product-quantity">
                                        <input type="number" name="qty[{{$k}}]" value="{{round($v->qty)}}" />
                                      </td>
                                      <td class="product-subtotal">{{number_format(($v->giaban*$v->qty),0)}}</td>
                                      <td class="product-remove"> <a href="{{asset('/cart/remove/'.$k)}}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                  </tr>
                                @endif
                                @endforeach
                              </tbody>
                          </table>
                      </div>

                      <div class="row">

                          <div class="col-md-8 col-sm-7 col-xs-12">
                              <div class="buttons-cart">
                                  <input type="submit" value="Cập nhật" />
                                  <a href="{{asset('/')}}">Tiếp tục mua hàng</a>
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-5 col-xs-12">
                              <div class="cart_totals">
                                  <h2>Tổng đơn hàng</h2>
                                  <br />
                                  <table>
                                      <tbody>
                                          <!-- <tr class="cart-subtotal">
                                              <th>Subtotal</th>
                                              <td><span class="amount">$215.00</span></td>
                                          </tr> -->
                                          <tr class="order-total">
                                              <th></th>
                                              <td>
                                                  <strong><span class="amount">{{number_format($cart_detail['total'],0)}} VNĐ</sup></span></strong>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <div class="wc-proceed-to-checkout">
                                      <a href="{{route('checkout')}}">Thanh toán</a>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </form>

              </div>
            @endif
          </div>
      </div>
    </div>
    <div class="clearfix"></div>
</div>
          <!-- Body main wrapper end -->
@endsection

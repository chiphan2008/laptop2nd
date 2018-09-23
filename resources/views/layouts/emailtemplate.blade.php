<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0px">
<tbody><tr>
<td align="center" valign="top" style="background-color:#f2f2f2;padding-top:20px">

<table width="700" border="0" align="center" cellpadding="0" style="background-color:#fff" cellspacing="0">

<tbody><tr>
<td align="center" valign="top" bgcolor="#0070ce" style="border-left:1px solid #2e4d8d;border-right:1px solid #2e4d8d;border-top:1px solid #2e4d8d;padding:3px;color:#fff">
  <a style="color:#fff" href="http://laptop2nd.vn" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://laptop2nd.vn&amp;source=gmail&amp;ust=1537777122118000&amp;usg=AFQjCNHs_vWG2wyOSVnO8DGbKy-LcQMn2Q">laptop2nd.vn</a></td>
</tr>
<tr>
<td align="center" valign="top" style="border-left:1px solid #c9d7f1;border-right:1px solid #c9d7f1;padding:10px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td align="left" valign="top" style="padding-bottom:10px">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td align="left" valign="top">

<div style="border:1px solid #c9d7f1;padding:5px;font-size:12px;width:auto;margin:0px">
Xin chào,&nbsp;<strong style="color:#0070ce">{{$data['name']}}</strong><br>
Thông tin đơn hàng của bạn tại <a href="http://laptop2nd.vn/" style="color:#0070ce;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://laptop2nd.vn/&amp;source=gmail&amp;ust=1537777122118000&amp;usg=AFQjCNFR0uCvW0T9sxh5zUBPcp4MLyDZHw">laptop2nd.vn</a>						  </div>
<br>	</td>
</tr>
<tr>
<td colspan="7">
<b>THÔNG TIN XÁC MINH ĐƠN HÀNG</b></td>
</tr>
<tr>
<td align="left" valign="top">

<p>

</p><table cellpadding="0" cellspacing="0" width="100%" style="width:100%;border-top:solid 1px #bebdbd;border:solid 1px #dfdfdf">
<thead>
<th>Hình</th>
<th>Tên sản phẩm</th>
<th style="text-align:left">Giá bán</th>
<th>Số lượng</th>
<th colspan="2">Thành tiền</th>

</thead>

<tbody class="yourcartdetails_all">
@foreach($cart_detail as $k=>$v)
@if(is_numeric($k))
<tr>
<td>
  <a href="{{asset('/san-pham/'.$v->alias.'.html')}}/" target="_blank" data-saferedirecturl="https://www.google.com/url?q={{asset('/san-pham/'.$v->alias.'.html')}}/&amp;source=gmail&amp;ust=1537777122119000&amp;usg=AFQjCNEwc1QQ_IuQofbPunQqcVu7sm93JQ">
      <img id="" src="{{asset('/images/product/'.$v->urlhinh[0])}}" alt="{{$v->tensp}}" border="0" width="50" height="60" class="CToWUd">
    </a>
</td>
<td>
  <a href="{{asset('/san-pham/'.$v->alias.'.html')}}/" target="_blank" data-saferedirecturl="https://www.google.com/url?q={{asset('/san-pham/'.$v->alias.'.html')}}/&amp;source=gmail&amp;ust=1537777122119000&amp;usg=AFQjCNEwc1QQ_IuQofbPunQqcVu7sm93JQ">{{$v->tensp}}</a>
</td>
<td style="color:#3a9504">{{number_format($v->giaban,0)}}  <b> </b></td>
<td class="acenter" align="center">{{$v->qty}}</td>
<td>&nbsp;</td>
<td><b><span id="pTotal_20631">{{number_format($v->giaban*$v->qty,0)}}  <b> </b></span></b></td>
</tr>
@endif
@endforeach
</tbody>


<tfoot>

<tr style="background-color: #ddd;">

<td style="border-right:none"></td>
<td colspan="" class="cart_totla" style="text-align:right;padding-right:20px"><b>Tổng tiền</b></td>
<td colspan="" class="cart_totla_price">{{number_format($cart_detail['total'],0)}}</td>
<td colspan="" class="cart_totla"><b>Phí Ship</b></td>
<td colspan="" class="cart_totla_price"><strong style="color:red">{{number_format($data['ship'])}}</strong></td>
<td colspan="" class="cart_totla"><b>Thanh toán</b></td>
<td colspan="" class="cart_totla_price"><strong style="color:red">{{number_format(($cart_detail['total']+$data['ship']),0)}}</strong></td>
</tr>

<tr class="yourcartdetails_title">

<td colspan="7" style="text-align:left;padding-top:20px;padding-bottom:20px;">
<b>THÔNG TIN NGƯỜI MUA</b></td>
</tr>

<tr>

<td colspan="7" style="text-align:left">
<table width="100%" class="info_cart_title_all" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td align="left" class="info_cart_title" valign="middle">HỌ VÀ TÊN</td>
<td align="left" valign="top">{{$data['name']}}</td>
</tr>
<tr>
<td align="left" class="info_cart_title" valign="middle">TỈNH/THÀNH PHỐ</td>
<td align="left" valign="top"> {{$area['city_name']}}</td>
</tr>

<tr>
<td align="left" class="info_cart_title" valign="middle">QUẬN/HUYỆN</td>
<td align="left" valign="top">
  <div id="districtdiv">{{$area['district_name']}}</div></td>
</tr>

<tr>
<td align="left" class="info_cart_title" valign="middle">ĐỊA CHỈ</td>
<td align="left" valign="top">{{$data['address']}}</td>
</tr>
<tr>
<td align="left" class="info_cart_title" valign="middle">SỐ ĐIỆN THOẠI LIÊN HỆ</td>
<td align="left" valign="top">{{$data['phone']}}</td>
</tr>
<tr>
<td align="left" class="info_cart_title" valign="middle">EMAIL</td>
<td align="left" valign="top"><a href="mailto:{{$data['email']}}" target="_blank">{{$data['email']}}</a></td>
</tr>
</tbody></table>

</td>
</tr>

<tr>

<td colspan="7" style="text-align:left">
Ghi chú về đơn hàng</td>
</tr>
<tr>
<td colspan="7">
{{$data['note']}}
</td>
</tr>
<tr>
<td colspan="7">
<p style="padding-top:20px;padding-bottom:20px;"><strong>Hình thức thanh toán: {{$area['payment_label']}}</strong></p>
</td>
</tr>
</tfoot>
</table>
<br>
<p>CẢM  ƠN  QUÝ KHÁCH MUA HÀNG  TẠI LAPTOP2ND.VN</p>
</td>
</tr>
</tbody></table></td>
</tr>
<tr>
<td style="border-bottom:1px dotted #999999">&nbsp;</td>
</tr>
<tr>
<td align="center" valign="middle" style="padding-top:10px">
</td>
</tr>

</tbody></table></td>
</tr>
<tr>
<td bgcolor="#0070ce" height="20" style="border-left:1px solid #2e4d8d;border-right:1px solid #2e4d8d;border-bottom:1px solid #2e4d8d;padding:4px;color:#ffffff">	</td>
</tr>
<tr>
<td height="20" align="left" valign="top" style="color:#666666;background-color:#f2f2f2;font-size:10px">Chúng tôi thành thật xin lỗi nếu email này làm phiền bạn. </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

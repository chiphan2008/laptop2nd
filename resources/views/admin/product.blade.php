@extends("layouts.admin")

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" id="frm">
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
                    <h2>Sản phẩm</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if(count($rs_product)>0)
                    <table id="danhsach" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;text-align:center"><input type="checkbox" name="chonhet" id="chonhet"></th>
                          <th>Tên sản phẩm</th>
                          <th>Hình ảnh</th>
                          <th>Giá</th>
                          <th style="width:7%;text-align:center">Hiển thị</th>
                          <th style="width:7%;text-align:center">Sửa</th>
                          <th style="width:7%;text-align:center">Xoá</th>
                        </tr>
                      </thead>


                    @foreach($rs_product as $r)
                    <?php $hinh  = json_decode($r->urlhinh,true);?>

                    <tr>
                    <td style="width:5%;text-align:center"><input type="checkbox" name="chon[]" id="chon" value="{{$r->idsp}}"></td>

                    <td>{{$r->tensp}} </td>
                    <td>
                    @if(count($hinh)>0)
                    <img src="{{asset('images/product/thumb/'.$hinh[0])}}" height="50" />
                    @endif
                    </td>
                    <td>{{number_format($r->giaban,0,".",",")}}</td>

                    <td align="center">
                    @if($r->anhien==1)
                    <i class="fa fa-eye" style="color:#1d9d74;"></i>
                    @else
                    <i class="fa fa-eye-slash" style="color:red;"></i>
                    @endif
                    </td>
                      <td align="center"><a href="{{asset($ADMIN_ROUTE.'/product/form/'.$r->idsp)}}"><i class="fa fa-pencil"></i></a></td>
                      <td align="center"> <a onclick="confirmDel({{$r->idsp}})"> <i class="fa fa-times" style="color:#F00;"></i> </a> </td>
                    </tr>

                    @endforeach
                    </table>

                    {{$rs_product->render()}}

                    @endif
                  </div>
                </div>
              </div>

              <div class="col-md-12">
              <a type="button" href="{{asset($ADMIN_ROUTE.'/product/form')}}" class="btn btn-success">Thêm mới</a>
              <button onclick="confirmDel()" type="button" class="btn btn-danger">Xoá hết</button>
              </div>
    </form>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery("#chonhet").click(function(){
        var status=this.checked;
        jQuery("input[name='chon[]']").each(function(){this.checked=status;})
    });

});
function confirmDel(id=null){
  var ok = confirm("Bạn có chắc muốn xoá?");
  if(ok){
    if(id!=null){
      return window.location="{{asset($ADMIN_ROUTE.'/product/delete')}}/" + id;
    }else {
      j('#frm').submit();
    }
  }
}
</script>
@endsection

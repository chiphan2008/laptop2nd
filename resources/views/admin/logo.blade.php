@extends("layouts.admin")

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" id='frm'>
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Logo</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" name="chonhet" id="chonhet"></th>
                          <th>Tiều đề</th>
                          <th>Hình</th>
                          <th style="width:7%;text-align:center">Hiển thị</th>
                          <th style="width:7%;text-align:center">Sửa</th>
                          <th style="width:7%;text-align:center">Xoá</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($rs_logo as $r)
                        <tr>
                          <td><input type="checkbox" name="chon[]" id="chon" value="{{$r['id']}}"></td>
                          <td>{{$r['ten']}}</td>
                          <td><img src="{{asset('images/slider/'.$r['urlhinh'])}}" height="100" /></td>

                          <td style="text-align:center">
                            @if($r['anhien']==1)
                            <i style="color:#169F85;font-size:16px;text-align:center" class="fa fa-eye"></i>
                            @else
                            <i style="color:#c7254e;font-size:16px;text-align:center" class="fa fa-eye-slash"></i>
                            @endif
                          </td>

                          <td style="text-align:center">
                            <a href="{{asset($ADMIN_ROUTE.'/logo/form/'.$r['id'])}}">
                              <i style="color:#00385c;font-size:16px;text-align:center" class="fa fa-pencil"></i>
                            </a>
                          </td>

                          <td style="text-align:center">
                            <a href="#" onclick="confirmDel({{$r['id']}})">
                              <i style="color:red;font-size:16px;text-align:center" class="fa fa-times"></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
              <div class="col-md-12">
              <a type="button" href="{{asset($ADMIN_ROUTE.'/logo/form')}}" class="btn btn-success">Thêm mới</a>
              <button type="button" onclick="confirmDel()" class="btn btn-danger">Xoá hết</button>
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
      return window.location="{{asset($ADMIN_ROUTE.'/logo/delete')}}/" + id;
    }else {
      j('#frm').submit();
    }
  }
}
</script>
@endsection

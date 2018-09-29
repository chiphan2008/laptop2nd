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
                    <h2>Tin tức</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if(count($rs_news)>0)
                    <table id="danhsach" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;text-align:center"><input type="checkbox" name="chonhet" id="chonhet"></th>
                          <th>Tiêu đề</th>
                          <th>Hình ảnh</th>
                          <th>Số lần xem</th>
                          <th style="width:7%;text-align:center">Hiển thị</th>
                          <th style="width:7%;text-align:center">Sửa</th>
                          <th style="width:7%;text-align:center">Xoá</th>
                        </tr>
                      </thead>


                    @foreach($rs_news as $r)

                    <tr>
                    <td style="width:5%;text-align:center"><input type="checkbox" name="chon[]" id="chon" value="{{$r->idtin}}"></td>

                    <td><a target="_blank" href="{{asset('/cong-nghe/'.$r->alias.'.html')}}">{{$r->tieude}}</a>  </td>
                    <td><img src="{{asset('public/images/news/'.$r->urlhinh)}}" height="50" /></td>
                    <td>{{$r->solanxem}}</td>

                    <td align="center">
                    @if($r->anhien==1)
                    <i class="fa fa-eye" style="color:#1d9d74;"></i>
                    @else
                    <i class="fa fa-eye-slash" style="color:red;"></i>
                    @endif
                    </td>

                    <td align="center"><a href="{{asset($ADMIN_ROUTE.'/news/form/'.$r->idtin)}}"><i class="fa fa-pencil"></i></a></td>

                    <td align="center"> <a onclick="confirmDel({{$r->idtin}})"> <i class="fa fa-times" style="color:#F00;"></i> </a> </td>
                    </tr>

                    @endforeach
                    </table>

                    {{$rs_news->render()}}

                    @endif
                  </div>
                </div>
              </div>

              <div class="col-md-12">
              <a type="button" href="{{asset($ADMIN_ROUTE.'/news/form')}}" class="btn btn-success">Thêm mới</a>
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
      return window.location="{{asset($ADMIN_ROUTE.'/news/delete')}}/" + id;
    }else {
      j('#frm').submit();
    }
  }
}
</script>
@endsection

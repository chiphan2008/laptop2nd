@extends("layouts.admin")


@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="frm">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(round($id==0))
            <h2>Thêm tin tức</h2>
            @else
            <h2>Cập nhật tin tức</h2>
            @endif
            <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tiêu đề:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->tieude}}" type="text" id="tieude" name="tieude" class="form-control" />
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alias:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->alias}}" type="text" id="alias" name="alias" class="form-control" />
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tóm tắt:</label>
                <div class="col-sm-10">
                    <p>
                    <textarea id="tomtat" class="form-control" rows="5" name="tomtat" cols="50">{{@$row->tomtat}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nội dung:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="noidung" class="form-control ck_editor" rows="5" name="noidung" cols="50">{{@$row->noidung}}</textarea>
                    </p>
                </div>
            </div>
            @if(round($id>0))
            <div class="form-group" >
                <label class="col-sm-2 control-label">Hình hiện tại:</label>
                <div class="col-sm-10">
                <img src="{{asset('./images/news/'.$row->urlhinh)}}" height="50"/>
                <input name="file_name" value="{{@$row->urlhinh}}" type="hidden" />
                </div>
            </div>
            @endif
            <div class="form-group" >
                <label class="col-sm-2 control-label">Hình:</label>
                <div class="col-sm-10">
                <input class="form-control" name="urlhinh" type="file">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Meta keyword:</label>
                <div class="col-sm-10">
                    <p>
                    <input value="{{@$row->kw}}" type="text" id="kw" name="kw" class="form-control" />

                    </p>
                </div>
            </div>
                

            <div class="form-group">
                <label class="col-sm-2 control-label">Hiển thị:</label>
                <div class="col-sm-10">
                <input {{(isset($row->anhien) && @round($row->anhien)==0)?'':'checked="checked"'}} name="anhien" type="checkbox" value="1">
                <input name="solanxem" value="{{@round($row->anhien)}}" type="hidden" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    @if(round($id==0))
                    <input type="submit" name="save" value="Thêm" class="btn btn-info">
                    @else
                    <input type="submit" name="save" value="Cập nhật" class="btn btn-info">
                    @endif
                    <input type="button" value="Thoát" onclick="javascript:history.back()" class="btn btn-danger">
                </div>
            </div>
            </div>

    </div>

    </form>

</div>
<script type="text/javascript">
var obj;
j(function(){
    
    if(j("#alias").val() == ''){
      j("#alias").val(str_slug(j("#tieude").val()))
    }
    j("#tieude").on("keyup",function(){
      var name = j(this).val();
      j("#alias").val(str_slug(name))
    })
    
});

</script>
@endsection

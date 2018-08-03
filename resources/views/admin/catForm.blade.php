@extends("layouts.admin")
@inject('AdminCtrl', 'App\Http\Controllers\AdminController')

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(round($id==0))
            <h2>Thêm danh mục</h2>
            @else
            <h2>Cập nhật danh mục</h2>
            @endif
            <div class="clearfix"></div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Danh mục:</label>
                <div class="col-sm-10">
                    <p>
                        <select id="idcha" name="idcha" style="max-width:158px;float: left;margin-right: 8px;" class="form-control">
                        <option value="0">Danh mục cha</option>
                        <?php $menu1 = $AdminCtrl->selectCat(0);?>
                        @foreach($menu1 as $list1)
                            <option style="font-weight:bold;" value="{{$list1->idcat}}">{{$list1->name}}</option>
                        @endforeach
                        </select>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tên danh mục:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->name}}" type="text" id="name" name="name" class="form-control" />
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
                <label class="col-sm-2 control-label">Thứ tự:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->thutu}}" type="text" id="thutu" name="thutu" class="form-control" />
                    </p>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Từ khoá:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->kw}}" type="text" id="kw" name="kw" class="form-control" />
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Mô tả:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="des" class="form-control" rows="5" name="des" cols="50">{{@trim($row->des)}}</textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Hiển thị:</label>
                <div class="col-sm-10">
                  <p>
                    <input {{( isset($row->anhien) && @round($row->anhien)==0 )?'':'checked="checked"'}} name="anhien" type="checkbox" value="1">
                  </p>
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
$(function(){

    if($("#alias").val() == ''){
      $("#alias").val(str_slug($("#name").val()))
    }
    $("#name").on("keyup",function(){
      var name = $(this).val();
      $("#alias").val(str_slug(name))
    })
});
</script>
@endsection

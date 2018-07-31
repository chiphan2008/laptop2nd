@extends("layouts.admin")


@section('content')
<div class="right_col" role="main">


    <form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                        <input type="text" id="tieude" name="tieude" class="form-control" />
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tóm tắt:</label>
                <div class="col-sm-10">
                    <p>
                    <textarea id="tomtat" class="form-control" rows="5" name="tomtat" cols="50">

                    </textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nội dung:</label>
                <div class="col-sm-10">
                    <p>
                    <textarea id="noidung" class="form-control ck_editor" rows="5" name="noidung" cols="50">

                        </textarea>
                    </p>
                </div>
            </div>
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
                    <input type="text" id="keyword" name="keyword" class="form-control" />

                    </p>
                </div>
            </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Meta description:</label>
                <div class="col-sm-10">
                    <p><textarea id="des" class="form-control" rows="5" name="des" cols="50">

                        </textarea></p>
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 control-label">Hiển thị:</label>
            <div class="col-sm-10">
            <input checked="checked" name="anhien" type="checkbox" value="1">
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
@endsection

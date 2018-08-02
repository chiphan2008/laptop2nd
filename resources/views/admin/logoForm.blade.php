@extends("layouts.admin")


@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(round($id==0))
            <h2>Thêm logo</h2>
            @else
            <h2>Cập nhật logo</h2>
            @endif
            <div class="clearfix"></div>
            </div>

            <div class="form-group" >
                <label class="col-sm-2 control-label">Hình:</label>
                <div class="col-sm-10">
                <input class="form-control" name="urlhinh" type="file">
                </div>
            </div>
            @if(round($id>0))
            <div class="form-group" >
                <label class="col-sm-2 control-label">Hình hiện tại:</label>
                <div class="col-sm-10">
                <img src="{{asset('images/slider/'.$row['urlhinh'])}}" height="50" />
                </div>
            </div>
            @endif
            <div class="form-group">
                <label class="col-sm-2 control-label">Tên:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row['ten']}}" type="text" id="ten" name="ten" class="form-control" />
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Link:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row['link']}}" type="text" id="link" name="link" class="form-control" />
                    </p>
                </div>
            </div>


            <div class="form-group">
            <label class="col-sm-2 control-label">Hiển thị:</label>
            <div class="col-sm-10">
            <input {{(isset($row['anhien']) && @round($row['anhien'])==0)?'':'checked="checked"'}} name="anhien" type="checkbox" value="1">
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

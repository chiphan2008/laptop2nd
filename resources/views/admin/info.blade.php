@section('content')
@extends("layouts.admin")

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
            <h2>Cập nhật thông tin</h2>
            <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Footer:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="footer" class="form-control ck_editor" rows="5" name="footer" cols="50">{{@trim($row['footer'])}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Contact:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="contact" class="form-control ck_editor" rows="5" name="contact" cols="50">{{@trim($row['contact'])}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Facebook:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row['fb']}}" type="text" id="fb" name="fb" class="form-control" />
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Meta keyword:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row['kw']}}" type="text" id="kw" name="kw" class="form-control" />
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Meta description:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="des" class="form-control" rows="5" name="des" cols="50">{{@trim($row['des'])}}</textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" name="save" value="Cập nhật" class="btn btn-info">
                    <input type="button" value="Thoát" onclick="javascript:history.back()" class="btn btn-danger">
                </div>
            </div>
            </div>

    </div>

    </form>

</div>
 
@endsection

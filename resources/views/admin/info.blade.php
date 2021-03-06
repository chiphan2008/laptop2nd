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
                <label class="col-sm-2 control-label">Thông tin chung:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="footer" class="form-control ck_editor" rows="5" name="footer" cols="50">{{@trim($row['footer'])}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Giờ làm việc:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="contact" class="form-control ck_editor" rows="5" name="contact" cols="50">{{@trim($row['contact'])}}</textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Giới thiệu:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="about" class="form-control ck_editor" rows="5" name="about" cols="50">{{@trim($row['about'])}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ngân hàng:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="bank_sys" class="form-control ck_editor" rows="5" name="bank_sys" cols="50">{{@trim($row['bank_sys'])}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Đặt hàng thành công:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="order_success" class="form-control ck_editor" rows="5" name="order_success" cols="50">{{@trim($row['order_success'])}}</textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Giá trị đơn hàng (FreeShip):</label>
                <div class="col-sm-10">
                    <p>
                        <input style="width:200px;float:left;margin-right:10px" value="{{@$row['total_freeship']}}" type="text" id="total_freeship" name="total_freeship" class="form-control" />
                        <span style="font-weight:bold;padding:7px 20px;display:inline-block;" id="total_freeshipVal"></span>
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
                <label class="col-sm-2 control-label">Tiêu đề trang chủ:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row['title_index']}}" type="text" id="title_index" name="title_index" class="form-control" />
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
                <label class="col-sm-2 control-label">Google Analytic:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="google_analytic" class="form-control" rows="5" name="google_analytic" cols="50">{{@trim($row['google_analytic'])}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Copyright:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row['copyright']}}" type="text" id="copyright" name="copyright" class="form-control" />
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
<script type="text/javascript">
j(function(){
  if(j("#total_freeship").val() != ''){
      j("#total_freeshipVal").html(format_number(j("#total_freeship").val()))
  }
  j("#total_freeship").blur(function(){
    var name = j(this).val();
    j("#total_freeshipVal").html(format_number(name))
  })
});

</script>
@endsection

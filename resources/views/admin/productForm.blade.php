@extends("layouts.admin")
@inject('AdminCtrl', 'App\Http\Controllers\AdminController')

@section('content')
<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(round($id==0))
            <h2>Thêm sản phẩm</h2>
            @else
            <h2>Cập nhật sản phẩm</h2>
            @endif
            <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tên sản phẩm:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->tensp}}" type="text" id="tensp" name="tensp" class="form-control" />
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
                <label class="col-sm-2 control-label">Giá bán:</label>
                  <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->giaban}}" type="text" id="giaban" name="giaban" class="form-control" style='width:158px;float:left;' />
                        <span id="giabanVal" style="font-weight:bold;padding:7px 20px;display:inline-block;"></span>
                    </p>
                  </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Giá nhập:</label>
                  <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->gianhap}}" type="text" id="gianhap" name="gianhap" class="form-control" style='width:158px;float:left;' />
                        <span style="font-weight:bold;padding:7px 20px;display:inline-block;" id="gianhapVal"></span>
                    </p>
                  </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Khối lượng:</label>
                  <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->khoiluong}}" type="text" id="khoiluong" name="khoiluong" class="form-control" style='width:158px;float:left;' />
                        <span style="font-weight:bold;padding:7px 20px;display:inline-block;" id="khoiluongVal">Gam</span>
                    </p>
                  </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Mô tả:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="mota" class="form-control" rows="5" name="mota" cols="50">{{@$row->mota}}</textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nội dung:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="noidung" class="form-control ck_editor" rows="5" name="noidung" cols="50">{{@$row->mota}}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Danh mục:</label>
                <div class="col-sm-10">
                <p>
                    <select id="idcat" name="idcat" style="max-width:158px;float: left;margin-right: 8px;" class="form-control">
                    <?php $menu1 = $AdminCtrl->selectCat(0);?>
                    @foreach($menu1 as $list1)
                        <option <?php if(@$row->idcat == $list1->idcat) echo 'selected';?> style="font-weight:bold;" value="{{$list1->idcat}}"><strong>{{$list1->name}}</strong></option>
                        <?php $menu2 = $AdminCtrl->selectCat($list1->idcat);?>
                        @foreach($menu2 as $list2)
                            <option <?php if(@$row->idcat == $list2->idcat) echo 'selected';?> value="{{$list2->idcat}}">|---{{$list2->name}}</option>
                        @endforeach
                    @endforeach
                    </select>
                </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Album ảnh</label>
                <div class="col-sm-10">
                    <div class="jFiler">
                        <input type="file" name="hinh[]" multiple="multiple" style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;">
                        <a class="file_input"><i class="fa fa-paperclip"></i> Thêm hình ảnh</a>
                    </div>
                </div>
	        </div>

            @if(round($id>0))
            <div class="form-group">
                          <label class="col-sm-2 control-label">Album hiện tại</label>
                          <div class="col-sm-10">
                          <div class="clearfix">
                          <?php $hinh = json_decode(@$row->urlhinh,true);?>
                          @if(count($hinh)>0)
                          @foreach($hinh as $k => $name_url)
                              <div class="item_trich">
                                  <img class="img_trich" src="{{asset('images/product/thumb/'.$name_url)}}">
                                  <a href="javascript:void(0)" class="icon-jfi-trash jFiler-item-trash-action change_stt" rel="{{$k}}"></a>
                                  <div id="loader{{$k}}" class="loader_trich"><img src="{{asset('./images/load.gif')}}"></div>
                                  <input name="name_hinh[]" value="{{$name_url}}" type="hidden" />
                              </div>
                          @endforeach
                          @endif
                          </div>
                          </div>
                    </div>
            @endif

            <div class="form-group">
                <label class="col-sm-2 control-label">Meta Keyword:</label>
                <div class="col-sm-10">
                    <p>
                        <input value="{{@$row->kw}}" type="text" id="kw" name="kw" class="form-control" />
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Meta Descript:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea id="des" class="form-control" rows="5" name="des" cols="50">{{@trim($row->des)}}</textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Thứ tự:</label>
                  <div class="col-sm-10">
                    <p>
                        <input value="{{@round($row->thutu)}}" type="text" id="thutu" name="thutu" class="form-control" style='width:158px;float:left;' />
                    </p>
                  </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Sản phẩm đề xuất:</label>
                <div class="col-sm-10">
                <input {{(isset($row->noibat) && @round($row->noibat)==0)?'':'checked="checked"'}} name="noibat" type="checkbox" value="1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Miễn phí vận chuyển:</label>
                <div class="col-sm-10">
                <input {{(isset($row->freeship) && @round($row->freeship)==0)?'':'checked="checked"'}} name="freeship" type="checkbox" value="1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Hiển thị:</label>
                <div class="col-sm-10">
                <input {{(isset($row->anhien) && @round($row->anhien)==0)?'':'checked="checked"'}} name="anhien" type="checkbox" value="1">
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
    j(".change_stt").click(function(event) {
          var ok = confirm("Are you sure you want to remove this file ?");
          if (ok) {
            obj = j(this).parent();
            var vt=j(this).attr("rel");
            j('#loader'+vt).css('display', 'block');
            url = "{{asset($ADMIN_ROUTE.'/product/delete_hinhsp/'.@$row->idsp)}}/"+vt;
            j.get(url,null,daxoa);
          }
    });

    if(j("#alias").val() == ''){
      j("#alias").val(str_slug(j("#tensp").val()))
    }
    j("#tensp").on("keyup",function(){
      var name = j(this).val();
      j("#alias").val(str_slug(name))
    })
    j("#giaban").blur(function(){
      var name = j(this).val();
      j("#giabanVal").html(format_number(name))
    })
    if(j("#gianhap").val() != ''){
        j("#gianhapVal").html(format_number(j("#gianhap").val()))
    }
    if(j("#giaban").val() != ''){
        j("#giabanVal").html(format_number(j("#giaban").val()))
    }
    j("#gianhap").blur(function(){
      var name = j(this).val();
      j("#gianhapVal").html(format_number(name))
    })
});

function daxoa(d){
   obj.remove();
}
</script>
@endsection

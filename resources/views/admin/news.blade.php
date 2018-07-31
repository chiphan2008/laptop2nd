@extends("layouts.admin")


@section('content')
<div class="right_col" role="main">


    <form class="form-horizontal" method="POST">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tin tức</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                              <input type="checkbox" name="chonhet" id="chonhet"></th>
                          <th>Tiều đề</th>
                          <th>Hình</th>
                          <th width="7%">Hiển thị</th>
                          <th width="7%">Sửa</th>
                          <th width="7%">Xoá</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th><input type="checkbox" name="chonhet" id="chonhet"></th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td align="center">
                            <i style="color:#169F85;font-size:16px;text-align:center" class="fa fa-eye"></i>
                          </td>
                          <td align="center">
                            <a href="{{asset($ADMIN_ROUTE.'/news/form/123')}}">
                              <i style="color:#00385c;font-size:16px;text-align:center" class="fa fa-pencil"></i>
                            </a>
                          </td>
                          <td align="center">
                            <a href="{{asset($ADMIN_ROUTE.'/news/delete/123')}}">
                              <i style="color:red;font-size:16px;text-align:center" class="fa fa-times"></i>
                            </a>
                          </td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
              <div class="col-md-12">
              <a type="button" href="{{asset($ADMIN_ROUTE.'/news/form')}}" class="btn btn-success">Thêm mới</a>
              <button type="button" class="btn btn-danger">Xoá hết</button>
              </div>
    </form>
</div>
@endsection

@extends("layouts.admin")


@section('content')
<div class="right_col" role="main">
  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Change password</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  @if ($message = Session::get('success'))
                    <div class="panel-body">
                      <div class="alert alert-success" role="alert">
                        {{$message}}
                      </div>
                    </div>
                  @endif
                  @if ($message = Session::get('err'))
                    <div class="panel-body">
                      <div class="alert alert-warning" role="alert">
                        {{$message}}
                      </div>
                    </div>
                  @endif
                  <br>
                  <form method="post" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="new_pwd" name="new_pwd" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirm password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="confirm_pwd" name="confirm_pwd" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Change</button>
                        <button class="btn btn-danger" onclick="javascript:history.back()" type="button">Cancel</button>

                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

</div>
@endsection

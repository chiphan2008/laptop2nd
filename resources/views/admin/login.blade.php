<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
      
        <div class="animate form login_form">
          <section class="login_content">
          <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}
              <h1>Administrator</h1>
              <div>
                <input name="email" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              @if ($message = Session::get('err'))
                  <div class="panel-body">
                    <div class="alert alert-warning" role="alert">
                      {{$message}}
                    </div>
                  </div>
                  <div class="clearfix"></div>
                @endif
              <div>
                <!-- <a class="btn btn-default submit" >Log in</a> -->
                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

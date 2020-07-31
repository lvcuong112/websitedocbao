<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Admin</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="/backend/bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/backend/bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="/backend/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="/backend/dist/css/skins/_all-skins.min.css">


</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
      <a href=""><b>Admin</b></a>
    </div>
    <div class="login-box-body">
        <div class="social-auth-links text-center">
            @if(session('alert'))
                  <section class='alert alert-danger'>{{session('alert')}}</section>
             @endif    
             <form action="/admin/login" method="post">
              @csrf
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="UserName" name="username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <div class="col-xs-4">
                      <input type="submit" name="" class="btn btn-primary btn-block btn-flat" value="Sign In">
                    </div>
                  </div>
              </form>
        </div>
    </div>
</div>

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../../plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>

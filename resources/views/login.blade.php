<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$title}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <style>
  .login-page{
    background: url('{{url('dist/img/bg-login.jpg')}}') no-repeat center;
      background-size: cover;
  }
    tr{
      padding: 5px;
    }
    td{
      padding: 5px;
    }
    .kelas{
      text-transform: uppercase;
    }
    /* .card{
      border-radius: 0px;
    }
    .card-header{
      border-radius: 0px;
    } */
  </style>
</head>
<body class="login-page">
<div class="login-box">
  <div class="card">
    <div class="card-header">Login Administrator</div>
    <div class="card-body login-card-body">
      <form action="{{url('login')}}" method="post">
      {{csrf_field()}}
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            @error('email')
              <span class="text-danger" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
              <span class="text-danger" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary bg-gradient-primary btn-block btn-flat btn-sm"><i class="fa fa-key"></i> Masuk</button>
          </div>
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <a href="#" class="btn btn-block btn-primary bg-gradient-primary btn-sm">
          <i class="fab fa-facebook mr-2"></i> Masuk dengan Akun Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger btn-sm">
          <i class="fab fa-google mr-2"></i> Masuk dengan Akun Google
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      
    </div>
    <div class="card-footer">
    <p class="mb-1">
        <a href="{{url('password/reset')}}" class="btn btn-link btn-sm">Saya lupa kata sandi</a>
      </p>
    </div>
  </div>
</div>
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
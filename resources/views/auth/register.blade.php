<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/admin/dist/css/adminlte.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="template/adminindex2.html"><b>Male</b>Fashion</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng ký thành viên mới</p>

      <form action="{{route('register')}}" method="post">
        <div class="row">
          <div class="col-12">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Họ và tên" name="name" value="{{old('name')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            @error('name')
                <span style="color: red;font-size: 14px;">{{$message}}</span>
              @enderror
          </div>
          <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Số điện thoại" name="phone_number" value="{{old('phone_number')}}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
              </div>
              @error('phone_number')
              <span style="color: red;font-size: 14px;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @error('email')
            <span style="color: red;font-size: 14px;">{{$message}}</span>
          @enderror
          </div>
          <div class="col-12">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Mật khẩu" name="password" value="{{old('password')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
            <span style="color: red;font-size: 14px;">{{$message}}</span>
          @enderror
          </div>
          <div class="col">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="confirm_password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('confirm_password')
            <span style="color: red;font-size: 14px;">{{$message}}</span>
          @enderror
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-dark btn-block btn-submit" >Đăng ký</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-dark">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('template/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>

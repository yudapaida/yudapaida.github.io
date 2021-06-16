<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LAYANAN BIRO KEPEGAWAIAN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <style>
    body {
      background-image: url('assets/img/1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="row">
    <div class="col-6">
      <div class="login-box">
        <img src="assets/img/logo.png" alt="Logo Kejaksaan" style="width:256px;height:256px;">
      </div>
    </div>
    <div class="col-6">
      <div class="login-box">
        <div class="login-logo">
          <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <b>Login disini</b>
            <p>Masukkan NIP dan Password Anda</p>

            <!-- <form action="#" method="post"> -->
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <a href="<?= base_url('bangpeg') ?>"><button type="submit" class="btn btn-primary btn-block">Login</button></a>
              </div>
            </div>
            <!-- </form> -->
            <br>
            <p class="mb-1">
              <a href="forgot-password.html">I forgot my password</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->

    </div>
  </div>

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>
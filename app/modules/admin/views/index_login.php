<!-- Product Alus Solution Licenced PHP Script -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url('assets/temaalus/image/mini.png'); ?>" type="image/gif" sizes="20x20">
  <title>Login | Alus 2.0</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  <!-- Icon Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/logo/mini.png">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/plugins/iCheck/square/blue.css">
  <!-- toasty notif -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/temaalus/dist/css/toasty.css" >
  <link rel="manifest" href="<?php echo base_url('/manifest.json'); ?>">
  <script src="<?php echo base_url(); ?>assets/main.js"></script>

  <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">
  .cover{
    background-image: url(<?php echo base_url('assets/logo/bgku8.jpg'); ?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .login-box-body
  {
    border-radius: 15px;
    min-height: 500px;
    margin-top: 60px;
  }
  .text
  {
    margin-top: 60px;
    color:#00021a;
    font-family: "calibri";
  }
  h1
  {
   font-family: "calibri"; 
  }
  .img
  {
    max-height: 200px;
    max-width: 200px;
  }
  </style>
</head>

<body class="cover">
<div class="overlay">
        <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <img src="<?php echo base_url('assets/logo/faviconfhk.png'); ?>" class="img">
              </div>
            </div>
            <div class="row">
                <div class="col-sm-7 text">
                  <b>
                  <h1>Pembayaran Online</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </b>
                </div>
                <div class ="col-sm-4 col-sm-offset-1">
                      <div class="login-box-body">
                        <h2 class="login-box-msg"><b>Login</b></h2>
                        <p class="login-box-msg">Sign in to start your Payment</p>

                        <form action="<?php echo base_url('admin/Login/login'); ?>" method="post" id="form">
                          <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email" name="identity" required autofocus=>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <button type="button" class="btn btn-primary btn-block btn-flat" id="submitform">Sign In</button>
                            </div>
                            <br>
                            <br>
                        <!-- /.col -->
                            <div class="col-xs-12">
                              <button type="reset" class="btn btn-danger btn-block btn-flat">Cancel</button>
                            </div>
                        <!-- /.col -->
                          </div>
                        </form>
                      </div>
              <!-- /.login-box-body -->
                    </div>
              <!-- /.login-box -->
                </div>
            </div>
             </div>
        </div>
</div>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/temaalus/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/temaalus/dist/js/jquery.cookie.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/temaalus/bootstrap/js/bootstrap.min.js"></script>
<!-- maul login -->
<script src="<?php echo base_url(); ?>assets/temaalus/dist/js/m_login.js"></script>
<!-- Toasty Notif -->
<script src="<?php echo base_url(); ?>assets/temaalus/dist/js/toasty.js"></script>
</body>
</html>

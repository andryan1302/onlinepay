<!DOCTYPE html>
<?php
  if($this->alus_auth->logged_in())
  {
    /*login*/
    setcookie('id_login', $this->session->userdata('user_id'),0,'/');
  }else{
    /*tidak login*/
    setcookie('id_login', '0',0,'/');
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo $this->alus_auth->description_application();?>">
  <meta name="keywords" content="<?php echo $this->alus_auth->keyword_application();?>">
  <meta name="author" content="<?php echo $this->alus_auth->author_application();?>">

  <link rel="icon" href="<?php echo base_url('assets/logo/mini.png'); ?>" type="image/gif" sizes="20x20">
  <title><?php echo $title; ?> | <?php echo $this->alus_auth->name_application();?></title>
  <link rel="manifest" href="<?php echo base_url('/manifest.json'); ?>">
  <script src="<?php echo base_url(); ?>assets/main.js"></script>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap 4.0 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/temaalus/bootstrap4/css/bootstrap.min.css'); ?>"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/dist/fontawesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/dist/ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temaalus/dist/css/toasty.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/temaalus/dist/css/bootstrap-datetimepicker.min.css');?>">
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/temaalus/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/temaalus/dist/js/jquery.cookie.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/temaalus/bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>assets/temaalus/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/temaalus/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- Toasty Notif -->
  <script src="<?php echo base_url(); ?>assets/temaalus/dist/js/toasty.js"></script>
  <script>var base_url = "<?php echo base_url(); ?>"; </script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition sidebar-mini skin-green" id="hidesidebar">
<div class="wrapper">

  <header class="main-header">
     <a href="<?php echo base_url('dashboard');?>" class="logo">
        <span class="logo-mini">
          <img src="<?php echo base_url('assets/logo/poling_gaul.jpeg'); ?>" width="60%" style="border-radius: 50%;">
        </span>
        <span class="logo-lg">
        <!-- <img src="<?php echo base_url('assets/logo/poling_gaul.jpeg'); ?>" width="20%" style="border-radius: 50%;"> -->
          <b>DASHBOARD</b> 
        </span>
      </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <?php if(file_exists(base_url('assets/avatar')."/".$this->session->userdata('avatar'))){?>
                  <img src="<?php echo base_url('assets/avatar')."/".$this->session->userdata('avatar');?>" class="user-image" alt="Avatar">
                <?php }else{?>
                   <img src="<?php echo base_url('assets/avatar');?>/avatar_default.png" class="user-image" alt="Avatar">
                <?php }?>
                <span class="hidden-xs"><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name') ;?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                <?php if(file_exists(base_url('assets/avatar')."/".$this->session->userdata('avatar'))){?>
                  <img src="<?php echo base_url('assets/avatar')."/".$this->session->userdata('avatar');?>" class="img-circle" alt="Avatar">
                <?php }else{?>
                   <img src="<?php echo base_url('assets/avatar');?>/avatar_default.png" class="img-circle" alt="Avatar">
                <?php }?>
                  <p>
                    <?php echo $this->session->userdata('job'); ?>
                    <small><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name') ;?></small>
                  </p>
                </li>
                <!-- Menu Body -->
               
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url('user_profile');?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>admin/login/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div> 
        <!-- /.navbar-custom-menu -->
      <!-- /.container-fluid -->
    </nav>
  </header>

   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if(file_exists(base_url('assets/avatar')."/".$this->session->userdata('avatar'))){?>
          <img src="<?php echo base_url('assets/avatar')."/".$this->session->userdata('avatar');?>" class="img-circle" alt="User Image">
          <?php }else{?>
          <img src="<?php echo base_url('assets/avatar');?>/avatar_default.png" class="img-circle" alt="User Image">
          <?php }?>
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name') ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <?php echo $this->Alus_hmvc->get_menu(); ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <script>
    var csrf_nm = '<?php echo $this->config->item("csrf_token_name");?>';
    var csrf_ck = '<?php echo $this->config->item("csrf_cookie_name");?>';

    $.ajaxSetup({
      beforeSend: function(xhr, settings) {
        switch (settings.type) {
            case "POST": settings.data += "&"+csrf_nm+"="+get_newer(); break;
        }
      }
    });

    $(document).ready(function(){
      
    });

    
    function get_newer()
    {
      return $.cookie(csrf_ck);
    }

    function popup(ms = null,timess = null) {
      if(timess == null)
      {
        timess = 3000;
      }
      if(ms == null)
      {
        $().toasty({
            message: "Berhasil",
            autoHide: timess
        }); 
      }else{
        $().toasty({
            message: ms,
            autoHide: timess
        }); 
      } 
    }

    
  </script>
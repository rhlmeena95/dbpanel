
<!DOCTYPE html>
<html>
<head>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
http_https_move();

 ?>
<link rel="icon" href="<?php echo $this->webroot ?>img/favicon.ico" type="image/ico"     >

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dadio Admin Backend</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <!-- Bootstrap 3.3.6 -->
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
<?php  echo $this->Html->css('backend/bootstrap.min');?>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
<?php  echo $this->Html->css('backend/font-awesome.min');?>
<?php  echo $this->Html->css('backend/fontawesome-iconpicker');?>
<?php  echo $this->Html->css('backend/fontawesome-iconpicker.min');?>
  
<?php  echo $this->Html->css('backend/ionicons.min');?>
<?php  echo $this->Html->css('backend/AdminLTE.min');?>
<?php  echo $this->Html->css('backend/skins/_all-skins.min');?>
<?php  echo $this->Html->css('backend/blue');?>
<?php  echo $this->Html->css('backend/morris');?>
<?php  echo $this->Html->css('backend/jquery-jvectormap-1.2.2');?>
<?php  echo $this->Html->css('backend/bootstrap3-wysihtml5.min');?>
<!-- <?php // echo $this->Html->css('backend/jquery-ui');?> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo Router::url(array('controller'=>'pages','action'=>'home')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span ><img style="height: 68px;width: 89px;float: left;margin-left: 16px;" src="<?php echo $this->webroot; ?>logo.png" /> </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <a href="#" style="color:rgb(60,141,188);" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        <span style="color:#009688;font-size:20px;">Logged in as: Admin</span>
      </a>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <p style="font-size:20px;"><a href="#"> <i class="fa fa-dashboard"></i><b>Dashboard</b></a></p>
        <div class="pull-left info">
          
        
        </div>
      </div>
     
      <ul class="sidebar-menu">
  
        <li class="treeview">
         <a href="<?php echo Router::url(array('controller'=>'admins','action'=>'table')); ?>">
            <i class="fa fa-user"></i> <span>table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>s
           
    </section>
    <!-- /.sidebar -->
  </aside>

  
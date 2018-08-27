<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>GTC EduSite | Trainer </title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/morris.js/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/jvectormap/jquery-jvectormap.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<style type="text/css">
  .msg-wgt-container {
    position: fixed;
    bottom: 0;
    right: 20px;
    width: 250px;
    height: 300px;
    border: 1px solid #888888;
    background: #ffffff;
    z-order: 10000;
    z-index: +10;
  }

  .minimize.msg-wgt-container {
    height: 29px;
  }

  .msg-wgt-header {
    width: 100%;
    height: 30px;
    line-height: 2.0em;
    text-align: center;
    background: #337ab7;
  }

  .msg-wgt-header a {
    color: #ffffff;
    text-decoration: none;
  }

  .msg-wgt-header a.online {
    width: 10px;
    height: 10px;
    background: #66d266;
    position: absolute;
    left: 10px;
    top: 10px;
    border-radius: 10px;
  }

  .msg-wgt-header a.close {
    position: absolute;
    right: 10px;
    opacity: .7
  }

  .msg-wgt-message-container {
    width: 100%;
    height: 230px;
    overflow-y: auto;
    overflow-x: hidden;
  }

  .msg-wgt-message-list {
    width: 100%;
    max-width: 230px
  }
    tr.msg-wgt-message-list-header {
    color: #999;
    font-size: 9px;
    vertical-align: top;
  }

  tr.msg-wgt-message-list-header img {
    width: 42px;
  }

  tr.msg-wgt-message-list-header .name {
    text-align: left;
  }

  tr.msg-wgt-message-list-header .time {
    text-align: right;
  }

  tr.msg-wgt-message-list-body td {
    font-size: 13px;
    color: black;
  }

  tr.msg-wgt-message-list-separator td {
    border-bottom: 1px solid #ddd;
  }

  .msg-wgt-message-form {
    width: 100%;
    height: 40px;
    border-top: 1px solid #ddd;
  }

  .msg-wgt-message-form textarea {
    width: 98%;
    border: 0;
    height: 40px;
  }
  .msg-wgt-message-container::-webkit-scrollbar {
      width: 5px;
    }
    .msg-wgt-message-container::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }

    /* Handle */
    .msg-wgt-message-container::-webkit-scrollbar-thumb {
      background: #888; 
    }

    /* Handle on hover */
    .msg-wgt-message-container::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    
    @media only screen and (max-width: 990px) {
    h3.widget-user-username {
      text-align: center;
    }
    h5.widget-user-desc{
      text-align: center; 
    }
}
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
<!-- Logo -->
<a href="index2.html" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>G</b>TC</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>GTC</b> E-Learning</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" style="background-color: #43445A;">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
<span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="<?php echo base_url()?>assets/adm/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
<span class="hidden-xs"><?php echo $this->session->userdata("nama");?></span>
</a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header">
<img src="<?php echo base_url()?>assets/adm/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

        <p>
          <?php echo $this->session->userdata("nama");?>
        </p>
      </li>
      <!-- Menu Body -->
      <!-- Menu Footer-->
      <li class="user-footer">
        <div class="pull-left">
          <a href="<?php echo base_url('Trainer/profile');?>" class="btn btn-default btn-flat">Profile</a>
        </div>
        <div class="pull-right">
          <a href="<?php echo base_url('Trainer/logout');?>" class="btn btn-default btn-flat">Sign out</a>
        </div>
      </li>
    </ul>
  </li>
  <!-- Control Sidebar Toggle Button -->
</ul>
</div>
</nav>
</header>
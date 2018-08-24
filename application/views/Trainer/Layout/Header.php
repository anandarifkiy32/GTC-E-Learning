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
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/adm/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


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
<<<<<<< HEAD

=======
<?php foreach ($profile as $p) { ?>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
<img src="<?php echo base_url()?>assets/adm/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
<span class="hidden-xs"><?php echo $this->session->userdata("nama");?></span>
=======
<img src="<?php echo base_url()?>assets/profile_photos/trainer/<?php echo $p->img ?>" class="user-image" alt="User Image">
<span class="hidden-xs"><?php echo $p->nama;?></span>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
</a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header">
<<<<<<< HEAD
<img src="<?php echo base_url()?>assets/adm/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
=======
<img src="<?php echo base_url()?>assets/profile_photos/trainer/<?php echo $p->img ?>" class="img-circle" alt="User Image">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3

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
<<<<<<< HEAD
</header>
=======
</header>
<?php } ?>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
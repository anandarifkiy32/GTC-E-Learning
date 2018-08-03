<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>GTC EduSite</title>

  <!-- Google font -->
  <link href="<?php echo base_url()?>assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/web/css/font-awesome.css" rel="stylesheet"> 
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">
  <link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      .table{
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
      }
      .table > thead > tr > th,
      .table > tbody > tr > th,
      .table > tfoot > tr > th,
      .table > thead > tr > td,
      .table > tbody > tr > td,
      .table > tfoot > tr > td{
        line-height: 1.5;
        vertical-align: top;
        border-color: white;
      }
    </style>
  </head>
  <body>

    <!-- Header -->
    <header id="header">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a class="logo" href="<?php echo base_url() ?>">
              <img src="<?php echo base_url()?>assets/gtc_client/img/logo.png" alt="logo">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Mobile toggle -->
          <button class="navbar-toggle">
            <span></span>
          </button>
          <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
          <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url() ?>">Home</a></li>
            <li><a href="<?php echo base_url('homepage/coursecatalog/') ?>">Courses</a></li>

            <li><a href="<?php echo base_url('homepage/contact/')?>">Contact</a></li>
            <li class="dropdown"><a href="<?php if(!$profile){echo base_url();}else{echo "";} ?>" <?php if($profile){ ?> class="dropdown-toggle" data-toggle="dropdown" <?php } ?>>              
              <?php 
              if($profile){
                foreach ($profile as $p) {
                  echo $p->nama ;
                }
              }else{
                echo 'Login';
              }
              ?></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('homepage/mycourses') ?>">My Courses</a></li>
                <li><a href="<?php echo base_url('homepage/showprofile') ?>">Profile</a></li>
                <li><a href="<?php echo base_url('homepage/logout')?>">Logout</a></li>
              </ul>
            </li>
          </ul>
          
        </nav>

      </div>
    </header>

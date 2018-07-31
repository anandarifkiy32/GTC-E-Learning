<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>HTML Education Template</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Header -->
    <header id="header">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a class="logo" href="index.html">
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
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="course.html">Courses</a></li>

            <li><a href="contact.html">Contact</a></li>
            <li class="dropdown"><a href="<?php if(!$profile){echo base_url();} ?>" <?php if($profile){ ?> class="dropdown-toggle" data-toggle="dropdown" <?php } ?>>              
              <?php 
              if($profile){
                foreach ($profile as $p) {
                  echo $p->nama ;
                }
              }else{
                echo 'Login';
              }
              ?></a><ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="<?php echo base_url('homepage/logout')?>">Logout</a></li>
              </ul>

            </li>
          </ul>
          
        </nav>

      </div>
    </header>

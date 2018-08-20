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
  <link rel="stylesheet" href="https://cdn.plyr.io/3.4.3/plyr.css">
  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .table2{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
    }
    .table2 > thead > tr > th,
    .table2 > tbody > tr > th,
    .table2 > tfoot > tr > th,
    .table2 > thead > tr > td,
    .table2 > tbody > tr > td,
    .table2 > tfoot > tr > td{
      line-height: 1.5;
      vertical-align: top;
      border-color: white; 
    }

    td {
  border-collapse: collapse;
  border: none;
}
tr:nth-of-type(5) td:nth-of-type(1) {
  visibility: hidden;
}
    .rotate {
      /* FF3.5+ */
      -moz-transform: rotate(-90.0deg);
      /* Opera 10.5 */
      -o-transform: rotate(-90.0deg);
      /* Saf3.1+, Chrome */
      -webkit-transform: rotate(-90.0deg);
      /* IE6,IE7 */
      filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0.083);
      /* IE8 */
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
      /* Standard */
      transform: rotate(-90.0deg);
    }
    #myImg {
      border-radius: 50%;
      object-fit: cover;
      cursor: pointer;
      transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    .tab2 {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #fff;
    }

    /* Style the buttons inside the tab */
    .tab2 button {
      background-color: #fff;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab2 button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab2 button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #fff;
      border-top: none;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption { 
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @keyframes zoom {
      from {transform:scale(0)} 
      to {transform:scale(1)}
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
      .modal-content {
        width: 100%;
      }
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
          <li class="dropdown"><a href="<?php if(!$profile){echo base_url();}else{echo "";} ?>" <?php if($profile){ ?> class="dropdown-toggle" data-toggle="dropdown" <?php } ?>><span class="fa fa-user"></span>               
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

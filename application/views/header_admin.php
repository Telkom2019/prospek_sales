<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROSPEK SALES</title>
  
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/map/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/map/css/font-awesome.css" rel="stylesheet" />  
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/map/css/custom.css" rel="stylesheet" />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url(); ?>assets/map/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <style>
  .jumbotron2 {
    position: relative;
    background: #fff center center;
    width: 100%;
    height: 80px;
    background-size: cover;
    overflow: hidden;
  }

    .footer {
   position: button;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 55px;
   background-color: black;
   color: white;
   text-align: center;
  }
  </style>
  <?php echo $map['js']; ?>
</head>
<body>
<!-- ========================================================================================================================================================-->   

<div class="jumbotron2">
  <div class="container text-center">
    <h1>PEMETAAN PELANGGAN INDIHOME </h1>   
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url('c_dashboard_admin/dashboard'); ?>"><i class="fa fa-home"></i>HOME</a></li>

        
        <li><a href="<?php echo base_url('c_map/datasekolah'); ?>">Data Pelanggan</a></li>
        <li><a href="<?php echo base_url('c_map/inputsekolah'); ?>">Input Pelanggan</a></li>
        <!-- <li><a href="#">menu 3</a></li>
        <li><a href="#">menu 4</a></li> -->
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('login') ?>"><i class="fa fa-users"></i>Logout<span></span></a></li>
      </ul> -->
    </div>
  </div>
</nav>

<?php

  /*

  Letakkan link fronted (css,js) di sini. ok?
  Sementara aku pake bootstrap 4.

  */
  $title = $page;
  // <link href="<?php echo site_url('assets/css/style.css'); " rel="stylesheet">?>
<?php
  // <link href="<?php echo base_url('assets/css/bootstrap-responsive.css'); " rel="stylesheet">?>
<!DOCTYPE html>
<html>
  <head>
    <!-- head  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "-".$title."-" ;?></title>
  	<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
  	<!-- <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  	<!-- <link href="<?php echo site_url('assets/css/w3.css'); ?>" rel="stylesheet"> -->
    <script src="<?php echo site_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/jquery-ui.min.js'); ?>"></script>
  	<script src="<?php echo site_url('assets/js/bootstrap.js');?>"></script>
    <!-- ini Amin Edit -->
    <style type="text/css">
    .nav-side-menu {
      overflow: none;
      font-family: verdana;
      font-size: 15px;
      font-weight: 200;
      background-color: #2e353d;
      position: absolute;
      top: 0px;
      left: 0px;
      width: 300px;
      height: 100%;
      color: #e1ffff;
    }
    .nav-side-menu .brand {
      background-color: #23282e;
      line-height: 150px;
      display: block;
      text-align: center;
      font-size: 20px;
      text-decoration: none;
    }
    .nav-side-menu .toggle-btn {
      display: none;
    }
    .nav-side-menu ul,
    .nav-side-menu li {
      list-style: none;
      padding: 0px;
      margin: 0px;
      line-height: 65px;
      cursor: pointer;    
    }

    .nav-side-menu ul .active, .nav-side-menu li .active {
      height: 70px;
      border-left: 15px solid #d19b3d;
      background-color: #4f5b69;
    }
    .nav-side-menu li {
      height: 70px;
      padding-left: 0px;
      border-left: 15px solid #2e353d;
      border-bottom: 1px solid #23282e;
    }
    .nav-side-menu li a {
      text-decoration: none;
      color: #e1ffff;
      height: 200px;
    }
    .nav-side-menu li a i {
      padding-left: 10px;
      width: 20px;
      padding-right: 20px;
    }
    .nav-side-menu li:hover {
      border-left: 3px solid #d19b3d;
      background-color: #4f5b69;
      transition: all 1s ease;
    }
    @media (max-width: 767px) {
    .nav-side-menu {
          position: relative;
          width: 100%;
          margin-bottom: 10px;
    }
    .nav-side-menu .toggle-btn {
        display: block;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 10!important;
        padding: 3px;
        background-color: #ffffff;
        color: #000;
        width: 40px;
        text-align: center;
    }
    .brand {
      text-align: left !important;
      font-size: 22px;
      padding-left: 20px;
      line-height: 50px !important;
    }
  }
  @media (min-width: 767px) {
    .nav-side-menu .menu-list .menu-content {
      display: block;
    }
  }
  body {
    margin: 0px;
    padding: 0px;
  }
  .container {
    width: 500px;
    margin-left: 140px;
    margin-right: 110px;
    
  }
  </style>
    <script src="js/jquery.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
   <script src="https://use.fontawesome.com/417e198f5e.js"></script>
<?php
//php code

?>

  </head>
  <!-- <body style="background-color: #79b79c; padding-top:100px;"> -->
  <body style="color:#000000;">
  <!-- padding-top: 70px; -->

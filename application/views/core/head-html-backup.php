<?php
  /*

  Letakkan link fronted (css,js) di sini. ok?
  using diffdash template

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

    <title><?php
    //switch page title, (page ini kelakuannya ini, dsb)
    switch ($page) {
      case "Beranda":echo "- ".$title." - ".$cmprofil->pnama;break;
      case "tampilpost":echo "- ".$page2." - ".$post->psjudul;break;
      default:echo "- aa".$title." - ";break;
    }
    ?></title>

  	<!-- <link href="<?php //echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php //echo site_url('assets/css/bootstrap.css'); ?>" rel="stylesheet"> -->
  	<!-- <link href="<?php //echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet"> -->
  	<!-- <link href="<?php //echo site_url('assets/css/w3.css'); ?>" rel="stylesheet"> -->
    <!-- <script src="<?php //echo site_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php //echo site_url('assets/js/jquery-ui.min.js'); ?>"></script>
  	<script src="<?php //echo site_url('assets/js/bootstrap.js');?>"></script> -->

<!-- TRY from template -->

    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- VENDOR CSS -->
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/linearicons/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist/css/chartist.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/toastr/toastr.min.css');?>">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
<!-- GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png');?>">


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
      height: 2 00%;
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

  /*CSS LOGIN*/
  body {
    padding-top: 90px;
}
.panel-login {
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
  color: #00415d;
  background-color: #fff;
  border-color: #fff;
  text-align:center;
}
.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
  color: #029f5b;
  font-size: 18px;
}
.panel-login>.panel-heading hr{
  margin-top: 10px;
  margin-bottom: 0px;
  clear: both;
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  height: 45px;
  border: 1px solid #ddd;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}
.btn-login {
  background-color: #59B2E0;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #53A3CD;
  border-color: #53A3CD;
}
.forgot-password {
  text-decoration: underline;
  color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
  text-decoration: underline;
  color: #666;
}

.btn-register {
  background-color: #1CB94E;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #1CA347;
  border-color: #1CA347;
}
/*END of CSS LOGIN*/
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




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('');?>">[][][]Situs[][][]</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('beranda/post')?>">post <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('beranda/profilm')?>">profil m <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('beranda/takmirm')?>">takmir m <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('beranda/ustadz')?>">Daftar ustadz <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('beranda/keuanganmasjid')?>">Keuangan Masjid <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('beranda/jadwalkegiatan')?>">Jadwal Kegiatan<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login')?>">Login</a>
      </li>
    </ul>
    <span class="navbar-text">
      <?php echo md5('pengunjung') ?>
    </span>
  </div>
</nav>

<div class="container">
<div class="nav-side-menu">
    <div class="brand"><a href="#Profile" style="text-decoration: none; color: #e1ffff;">CMS Masjid</a></div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">            
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('beranda/post')?>"><i class="fa fa-pencil fa-lg"></i> Post </span></a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('beranda/profilm')?>"><i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i> Profil m </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('beranda/takmirm')?>"><i class="fa fa-pencil fa-lg"></i> Takmir m </span></a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('beranda/ustadz')?>"><i class="fa fa-pencil fa-lg"></i> Daftar Ustadz  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('beranda/keuanganmasjid')?>"><i class="fa fa-usd fa-lg"></i>Keuangan Masjid <span class="sr-only">(current)</span></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('beranda/jadwalkegiatan')?>"><i class="fa fa-calendar-check-o fa-lg"></i> Jadwal Kegiatan  <span class="sr-only">(current)</span></a>

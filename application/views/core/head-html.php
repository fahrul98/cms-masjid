<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /*

  Letakkan link fronted (css,js) di sini. ok?
  using diffdash template

  */
  $title = $page;
?>

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
      case "tampilpost":echo "- ".$post->psjudul." - ";break;
      default:echo "- ".$title." - ";break;
    }
    ?></title>

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

<?php if($this->session->userdata('username') and $this->session->userdata('userpass')){
?>
<!-- CSS Template NetizenUI -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.boxslider.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/set1.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/overwrite.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.bxslider.css');?>">
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"> -->
<!-- MAIN CSS -->

<!-- JS Netizen -->
<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.bxslider.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/fliplightbox.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/functions.js');?>"></script> 
<script type="text/javascript">$('.portfolio').flipLightBox()</script>
<!-- Main JS ? -->
<?php } ?>

<?php if($page=="Tulis Postingan"||$page=="Ubah Postingan"){
?>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/summernote/summernote.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-markdown/bootstrap-markdown.min.css'); ?>">

<?php } ?>

<?php if($page=="Tambah Kegiatan"||$page=="Ubah Kegiatan"){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>">
<?php } ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
<!-- GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png');?>">

  </head>
  <!-- <body style="background-color: #79b79c; padding-top:100px;"> -->
  <body style="color:#000000;">
  <!-- padding-top: 70px; -->

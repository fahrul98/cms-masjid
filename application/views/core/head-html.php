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
<?php

if(!isset($mode)){

?>
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/linearicons/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist/css/chartist.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/toastr/toastr.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
<!-- Main JS ? -->
<?php }else{
 ?>
 <!-- CSS Template NetizenUI -->
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/set1.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/overwrite.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.bxslider.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

<?php
} ?>
<?php if($page=="Tulis Postingan"||$page=="Ubah Postingan"){
?>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/summernote/summernote.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-markdown/bootstrap-markdown.min.css'); ?>">

<?php } ?>

<?php if($page=="Tambah Kegiatan"||$page=="Ubah Kegiatan"){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/prettify-1.0.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/bootstrap-datetimepicker.css'); ?>">
<?php } ?>

<?php //jika media
if($page=="Media" or isset($search)){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/dropify/css/dropify.min.css');?>">
<?php } ?>


<!-- GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png');?>">

  </head>
  <!-- <body style="background-color: #79b79c; padding-top:100px;"> -->
  <body style="color:#000000;">
  <!-- padding-top: 70px; -->

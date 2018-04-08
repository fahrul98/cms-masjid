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
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
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
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/set1.css');?>">

<!-- Main JS ? -->
<?php }else{
 ?>
 <!-- =======================================================
    Theme Name: eNno
    Theme URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
 <!-- CSS Template NetizenUI -->
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/set1.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/overwrite.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.bxslider.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/slide.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/css/datatables.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/css/dataTables.bootstrap.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/css/dataTables.jqueryui.min.css');?>">

<?php
} ?>
<?php if($page=="Tulis Postingan"||$page=="Ubah Postingan"){
?>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/summernote/summernote.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-markdown/bootstrap-markdown.min.css'); ?>">

<?php } ?>

<?php if($page=="Tambah Kegiatan"||$page=="Ubah Kegiatan"||$page=="Tambah Rekam Donasi"||$page=="Ubah Rekam Donasi"||$page=="Tambah Entri"||$page=="Ubah Entri"){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/prettify-1.0.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>">
<?php } ?>

<?php //jika media
if($page=="Media" || $page=="Profil Admin" or isset($search)){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/dropify/css/dropify.min.css');?>">
<?php } ?>


<!-- GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png');?>">


<style>
/*

min

 */

  .wrapper {
    padding-right:;
    padding-left:;
  }
  .container .row .card {
    border: 2px;
  }
  .container .text-center .hitam {
    color: #000000;
  }
  .phitam {
    color:#000000;
    font-size: 15px;
    /*font-family: Arial;*/
  }
  .container .text-center .phitam {
    color:#000000;
    font-size: 15px;
  }
  th {
    text-align: center;
  }

  .nomargin {
    margin:0px;
  }

  .nopadding {
    padding: 0px;
    width: 430px;
  }

  .navbar .paddinglr {
    padding-left: 15px;
    padding-right: 0px;
  }

  .textfooter {
    padding-top: 0px;
    text-align: justify;
  }

  .container .navbar-header .navbar-brand {
    color:gold;
  }

  <?php
    $dsid=$pgt->dsid;
    $d = array(
      'nav' => '212121','secondary' => '424242',
      'container' => 'adabab','lnr' => 'fff',
      'border' => '424242','textcol' => 'fff',
      'img-bg' => 'img-4.jpg','linkcol' => '0000bb',
      // 'hover' => '424242','hover' => '101010',
      'tab' => 'fff','tabact' => '212121',
      'textisi' => '000000','licol' => '000000'
    );
    switch ($dsid) {
      case 1: //Dark
      $d = array(
      'nav' => '212121','secondary' => 'ededed',
      'container' => 'fff','lnr' => 'fff',
      'border' => '424242','textcol' => 'fff',
      'img-bg' => 'img-3.jpg','linkcol' => '0000bb',
      'hover' => '2a882a','icon' => '424242',
      'tab' => 'fff','tabact' => '4f4f4f',
      'textisi' => '000000',
      'licol' => 'fff'
    );
        break;

      case 2: //Light
      $d = array(
      'nav' => 'E0E0E0','secondary' => 'E0E0E0',
      'container' => '','lnr' => 'ddd',
      'border' => '424242','textcol' => 'fff',
      'img-bg' => 'img-2.jpg','linkcol' => '0000bb',
      'hover' => '424242','icon' => '424242',
      'tab' => 'fff','tabact' => '4f4f4f',
      'textisi' => '000000','licol' => 'fff'
    );
        break;

    case 3:
      $d = array(
      'nav' => '00796B','secondary' => 'E0E0E0',
      'container' => '','lnr' => 'ddd',
      'border' => '00897B','textcol' => '000000',
      'img-bg' => 'img-4.jpg','linkcol' => '0000bb',
      'hover' => '00897B','icon' => '00796B ',
      'tab' => 'fff','tabact' => '4f4f4f',
      'textisi' => '000000','licol' => 'fff'
    );
        break;
      default:
        # code...
        break;
    }
  ?>
  /*body .whitebg{
    background-color: #<?php echo $d['container']; ?>;
    padding-top: 50px;
    width: relative;
    margin-left: 10px;
    margin-right: 10px;
    margin:10px;
  }*/

  <?php include('cmscss.php'); ?>

  /*

  galeri

  */
  <?php include('galeri.php'); ?>
</style>

  </head>

  <?php
  //jika $mode di controller ada dan halaman bukan hal.instalasi , maka muncul body utk pengunjung
  if ($page!='Instalasi'&&isset($mode)) {
  ?>
  <!-- <body style="background-color: #<?php echo $d['secondary']; ?>;"> -->
  <body>
  <?php

//jika tidak maka muncul punya si admin
  }else if (!isset($mode)&&$this->session->userdata('username') and $this->session->userdata('userpass')){
  ?>
  <body>
  <?php
  }else if ($page=='Instalasi') {

  //navigasi instalasi next>next>next mungkin?

  ?>

  <?php
  }
  ?>

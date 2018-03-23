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
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
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
/* min */

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
    font-size: 17px;
    font-family: Arial;
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
    $dsid=1;
    $d = array(
      'nav' => '212121', 
      'secondary' => '424242', 
      'container' => 'adabab',
      'lnr' => 'fff',
      'border' => '424242',
      'textcol' => 'fff',
      'img-bg' => 'img-4.jpg',
      'linkcol' => '0000bb',
      'hover' => '424242',
      'tab' => 'fff',
      'tabact' => '212121',
      'textisi' => '000000',
      'licol' => '000000'

    );
    switch ($dsid) {
      case 1: //Dark
      $d = array(
      'nav' => '212121', 
      'secondary' => 'ededed', 
      'container' => 'fff',
      'lnr' => 'fff',
      'border' => '424242',
      'textcol' => 'fff',
      'img-bg' => 'img-3.jpg',
      'linkcol' => '0000bb',
      'hover' => 'adabab',
      'icon' => '424242',
      'tab' => 'fff',
      'tabact' => '4f4f4f',
      'textisi' => '000000',
      'licol' => 'fff'
    );
        break;

      case 2: //Light
      $d = array(
      'nav' => 'E0E0E0', 
      'secondary' => 'E0E0E0', 
      'container' => '',
      'lnr' => 'ddd',
      'border' => '424242',
      'textcol' => 'fff',
      'img-bg' => 'img-2.jpg',
      'linkcol' => '0000bb',
      'hover' => '424242',
      'icon' => '424242',
      'tab' => 'fff',
      'tabact' => '4f4f4f',
      'textisi' => '000000',
      'licol' => 'fff'
    );
        break;
    
    case 3:
      $d = array(
      'nav' => '00796B', 
      'secondary' => 'E0E0E0', 
      'container' => '',
      'lnr' => 'ddd',
      'border' => '00897B',
      'textcol' => '000000',
      'img-bg' => 'img-4.jpg',
      'linkcol' => '0000bb',
      'hover' => '00897B',
      'icon' => '00796B ',
      'tab' => 'fff',
      'tabact' => '4f4f4f',
      'textisi' => '000000',
      'licol' => 'fff'
    );
        break;
      default:
        # code...
        break;
    }
  ?>
  body .whitebg{
    background-color: #<?php echo $d['container']; ?>;
    padding-top: 50px;
    width: relative;
    margin-left: 90px;
    margin-right: 90px;
  }
  body .whitebg .container {
    width: relative;
  }

  .container .icon:hover {
    background-color: #<?php echo $d['hover']; ?>;
  }

  /*CARD CSS*/
  .container2 {
    width: 250px;
    height: 150px;
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;
  }
  .card {
  /* Add shadows to create the "card" effect */
    position: relative;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    width: 250px; 
    height: 100px
    padding-left:20px;
    padding-right: ;
    margin-right: 50px;
    margin-bottom: 100px;
  }

  /* On mouse-over, add a deeper shadow */
  .card:hover {
    box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  }

  /* Add some padding inside the card container */
  .container {
    padding: 2px 16px;
  }

  .img {
    border-radius: 5px 5px 0 0;
    width:250px;
    height:250;
  }
  /*END CARD CSS*/

  /*Background-image*/
  .backgroundpict {
    background-color: #<?php echo $d['secondary']; ?>;
    background:url("<?php echo base_url('assets/img/'.$d['img-bg']);?>");
    background-attachment: fixed;
    width: 100%;
    height: relative;
  }

  .backgroundpictop {
    background-color: #<?php echo $d['secondary']; ?>;
    background:url("<?php echo base_url('assets/img/'.$d['img-bg']);?>");
    background-attachment: fixed;
    width: 100%;
    height: 676px;
  }

  /*Footer*/
  .pputih {
    color: #<?php echo $d['textcol']; ?>;
    font-size: 17px;
    font-family: Arial;
  }
  
  body .last-div {
    background-color:#<?php echo $d['nav'];?>;
  }

  .inner-footer .widgetheading {
    color: #<?php echo $d['textcol']; ?>;
  }

  .inner-footer .row a {
    color: #<?php echo $d['textcol']; ?>;
  }

  .inner-footer .row p {
    color: #<?php echo $d['textcol']; ?>;
  }

  .container ul.social-network li {
    display:inline;
    margin: 0 15px;
    color: #<?php echo $d['licol']; ?>;
  }

  .container ul.social-network li a {
    color: #<?php echo $d['licol']; ?>;
  }

  .container ul.social-network li a:hover {
    color: #<?php echo $d['hover']; ?>;
  }

  a.scrollup:hover {
    background-color: #<?php echo $d['hover']; ?>;
  }

  div.transbox {
    height:220px; 
    width:350px;
    background-color: #<?php echo $d['hover']; ?>;
    /*opacity: 0.6;*/
    background: rgba(0,0,0,0.2);
  }

  /*netizen*/
  body .navbar{
    background-color:#<?php echo $d['nav'];?>;
  }

  .navbar .size {
    font-size: 24px;
  }

  .navbar .navbar-collapse a:hover{
    background-color: #<?php echo $d['hover']; ?>;
  }

  .navbar .navbar-collapse .active a{
    background-color: #<?php echo $d['hover']; ?>;
  }

  .container .center{
    color: #<?php echo $d['textisi']; ?>;
    text-align: center;
    margin-top: 0px;
  }

  .container .text-center h2{
    color: #<?php echo $d['textcol']; ?>;
  }

  .container .text-center p{
    color: #<?php echo $d['textcol']; ?>;
  }

  .container .row .text-center{
    color: #<?php echo $d['textcol']; ?>; 
  }

  .container .icon {
    color: #<?php echo $d['icon']; ?>; 
  }

  .container .nav a {
    color: #<?php echo $d['tab']; ?>; 
    background-color: #<?php echo $d['nav']; ?>
  }

  .container .nav a:hover {
    color: #<?php echo $d['tab']; ?>; 
    background-color: #<?php echo $d['hover']; ?>
  }

  .container .active a {
    color: #<?php echo $d['tab']; ?>; 
    background-color: #<?php echo $d['tabact']; ?>
  }

  .container .active a:hover {
    color: #<?php echo $d['tab']; ?>; 
    background-color: #<?php echo $d['hover']; ?>
  }

  /*Admin*/
  #wrapper .navbar{
    background-color:#<?php echo $d['nav']; ?>;
  }

  #wrapper .sidebar{
    background-color:#<?php echo $d['nav'] ;?>;
    color: #<?php echo $d['textcol'] ?>;
  }

  #wrapper a {
    color: #<?php echo $d['textcol']; ?>;
  }
  #wrapper #main-content a {
    color: #<?php echo $d['linkcol']; ?>;
  }

  #wrapper .dropdown-menu a {
    color: #<?php echo $d['linkcol']; ?>;
  }

  .lnr {
    color:#<?php echo $d['lnr']; ?>;
  }

  #wrapper .border {
    border-color:#<?php echo $d['border'] ;?>;
  }

  #wrapper .sidebar-nav a:hover {
    background-color: #<?php echo $d['hover']; ?>; ;
  }
  #wrapper .sidebar .active a {
    background-color: #<?php echo $d['hover']; ?>; ;
  }
</style>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
  </head>
  
  <?php
  //jika $mode di controller ada dan halaman bukan hal.instalasi , maka muncul body utk pengunjung
  if ($page!='Instalasi'&&isset($mode)) {
  ?>
  <body style="background-color: #<?php echo $d['secondary']; ?>;">
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

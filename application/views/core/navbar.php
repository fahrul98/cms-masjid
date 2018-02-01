<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /*
  navbar.php navigasi di sebelah
  updates
  16/1/2018
    - bootstrap navbar
  28/1/2018

  - diffdash : navbar ada 2 komponen, navbar atas & sidebar

  */
?>
<!-- WRAPPER -->
<div id="wrapper">
<?php
  //jika $mode di controller ada dan halaman bukan hal.instalasi , maka muncul navbar utk pengunjung
  if ($page!='Instalasi'&&isset($mode)) {
?>

<!-- NAVBAR Netizen -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('');?>"><span><?php echo $cmprofil->pnama;?></span></a>
      </div>
      <div class="navbar-collapse collapse">              
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">            
            <li role="presentation"><a href="<?php echo base_url('admin');?>">Admin</a></li>
          <?php
              if ($page=="Beranda") {
              if (isset($tanya)) {
              echo $tanya;
             }
          ?>   
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>       
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>  

          <?php }else if ($page=="Semua Post") {?>
            <li role="presentation" class="active"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>             
          <?php }else if ($page=="Profil Masjid") {?>    
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>

          <?php }else if ($page=="Jadwal Kegiatan") {?>     
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>

          <?php }else if ($page=="Keuangan Masjid") {?>
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>

          <?php }else if ($page=="Donasi") {?>
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>

            <?php }else if ($page=="Bantuan") {?>
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation" class="active"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>

            <?php }else if ($page=="Tentang") {?>
            <li role="presentation"><a href="<?php echo base_url('beranda/post');?>">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>
            <li role="presentation"><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
            <li role="presentation"><a href="<?php echo base_url('rekamdonasi');?>">Donasi</a></li>  
            <li role="presentation"><a href="<?php echo base_url('beranda/bantuan');?>">Bantuan</a></li>  
            <li role="presentation" class="active"><a href="<?php echo base_url('beranda/tentang');?>">?</a></li>
          </ul>
        </div>
        <?php }?>
      </div>      
    </div>
  </nav>
  <!-- END NAVBAR -->

  

<?php

//jika tidak maka muncul punya si admin

  // }else if (!isset($mode)||$mode=='view'){
  // if ($this->session->userdata('username') and $this->session->userdata('userpass')){
  }else if (!isset($mode)&&$this->session->userdata('username') and $this->session->userdata('userpass')){

// tema memakai wrapper sbg container, jadi di wrap. gk usah pake tag penutup untuk div wrapper.

?>

<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-btn">
      <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
    </div>
    <!-- logo -->
    <div class="navbar-brand">
      <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="CMS Masjid" class="img-responsive logo"></a>
    </div>
    <!-- <div class="navbar-brand">
      <?php echo base64_decode('TXVoYW1tYWQgQWRpYiB6YW16YW0K'); ?>
    </div> -->
    <div class="navbar-brand">
      <a href="<?php echo base_url('beranda')?>">Lihat situs</a>
    </div>
    <!-- end logo -->
    <div class="navbar-right">
      <!-- search form -->
      <?php echo form_open($page.'/search','class=form');  ?>
      <div id="navbar-search" class="navbar-form search-form">
        <input name="search" value="" class="form-control" placeholder="Cari admin..." type="text">
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      </div>
      <!-- end search form -->
      <!-- navbar menu -->
      <div id="navbar-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
              <i class="lnr lnr-cog"></i>
            </a>
            <ul class="dropdown-menu user-menu menu-icon">
              <li class="menu-heading">Akun</li>
              <li><a href="<?php echo base_url('profiladmin')?>"><i class="fa fa-fw fa-edit"></i>Profil Saya</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url('admin/logout')?>"><i class="fa fa-fw fa-lock"></i> <span>Logout</span></a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
              <i class="lnr lnr-question-circle"></i>
            </a>
            <ul class="dropdown-menu user-menu">
              <li>
                <form class="search-form help-search-form">
                  <input value="" class="form-control" placeholder="How can we help?" type="text">
                  <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
              </li>
              <li class="menu-heading">Bantuan</li>
                <li><a href="<?php echo base_url('beranda/bantuan');?>">Setting up Campaign</a></li>
                <li class="menu-heading">Kami</li>
              <li class="menu-button">
                <a href="<?php echo base_url('beranda/tentang');?>" class="btn btn-primary"><i class="fa fa-question-circle"></i>Tentang Developer</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- end navbar menu -->
    </div>
  </div>
</nav>
<!-- END NAVBAR -->
<!-- LEFT SIDEBAR -->
<div id="left-sidebar" class="sidebar">
  <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
    <span class="sr-only">Toggle Fullwidth</span>
    <i class="fa fa-angle-left"></i>
  </button>
  <div class="sidebar-scroll">
    <div class="user-account">
      <img src="<?php echo base_url('assets/img/user.png')?>" class="img-responsive img-circle user-photo" alt="Admin Masjid">
      <div class="dropdown">
        <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Assalamualaikum, <strong><?php if(isset($padmin))echo $padmin->username;?></strong> <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu dropdown-menu-right account">
          <li><a href="<?php echo base_url('profiladmin')?>">Profil Saya</a></li>
          <li><a href="<?php echo base_url('pengaturan')?>">Pengaturan</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url('admin/logout')?>">Logout</a></li>
        </ul>
      </div>
    </div>
    <nav id="left-sidebar-nav" class="sidebar-nav">
      <ul id="main-menu" class="metismenu">
        <li class="active"><a href="<?php echo base_url('admin')?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        <li class="">
          <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-magic-wand"></i> <span>Masjid</span></a>
          <ul>
            <li class=""><a href="<?php echo base_url('profilm')?>">Profil Masjid</a></li>
            <li class=""><a href="<?php echo base_url('takmir')?>">Takmir</a></li>
            <li class=""><a href="<?php echo base_url('ustadz')?>">Ustadz</a></li>
            <!-- <li class=""><a href="ui-buttons.html">Buttons</a></li>
            <li class=""><a href="ui-bootstrap.html">Bootstrap UI</a></li>
            <li class=""><a href="ui-icons.html"><span>Icons</span></a></li> -->
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('post')?>" class="has-arrow" aria-expanded="false"><i class="lnr lnr-pencil"></i> <span>Post</span></a>
          <ul>
            <li class=""><a href="<?php echo base_url('tag')?>">Tag</a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('jadwalkegiatan')?>" class="" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Jadwal Kegiatan</span></a>
        </li>
        <li class="">
          <a href="<?php echo base_url('media')?>" class="" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Media</span></a>
        </li>
        <li class="">
          <a href="#charts" class="has-arrow" aria-expanded="false"><i class="lnr lnr-chart-bars"></i> <span>Keuangan Masjid</span></a>
          <ul aria-expanded="true">
            <li class=""><a href="<?php echo base_url('keuanganmasjid')?>">Keuangan</a></li>
            <li class=""><a href="<?php echo base_url('rekamdonasi')?>">Rekam Donasi</a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('pengaturan')?>" class="" aria-expanded="false"><i class="lnr lnr-cog"></i><span>Pengaturan</span></a>
        </li>
        <!-- <li class=""><a href="notifications.html"><i class="lnr lnr-alarm"></i> <span>Notifications</span> <span class="badge bg-danger">15</span></a></li>
        <li class=""><a href="typography.html"><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li> -->
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
<?php
}else if ($page=='Instalasi') {

  //navigasi instalasi next>next>next mungkin?

?>

<?php
}
?>

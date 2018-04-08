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
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand paddinglr" href="<?php echo base_url('');?>" style="font-style:bold;"><span class="size"> <?php echo $cmprofil->pnama;?></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <!-- <ul class="nav nav-tabs" role="tablist"> -->
            <ul class="nav nav-tabs">

              <?php
//tombol navbar aktif
$akt=array('','','','','',
'','','','','',
'','','','','');
switch ($page) {
  case "Semua Post":$akt[0]='class="active"';break;
  case "Profil Masjid":$akt[1]='class="active"';break;
  case "Jadwal Kegiatan":$akt[2]='class="active"';break;
  case "Keuangan Masjid":$akt[3]='class="active"';break;
  case "Rekam Donasi":$akt[4]='class="active"';break;
  case "Bantuan":$akt[5]='class="active"';break;
  case "Galeri":$akt[6]='class="active"';break;
  case "Pengembang":$akt[7]='class="active"';break;
  default:break;
}?>
                <li role="presentation"><a href="<?php echo base_url('beranda');?>">Beranda</a></li>
                <li role="presentation" <?php echo $akt[0]; ?>><a href="<?php echo base_url('beranda/post');?>">Artikel</a></li>
                <li class="dropdown" <?php echo $akt[1]; ?>>
                  <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('beranda');?>">Profil -->
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Profil<span class="caret"></span></a>
                  <!-- <ul class="dropdown-menu" style="padding-top: 0px; padding-bottom: 0px"> -->
                  <!-- <ul class="dropdown-menu"> -->
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('beranda/profilm');?>">Profil</a></li>
                    <li><a href="<?php echo base_url('beranda/takmirm');?>">Takmir</a></li>
                    <li><a href="<?php echo base_url('beranda/ustadz');?>">Ustadz</a></li>
                  </ul>
                </li>
                <li role="presentation" <?php echo $akt[2]; ?>><a href="<?php echo base_url('beranda/jadwalkegiatan');?>">Jadwal</a></li>

                <li role="presentation" <?php echo $akt[3]; ?>><a href="<?php echo base_url('beranda/keuanganmasjid');?>">Keuangan Masjid</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('beranda');?>" role="button">Lebih<span class="caret"></span></a>
                  <ul class="dropdown-menu" style="padding-top: 0px; padding-bottom: 0px">
                    <li role="presentation" <?php echo $akt[6]; ?>><a href="<?php echo base_url('beranda/galeri');?>">Galeri</a></li>
                    <li role="presentation" <?php echo $akt[7]; ?>><a href="<?php echo base_url('beranda/tentang');?>">Pengembang</a></li>
                  </ul>
                </li>
                <?php if ($this->session->userdata('username')&&$this->session->userdata('userpass')) {
                    ?>
                <li role="presentation"><a href="<?php echo   base_url('admin');?>">Admin</a></li>
                <?php
                    } else{
                    ?>
                  <li role="presentation"><a href="<?php echo base_url('login');?>">Login</a></li>
                  <?php
                  }
                  ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<?php if ($page=="Beranda") { ?>

    <!-- <nav id="navquick" class="navbar navbar-fixed-bottom" role="navigation">
      <div class="container">
        <div class="menu">
          <ul class="nav navbar-nav nav-tabs">
            <li role="presentation"><a href="#myCarousel">^</a></li>
            <li role="presentation"><a href="#1">1</a></li>
            <li role="presentation"><a href="#2">2</a></li>
            <li role="presentation"><a href="#3">3</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    <?php
    } ?>

    <!-- END NAVBAR -->
    <?php

//jika tidak maka muncul punya si admin

  // if ($this->session->userdata('username') and $this->session->userdata('userpass')){
  }else if (!isset($mode)&&$this->session->userdata('username') and $this->session->userdata('userpass')){

// tema admin memakai wrapper sbg container, jadi di wrap. gk usah pake tag penutup untuk div wrapper.

?>
      <!-- WRAPPER -->
      <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top border">
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
              <!-- <div id="navbar-search" class="navbar-form search-form"> -->
              <?php echo form_open('post/search','id="navbar-search" class="navbar-form search-form" style="padding-left:0px; padding-right:0px"');?>
              <input name="search" value="" class="form-control" placeholder="Cari post..." type="text">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              <!-- </div> -->
              </form>
              <!-- end search form -->
              <!-- navbar menu -->
              <div id="navbar-menu">
                <ul class="nav navbar-nav col-md-12 col-xs-12">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="lnr lnr-cog"></i></a>
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

        <?php
//tombol navbar aktif
$akt=array('','','','','',
'','','','','',
'','','','','',);
switch ($page) {
  case "Beranda Admin":$akt[0]='active';break;
  case "Profil Masjid":$akt[1]='active';break;
  case "Takmir":$akt[2]='active';break;
  case "Ustadz":$akt[3]='active';break;
  case "Post":$akt[4]='active';break;
  case "Tag":$akt[5]='active';break;
  case "Jadwal Kegiatan":$akt[6]='active';break;
  case "Media":$akt[7]='active';break;
  case "Keuangan Masjid":$akt[8]='active';break;
  case "Rekam Donasi":$akt[9]='active';break;
  case "Pengaturan":$akt[10]='active';break;
  default:break;
}?>

          <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
    <span class="sr-only">Toggle Fullwidth</span>
    <i class="fa fa-angle-left"></i>
  </button>
            <div class="sidebar-scroll">
              <div class="user-account">
                <a href="<?php echo base_url('profiladmin'); ?>">
              <img src="<?php
                //2
                $mediadir = isset($padmin->mediadir)?$padmin->mediadir:$padmin['mediadir'];
                echo base_url('uploads/takmir/'.$mediadir);
              ?>" class="img-responsive img-circle user-photo" alt="Admin Masjid" style="width:150px;height:150px"></a>
                <div class="dropdown">
                  <a href="#" class="aputih dropdown-toggle user-name" data-toggle="dropdown">Assalamualaikum, <strong><?php if(isset($padmin->username)){
                  echo $padmin->username;
                }else{
                  echo $padmin['username'];
                }?></strong> <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="<?php echo base_url('profiladmin')?>">Profil Saya</a></li>
                    <li><a href="<?php echo base_url('pengaturan')?>">Pengaturan</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('admin/logout')?>">Logout</a></li>
                  </ul>
                </div>
              </div>
              <?php
    //tombol navbar aktif
    $aria=array('false','false','false');
    $colps=array('','','');
    if(isset($ctrl)){

    switch ($ctrl) {
      case "masjid":$aria[0]='true';$colps[0]="class='collapse in'";break;
      case "post":$aria[1]='true';$colps[1]="class='collapse in'";break;
      case "kmasjid":$aria[2]='true';$colps[2]="class='collapse in'";break;
      default:break;
    }
    }?>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                  <ul id="main-menu" class="metismenu">
                    <li class="" <?php echo $akt[0]; ?>><a href="<?php echo base_url('admin')?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li class="<?php echo $akt[1].$akt[2].$akt[3];?>">
                      <a href="#uiElements" class="has-arrow" aria-expanded="<?php echo $aria[0];?>"><i class="lnr lnr-magic-wand"></i> <span>Masjid</span></a>
                      <ul <?php echo $colps[0]; ?>>
                        <li class="<?php echo $akt[1];?>"><a href="<?php echo base_url('profilm')?>">Profil Masjid</a></li>
                        <li class="<?php echo $akt[2];?>"><a href="<?php echo base_url('takmir')?>">Takmir</a></li>
                        <li class="<?php echo $akt[3];?>"><a href="<?php echo base_url('ustadz')?>">Ustadz</a></li>

                        <!-- <li class=""><a href="ui-buttons.html">Buttons</a></li>
            <li class=""><a href="ui-bootstrap.html">Bootstrap UI</a></li>
            <li class=""><a href="ui-icons.html"><span>Icons</span></a></li> -->
                      </ul>
                    </li>
                    <li class="<?php echo $akt[4].$akt[5];?>">
                      <a href="<?php echo base_url('post')?>" class="has-arrow" aria-expanded="<?php echo $aria[1];?>"><i class="lnr lnr-pencil"></i> <span>Post</span></a>
                      <ul <?php echo $colps[1]; ?>>
                        <li class="<?php echo $akt[4]; ?>"><a href="<?php echo base_url('post')?>">Post</a></li>
                        <li class="<?php echo $akt[5]; ?>"><a href="<?php echo base_url('tag')?>">Tag</a></li>
                      </ul>
                    </li>
                    <li class="<?php echo $akt[6]; ?>">
                      <a href="<?php echo base_url('jadwalkegiatan')?>" class="" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Jadwal Kegiatan</span></a>
                    </li>
                    <li class="<?php echo $akt[7]; ?>">
                      <a href="<?php echo base_url('media')?>" class="" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Media</span></a>
                    </li>
                    <li class="<?php echo $akt[8].$akt[9]; ?>">
                      <a href="#charts" class="has-arrow" aria-expanded="<?php echo $aria[2];?>"><i class="lnr lnr-chart-bars"></i> <span>Keuangan Masjid</span></a>
                      <ul <?php echo $colps[2]; ?>>
                        <li class="<?php echo $akt[8]; ?>"><a href="<?php echo base_url('keuanganmasjid')?>">Keuangan</a></li>
                        <li class="<?php echo $akt[9]; ?>"><a href="<?php echo base_url('rekamdonasi')?>">Rekam Donasi</a></li>
                      </ul>
                    </li>
                    <li class="<?php echo $akt[10]; ?>">
                      <a href="<?php echo base_url('pengaturan')?>" class="" aria-expanded="false"><i class="lnr lnr-cog"></i><span>Pengaturan</span></a>
                    </li>
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

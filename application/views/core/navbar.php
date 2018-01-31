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

<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-btn">
      <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
    </div>
    <!-- logo -->
    <div class="navbar-brand">
      <a href="<?php echo base_url('');?>"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="DiffDash Logo" class="img-responsive logo"></a>
    </div>
    <?php
      if ($this->session->userdata('username') and $this->session->userdata('userpass')){
    ?>
    <div class="navbar-brand">
      <a href="<?php echo base_url('admin');?>">Kembali ke admin</a>
    </div>
    <?php
      }else{
    ?>
    <div class="navbar-brand">
      <a href="<?php echo base_url('login');?>">Login</a>
    </div>
    <?php
      }
    ?>
    <!-- end logo -->
        <div class="navbar-right">
          <!-- search form -->
          
          <form id="navbar-search" class="navbar-form search-form">
            <input value="" class="form-control" placeholder="Cari..." type="text">
            <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
          </form>
          <!-- end search form -->
          <!-- navbar menu -->
          <div id="navbar-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                  <i class="lnr lnr-alarm"></i>
                  <span class="notification-dot"></span>
                </a>
                <!-- notif -->
                <ul class="dropdown-menu notifications">
                  <li class="header"><strong>x notifikasi baru</strong></li>
                  <li>
                    <a href="#">
                      <div class="media">
                        <div class="media-left">
                          <i class="fa fa-fw fa-flag-checkered text-muted"></i>
                        </div>
                        <div class="media-body">
                          <p class="text">Your campaign <strong>Holiday Sale</strong> is starting to engage potential customers.</p>
                          <span class="timestamp">24 minutes ago</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="footer"><a href="#" class="more">See all notifications</a></li>
                </ul>
              </li>
              <?php if ($this->session->userdata('username') and $this->session->userdata('userpass')){ ?>
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
              <?php } ?>
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
              <i class="lnr lnr-alarm"></i>
              <span class="notification-dot"></span>
            </a>

            <!-- notif -->

            <ul class="dropdown-menu notifications">
              <li class="header"><strong>x notifikasi baru</strong></li>
              <li>
                <a href="#">
                  <div class="media">
                    <div class="media-left">
                      <i class="fa fa-fw fa-flag-checkered text-muted"></i>
                    </div>
                    <div class="media-body">
                      <p class="text">Your campaign <strong>Holiday Sale</strong> is starting to engage potential customers.</p>
                      <span class="timestamp">24 minutes ago</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="footer"><a href="#" class="more">See all notifications</a></li>
            </ul>
          </li>
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
              <li><a href="#">Setting up Campaign</a></li>
              <li><a href="#">Understanding Website Analytics</a></li>
              <li><a href="#">Boost Your Sales</a></li>
              <li><a href="#">Knowing Your Audience</a></li>
              <li class="menu-heading">ACCOUNT</li>
              <li><a href="#">Change Password</a></li>
              <li><a href="#">Privacy &amp; Security</a></li>
              <li><a href="#">Membership</a></li>
              <li class="menu-heading">BILLING</li>
              <li><a href="#">Setup Payment</a></li>
              <li><a href="#">Auto-Renewal Program</a></li>
              <li><a href="#">Cancellation</a></li>
              <li class="menu-button">
                <a href="#" class="btn btn-primary"><i class="fa fa-question-circle"></i> HELP CENTER</a>
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
          <a href="<?php echo base_url('post')?>" class="" aria-expanded="false"><i class="lnr lnr-pencil"></i> <span>Post</span></a>
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

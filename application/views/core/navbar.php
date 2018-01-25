<?php
  /*
  navbar.php navigasi di sebelah
  updates
  16/1/2018
    - bootstrap navbar
  */
?>
<!-- navbar Amin -->
<div class="container">
<div class="nav-side-menu">
    <div class="brand"><a href="#Profile" style="text-decoration: none; color: #e1ffff;">CMS Masjid</a></div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
              <li  class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin')?>"><i class="fa fa-user-o fa-lg"></i><span class="sr-only">(current)</span> admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('profiladmin')?>"><i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i>    Profil Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('profilm')?>"><i class="fa fa-list-alt fa-lg"></i> Profil Masjid </span></a>
              </li>               
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('post')?>"><i class="fa fa-pencil fa-lg"></i> Post </span></a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('jadwalkegiatan')?>"><i class="fa fa-calendar-check-o fa-lg"></i> Jadwal Kegiatan </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('keuanganmasjid')?>"><i class="fa fa-usd fa-lg"></i>Keuangan Masjid</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('pengaturan')?>""><i class="fa fa-cog fa-lg"></i> Pengaturan</a>
              </li>
            </ul>
     </div>
</div>
</div>
</nav>
<!-- navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin')?>">admin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('post')?>">Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('profiladmin')?>">Profil Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('profilm')?>">Profil Masjid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('jadwalkegiatan')?>">Jadwal Kegiatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('keuanganmasjid')?>">Keuangan Masjid</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="<?php echo base_url('pengaturan')?>">Pengaturan</a>
      </li>
    </ul>
    <span class="navbar-text">
      <!-- 160db33763e54957726dc8e62489d6df -->
     
<?php

?>

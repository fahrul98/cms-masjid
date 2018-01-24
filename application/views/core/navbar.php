<?php
  /*
  navbar.php navigasi di sebelah
  updates
  16/1/2018
    - bootstrap navbar
  */

  //jika mode di controller ada, maka muncul navbar utk pengunjung
  if (isset($mode)&&$mode=="pengunjung") {
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('');?>">[][][]Situs[][][]</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('pengunjung/post')?>">post <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('pengunjung/profilm')?>">profil m <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('pengunjung/takmirm')?>">takmir m <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('pengunjung/ustadz')?>">Daftar ustadz <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('pengunjung/keuanganmasjid')?>">Keuangan Masjid <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('pengunjung/jadwalkegiatan')?>">Jadwal Kegiatan<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
      <?php echo md5('pengunjung') ?>
    </span>
  </div>
</nav>
<?php

//jika tidak maka muncul punya si admin

  }else if (!isset($mode)){

?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('pengunjung');?>">[][][]Situs[][][]</a>
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
        <a class="nav-link" href="<?php echo base_url('takmir')?>">Takmir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ustadz')?>">Ustadz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('media')?>">Media</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('jadwalkegiatan')?>">Jadwal Kegiatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('keuanganmasjid')?>">Keuangan Masjid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('rekamdonasi')?>">R. Donasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('pengaturan')?>">Pengaturan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/logout')?>">Logout</a>
      </li>
    </ul>
    <span class="navbar-text">
      <?php echo md5('dib') ?>
    </span>
  </div>
</nav>
<?php
}
?>

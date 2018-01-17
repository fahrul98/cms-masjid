<?php
  /*
  navbar.php navigasi di sebelah
  updates
  16/1/2018
    - bootstrap navbar
  */
?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
      <?php echo md5('dib') ?>
    </span>
  </div>
</nav>
<?php

?>
</nav>

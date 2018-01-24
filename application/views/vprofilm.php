<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
/*
pnama
pdeskripsi
psejarah
pvisimisi
*/

$adminlogin = $this->session->userdata('username')&&$this->session->userdata('userpass')?'notnull':null;

//$adminlogin vars test
// echo $adminlogin."--";
// $val = $adminlogin==1?'nice':'not nice';
// $val = isset($adminlogin)?'nice':'not nice';
// if ($adminlogin) {
// 	echo "val -> ".$val;
// }

?>
<h2><?php echo $page; ?></h2>
<a href="<?php echo base_url('#');?>">Lihat profil</a>

<?php echo form_open('profilm/dbubahprofilm');?>
<input type="hidden" name="pnama" value="<?php echo $profil->pnama;?>">
<label for="pnama">Nama Masjid</label><input type="text" name="pnama2" value="<?php echo $profil->pnama;?>">
<label for="pdeskripsi">Deskripsi</label><input type="textarea" name="pdeskripsi" value="<?php echo $profil->pdeskripsi;?>">
<label for="psejarah">Sejarah</label><input type="textarea" name="psejarah" value="<?php echo $profil->psejarah;?>">
<label for="pvisimisi">Visi Misi</label><input type="textarea" name="pvisimisi" value="<?php echo $profil->pvisimisi;?>">
<input type="submit" name="submit" value="Terapkan">
<?php
	echo "Nama Masjid ".$profil->pnama;
	echo "".$profil->pdeskripsi;
	echo "".$profil->psejarah;
	echo "".$profil->pvisimisi;
 ?>

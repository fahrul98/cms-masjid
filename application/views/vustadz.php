<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
1. Ustadz. operasi CRUD
vars:
usid
usnama
usnotelp
usalamat
mediaid

*/
// view admin
?>

	<h2><?php echo $page; ?></h2>
<?php
if ($page=="Ustadz") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h3><a href="<?php echo base_url('ustadz/tambahust');?>">Tambah Ustadz</a></h3>
	<table class="table">
		<thead>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama ust.</th>
			<th>No. Telp</th>
			<th>Alamat</th>
			<th colspan="2">Operasi</th>
		</thead>
<?php

$n = 1;
		foreach ($cmustadz as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->mediaid."</td>
			<td>".$v->usnama."</td>
			<td>".$v->usnotelp."</td>
			<td>".$v->usalamat."</td>
			<td><a href=".base_url('ustadz/ubahust/'.$v->usid)."> ubah</a></td>
			<td><a href=".base_url('ustadz/dbhapus/'.$v->usid)."> hapus</a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Tambah Ustadz") {?>
<h3><a href="<?php echo base_url('ustadz');?>">Kembali</a></h3>
	<h3>Tambah Ustadz</h3>
	<?php echo form_open('ustadz/dbtambahust','class=form');	?>
	<label for="usnama">Nama Ustadz</label><input type="text" name="usnama" value="">
	<label for="usnotelp">No. telp</label><input type="text" name="usnotelp" value="">
	<label for="usalamat">Alamat</label><input type="textarea" name="usalamat" value="">
	<label for="mediaid">Media id</label><input type="file" name="mediaid" value="">
	<input type="submit" name="submit" value="tambah">

<?php }else if ($page=="Ubah Ustadz") {?>
	<h3><a href="<?php echo base_url('ustadz');?>">Kembali</a></h3>
	<h3>Tulis postingan</h3>
	<a href="<?php echo base_url('ustadz/dbhapus/'.$ustadz->usid) ?>">Hapus Post</a>
	<?php echo form_open('ustadz/dbubah','class=form');	?>
	<input type="hidden" name="usid" value="<?php echo $ustadz->usid;?>">
	<label for="usnama">Nama Ustadz</label><input type="text" name="usnama" value="<?php echo $ustadz->usnama;?>">
	<label for="usnotelp">No. telp</label><input type="text" name="usnotelp" value="<?php echo $ustadz->usnotelp;?>">
	<label for="usalamat">Alamat</label><input type="textarea" name="usalamat" value="<?php echo $ustadz->usalamat;?>">
	<label for="mediaid">Media id</label><input type="file" name="mediaid" value="<?php echo $ustadz->mediaid;?>">
	<input type="submit" name="submit" value="update">
<?php } ?>

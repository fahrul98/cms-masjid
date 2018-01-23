<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
1. Ustadz. operasi CRUD
vars:
rdid
rdwaktu
rdjumlah
rddonatur
rdtotal

*/
// view admin
?>

	<h2><?php echo $page; ?></h2>
<?php
if ($page=="Rekam Donasi") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h3><a href="<?php echo base_url('rekamdonasi/tambahrdonasi');?>">Tambah Entri</a></h3>
	<table class="table">
		<thead>
			<th>No.</th>
			<th>Waktu</th>
			<th>Jumlah</th>
			<th>Donatur</th>
			<th>Total</th>
			<th colspan="2">Operasi</th>
		</thead>
<?php

$n = 1;
		foreach ($cmrdonasi as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->rdwaktu."</td>
			<td>".$v->rdjumlah."</td>
			<td>".$v->rddonatur."</td>
			<td>".$v->rdtotal."</td>
			<td><a href=".base_url('rekamdonasi/ubahrdonasi/'.$v->rdid)."> ubah</a></td>
			<td><a href=".base_url('rekamdonasi/dbhapus/'.$v->rdid)."> hapus</a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Tambah rekamdonasi") {?>
<h3><a href="<?php echo base_url('rekamdonasi');?>">Kembali</a></h3>
	<h3>Tambah rekamdonasi</h3>
	<?php echo form_open('rekamdonasi/dbtambahrdonasi','class=form');	?>
	<label for="rdwaktu">Waktu</label><input type="text" name="rdwaktu" value="">
	<label for="rdjumlah">Jumlah</label><input type="text" name="rdjumlah" value="">
	<label for="rddonatur">Donatur</label><input type="textarea" name="rddonatur" value="">
	<label for="rdtotal">Total</label><input type="text" name="rdtotal" value="">
	<input type="submit" name="submit" value="tambah">

<?php }else if ($page=="Ubah rekamdonasi") {?>
	<h3><a href="<?php echo base_url('rekamdonasi');?>">Kembali</a></h3>
	<h3>Ubah rekamdonasi</h3>
	<a href="<?php echo base_url('rekamdonasi/dbhapus/'.$cmrdonasi->rdid) ?>">Hapus rekamdonasi</a>
	<?php echo form_open('rekamdonasi/dbubah','class=form');	?>
	<input type="hidden" name="rdid" value="<?php echo $cmrdonasi->rdid;?>">
	<label for="rdwaktu">Waktu</label><input type="text" name="rdwaktu" value="<?php echo $cmrdonasi->rdwaktu;?>">
	<label for="rdjumlah">Jumlah</label><input type="text" name="rdjumlah" value="<?php echo $cmrdonasi->rdjumlah;?>">
	<label for="rddonatur">Donatur</label><input type="textarea" name="rddonatur" value="<?php echo $cmrdonasi->rddonatur;?>">
	<label for="rdtotal">Total</label><input type="text" name="rdtotal" value="<?php echo $cmrdonasi->rdtotal;?>">
	<input type="submit" name="submit" value="update">
<?php } ?>

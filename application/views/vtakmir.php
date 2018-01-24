<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
1. takmir. operasi CRUD
vars:
tkid
tknama
tknotelp
tkjabatan
tkmasajabatan
mediaid

*/
// view admin
?>

	<h2><?php echo $page; ?></h2>
<?php
if ($page=="Takmir") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h3><a href="<?php echo base_url('takmir/tambahtk');?>">Tambah takmir</a></h3>
	<table class="table">
		<thead>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama takmir</th>
			<th>Jabatan</th>
			<th>Masa Jabatan</th>
			<th>No. Telp</th>
			<th colspan="2">Operasi</th>
		</thead>
<?php

$n = 1;
		foreach ($cmtakmir as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->mediaid."</td>
			<td>".$v->tknama."</td>
			<td>".$v->tkjabatan."</td>
			<td>".$v->tkmasajabatan."</td>
			<td>".$v->tknotelp."</td>
			<td><a href=".base_url('takmir/ubahtk/'.$v->tkid)."> ubah</a></td>
			<td><a href=".base_url('takmir/dbhapus/'.$v->tkid)."> hapus</a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Tambah Takmir") {?>
<h3><a href="<?php echo base_url('takmir');?>">Kembali</a></h3>
	<?php echo form_open('takmir/dbtambahtk','class=form');	?>
	<label for="mediaid">Media</label><input type="text" name="mediaid" value="">
	<label for="tknama">Nama takmir</label><input type="text" name="tknama" value="">
	<label for="tkjabatan">Jabatan</label><input type="text" name="tkjabatan" value="">
	<label for="tkmasajabatan">Masa jabatan</label><input type="text" name="tkmasajabatan" value="">
	<label for="tknotelp">No. telp</label><input type="text" name="tknotelp" value="">
	<input type="submit" name="submit" value="tambah">

<?php }else if ($page=="Ubah Takmir") {?>
	<h3><a href="<?php echo base_url('takmir');?>">Kembali</a></h3>
	<a href="<?php echo base_url('takmir/dbhapus/'.$takmir->tkid) ?>">Hapus takmir</a>
	<?php echo form_open('takmir/dbubah','class=form');	?>
	<input type="hidden" name="tkid" value="<?php echo $takmir->tkid;?>">
	<label for="mediaid">Media</label><input type="text" name="mediaid" value="<?php echo $takmir->mediaid;?>">
	<label for="tknama">Nama takmir</label><input type="text" name="tknama" value="<?php echo $takmir->tknama;?>">
	<label for="tkjabatan">Jabatan</label><input type="text" name="tkjabatan" value="<?php echo $takmir->tkjabatan;?>">
	<label for="tkmasajabatan">Masa jabatan</label><input type="text" name="tkmasajabatan" value="<?php echo $takmir->tkmasajabatan;?>">
	<label for="tknotelp">No. telp</label><input type="text" name="tknotelp" value="<?php echo $takmir->tknotelp;?>">
	<input type="submit" name="submit" value="ubah">
<?php } ?>

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
<div id="main-content">
<!-- <div class="container" style="margin-top: 50px; margin-left: 400px"> -->
	<h2><?php echo $page; ?></h2>
	<?php echo $error; ?>
<?php
if ($page=="Rekam Donasi") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>

	<table class="table table-bordered table-striped table-hover">
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
	<a class="btn btn-default" href="<?php echo base_url('rekamdonasi/tambahrdonasi');?>"><i class="fa fa-pencil-square-o"> </i><span>Tambah Entri</span></a>
<?php }else if ($page=="Tambah rekamdonasi") {?>
	<?php echo $error; ?>
	<div class="container">
		<div class="row">
			<div class="panel col-md-4">
	<?php echo form_open('rekamdonasi/dbtambahrdonasi','class=form');	?>
				<div class="form-group">
					<label for="rdwaktu">Waktu :  </label>
					<input type="text" class="form-control" name="rdwaktu" value="<?php echo $input['rdwaktu']; ?>">
				</div>
				<div class="form-group">
					<label for="rdjumlah">Jumlah : </label>
					<input type="text" class="form-control" name="rdjumlah" value="<?php echo $input['rdjumlah']; ?>">
				</div>
				<div class="form-group">
					<label for="rddonatur">Donatur : </label>
					<input type="textarea" class="form-control" name="rddonatur" value="<?php echo $input['rddonatur']; ?>">
				</div>
				<div class="form-group">
					<label for="rdtotal">Total : </label>
					<input type="text" class="form-control" name="rdtotal" value="<?php echo $input['rdtotal']; ?>">
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary" name="submit" value="tambah">Tambah</button>
	<a class="btn btn-danger" style="text-decoration: none" href="<?php echo base_url('rekamdonasi');?>">Kembali</a></button>
</div>


<?php }else if ($page=="Ubah rekamdonasi") {?>
	<?php echo $error; ?>
<div class="container">
	<div class="row">
		<div class="panel col-md-4">
	<?php echo form_open('rekamdonasi/dbubah','class=form');	?>
	<input type="hidden" name="rdid" value="<?php echo $cmrdonasi->rdid;?>">
	<div class="form-group">
		<label for="rdwaktu">Waktu : </label>
		<input type="text" class="form-control" name="rdwaktu" value="<?php echo $cmrdonasi->rdwaktu;?>">
	</div>
	<div class="form-group">
		<label for="rdjumlah">Jumlah</label>
		<input type="text" class="form-control" name="rdjumlah" value="<?php echo $cmrdonasi->rdjumlah;?>">
	</div>
	<div class="form-group">
		<label for="rddonatur">Donatur</label>
		<input type="textarea" class="form-control" name="rddonatur" value="<?php echo $cmrdonasi->rddonatur;?>">
	</div>
	<div class="form-group">
		<label for="rdtotal">Total</label>
		<input type="text" class="form-control" name="rdtotal" value="<?php echo $cmrdonasi->rdtotal;?>">
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary" name="submit" value="update">Update</button>
	<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('rekamdonasi');?>">Kembali</a></button>
	<button type="submit" class="btn btn-danger" name="submit" value="hapus"><a style="text-decoration: none" href="<?php echo base_url('rekamdonasi/dbhapus/'.$cmrdonasi->rdid);?>">Hapus Rekamdonasi</a></button>
</div>
<?php } ?>
</div>

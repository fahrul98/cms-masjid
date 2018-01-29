<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
kmid
kmwaktu
kmketerangan
kmpengeluaran
kmsaldo

*/

?>
<!-- <div class="container" style="margin-left: 400px; margin-top: 50px;"	> -->
<div id="main-content">
	<h2><?php echo $page; ?></h2>
<?php
if ($page=="Keuangan Masjid") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Waktu</th>
			<th>Keterangan</th>
			<th>Pengeluaran</th>
			<th>Saldo</th>
			<th colspan="2">Operasi</th>
		</thead>
<?php

$n = 1;
		foreach ($kmasjid as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->kmwaktu."</td>
			<td>".$v->kmketerangan."</td>
			<td>".$v->kmpengeluaran."</td>
			<td>".$v->kmsaldo."</td>
			<td><a href=".base_url('keuanganmasjid/ubahkmasjid/'.$v->kmid)."> ubah</a></td>
			<td><a href=".base_url('keuanganmasjid/dbhapus/'.$v->kmid)."> hapus</a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
	<button class="btn"><i class="fa fa-pencil-square-o"> </i><a href="<?php echo base_url('keuanganmasjid/tambahentri');?>"> Tambah Entri</a></button>
<?php }else if ($page=="Tambah Entri") {?>
	<?php echo form_open('keuanganmasjid/dbentri','class=form');	?>
	<div class="container">
		<div class="row">
			<div class="panel col-md-4">
		<div class="form-group">
			<label for="kmwaktu">Waktu</label>
			<input type="text" class="form-control" name="kmwaktu" value="">
		</div>
		<div class="form-group">
			<label for="kmketerangan">Keterangan</label>
			<input type="text" class="form-control" name="kmketerangan" value="">
		</div>
		<div class="form-group">
			<label for="kmpengeluaran">Jumlah</label>
			<input type="textarea" class="form-control" name="kmpengeluaran" value="">
		</div>
		<div class="form-group">
			<label for="kmsaldo">Saldo</label>
			<input type="textarea" class="form-control" name="kmsaldo" value="">
		</div>
	<button type="submit" class="btn btn-primary" name="submit" value="entri">Tambah</button>
		<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('keuanganmasjid');?>">Kembali</a></button>
		</div>
	</div>
</div>

<?php }else if ($page=="Ubah Entri") {?>

	<div class="container">
		<div class="row">
			<div class="panel col-md-4">
	<?php echo form_open('keuanganmasjid/dbubah','class=form');	?>
	<input type="hidden" name="kmid" value="<?php echo $kmasjid->kmid;?>">
	<div class="form-group">
			<label for="kmwaktu">Waktu</label>
			<input type="text" class="form-control" name="kmwaktu" value="<?php echo $kmasjid->kmwaktu;?>">
		</div>
		<div class="form-group">
			<label for="kmketerangan">Keterangan</label>
			<input type="text" class="form-control" name="kmketerangan" value="<?php echo $kmasjid->kmketerangan;?>">
		</div>
		<div class="form-group">
			<label for="kmpengeluaran">Jumlah</label>
			<input type="textarea" class="form-control" name="kmpengeluaran" value="<?php echo $kmasjid->kmpengeluaran;?>">
		</div>
		<div class="form-group">
				<label for="kmsaldo">Saldo</label>
				<input type="textarea" class="form-control" name="kmsaldo" value="<?php echo $kmasjid->kmsaldo;?>">
		</div>

	<button type="submit" class="btn btn-primary" name="submit" value="entri">Update</button>
		<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('keuanganmasjid');?>">Kembali</a></button>
		<button type="submit" class="btn btn-danger" name="submit" value="hapus"><a style="text-decoration: none" href="<?php echo base_url('keuanganmasjid/dbhapus/'.$kmasjid->kmid);?>">Hapus Entri</a></button>
		</div>
	</div>
</div>

<?php } ?>
</div>

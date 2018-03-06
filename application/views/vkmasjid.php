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
			<td><a href=".base_url('keuanganmasjid/ubahkmasjid/'.$v->kmid)."><i class='fa fa-pencil'></i></a></td>
			<td><a href=".base_url('keuanganmasjid/dbhapus/'.$v->kmid)."><i class='fa fa-trash-o'></i></a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
	<a class="btn btn-default" href="<?php echo base_url('keuanganmasjid/tambahentri');?>"><i class="fa fa-pencil-square-o"> </i> Tambah Entri</a>
<?php }else if ($page=="Tambah Entri") {?>
	<?php echo $error; ?>
	<?php echo form_open('keuanganmasjid/dbentri','class=form');	?>
	<div class="container">
		<div class="row">
			<div class="panel col-md-4">
				<div class="form-group">
					<label for="kmwaktu">Waktu</label>
					<!-- <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
					<div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd hh:mm:ss" data-link-field="kmwaktu">
						<input class="form-control" size="16" type="text" value="" readonly name="kmwaktu">
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				</div>
		<div class="form-group">
			<label for="kmketerangan">Keterangan</label>
			<textarea name="kmketerangan" class="form-control" rows="5" value=""></textarea>
		</div>
		<div class="form-group">
			<label for="kmpengeluaran">Jumlah</label>
			<input type="textarea" required="required" class="form-control" name="kmpengeluaran" value="">
		</div>
		<div class="form-group">
			<label for="kmsaldo">Saldo</label>
			<input type="textarea" class="form-control" name="kmsaldo" value="<?php echo $input['kmsaldo']; ?>">
		</div>
	<button type="submit" class="btn btn-primary" name="submit" value="entri">Tambah</button>
		<a class="btn btn-danger" style="text-decoration: none" href="<?php echo base_url('keuanganmasjid');?>">Kembali</a>
		</div>
	</div>
</div>

<?php }else if ($page=="Ubah Entri") {?>

	<?php echo $error; ?>
	<div class="container">
		<div class="row">
			<div class="panel col-md-4">
	<?php echo form_open('keuanganmasjid/dbubah','class=form');	?>
	<input type="hidden" name="kmid" value="<?php echo $kmasjid->kmid;?>">
	<div class="form-group">
		<label for="kmwaktu">Waktu</label>
		<!-- <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
		<div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd hh:mm:ss" data-link-field="kmwaktu">
			<input class="form-control" size="16" type="text" value="<?php echo $kmasjid->kmwaktu;?>" readonly name="kmwaktu">
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
	</div>
		<div class="form-group">
			<label for="kmketerangan">Keterangan</label>
			<textarea name="kmketerangan" class="form-control" rows="5" value="<?php echo $kmasjid->kmketerangan;?>"></textarea>
		</div>
		<div class="form-group">
			<label for="kmpengeluaran">Jumlah</label>
			<input type="textarea" required="required" class="form-control" name="kmpengeluaran" value="<?php echo $kmasjid->kmpengeluaran;?>">
		</div>
		<div class="form-group">
				<label for="kmsaldo">Saldo</label>
				<input type="textarea" class="form-control" name="kmsaldo" value="<?php echo $kmasjid->kmsaldo;?>">
		</div>

	<button type="submit" class="btn btn-primary" name="submit" value="entri">Update</button>
		<a class="btn btn-danger" href="<?php echo base_url('keuanganmasjid');?>">Kembali</a>
		<a class="btn btn-danger" href="<?php echo base_url('keuanganmasjid/dbhapus/'.$kmasjid->kmid);?>">Hapus Entri</a>
		</div>
	</div>
</div>

<?php } ?>
</div>

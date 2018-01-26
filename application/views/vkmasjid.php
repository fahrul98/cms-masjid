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
<div class="container" style="margin-left: 400px; margin-top: 50px;"	>
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
	<button class="btn"><i class="fa fa-pencil-square-o"> </i><a href="<?php echo base_url('keuanganmasjid/tambahentri');?>"> Tambah Kegiatan</a></button> 
<?php }else if ($page=="Tambah Entri") {?>
<h3><a href="<?php echo base_url('keuanganmasjid');?>">Kembali</a></h3>
	<h3><?php echo $page; ?></h3>
	<?php echo form_open('keuanganmasjid/dbentri','class=form');	?>
	<label for="kmwaktu">kmwaktu</label><input type="text" name="kmwaktu" value="">
	<label for="kmketerangan">kmketerangan</label><input type="text" name="kmketerangan" value="">
	<label for="kmpengeluaran">kmpengeluaran</label><input type="textarea" name="kmpengeluaran" value="">
	<label for="kmsaldo">kmsaldo</label><input type="textarea" name="kmsaldo" value="">
	<input type="submit" name="submit" value="entri">

<?php }else if ($page=="Ubah Entri") {?>
	<h3><a href="<?php echo base_url('keuanganmasjid');?>">Kembali</a></h3>
	<h3><?php echo $page; ?></h3>
	<a href="<?php echo base_url('keuanganmasjid/dbhapus/'.$kmasjid->kmid) ?>">Hapus entri</a>
	<?php echo form_open('keuanganmasjid/dbubah','class=form');	?>
	<input type="hidden" name="kmid" value="<?php echo $kmasjid->kmid;?>">
	<label for="kmwaktu">kmwaktu</label><input type="text" name="kmwaktu" value="<?php echo $kmasjid->kmwaktu;?>">
	<label for="kmketerangan">kmketerangan</label><input type="text" name="kmwaktu" value="<?php echo $kmasjid->kmketerangan;?>">
	<label for="kmpengeluaran">kmpengeluaran</label><input type="textarea" name="kmpengeluaran" value="<?php echo $kmasjid->kmpengeluaran;?>">
	<label for="kmsaldo">kmsaldo</label><input type="textarea" name="kmsaldo" value="<?php echo $kmasjid->kmsaldo;?>">
	<input type="submit" name="submit" value="entri">
<?php } ?>
</div>
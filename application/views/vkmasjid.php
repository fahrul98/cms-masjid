<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
kmid
kmwaktu
kmketerangan
kmpengeluaran
kmsaldo

*/
function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
	if (trim ($timestamp) == ''){
					$timestamp = time ();
	}	elseif (!ctype_digit ($timestamp))		{
			$timestamp = strtotime ($timestamp);
	}
	# remove S (st,nd,rd,th) there are no such things in indonesia :p
	$date_format = preg_replace ("/S/", "", $date_format);
	$pattern = array (
			'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
			'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
			'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
			'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
			'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
			'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
			'/April/','/June/','/July/','/August/','/September/','/October/',
			'/November/','/December/',
	);
	$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
			'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
			'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
			'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
			'Oktober','November','Desember',
	);
	$date = date ($date_format, $timestamp);
	$date = preg_replace ($pattern, $replace, $date);
	$date = "{$date} {$suffix}";
	return $date;
}

?>
<!-- <div class="container" style="margin-left: 400px; margin-top: 50px;"	> -->
<div id="main-content">
	<h2><?php echo $page; ?> <a class="btn btn-default" href="<?php echo base_url('keuanganmasjid/tambahentri');?>"><i class="fa fa-pencil-square-o"> </i> Tambah Entri</a></h2>
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
			<td>".indonesian_date($v->kmwaktu)."</td>
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
	<button type="submit" class="btn btn-success" name="submit" value="entri">Tambah</button>
		<a class="btn btn-success" style="text-decoration: none; color: #fff" href="<?php echo base_url('keuanganmasjid');?>">Kembali</a>
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

	<button type="submit" class="btn btn-success" name="submit" value="entri">Update</button>
		<a class="btn btn-success" href="<?php echo base_url('keuanganmasjid');?>" style="color: #fff">Kembali</a>
		<a class="btn btn-success" href="<?php echo base_url('keuanganmasjid/dbhapus/'.$kmasjid->kmid);?>" style="color: #fff">Hapus Entri</a>
		</div>
	</div>
</div>

<?php } ?>
</div>

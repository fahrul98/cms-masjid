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
<h4 >Total donasi : <?php echo $stat->totaldonasi; ?></h4>
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
			<td>".indonesian_date($v->rdwaktu)."</td>
			<td>".$v->rdjumlah."</td>
			<td>".$v->rddonatur."</td>
			<td>".$v->rdtotal."</td>
			<td><a href=".base_url('rekamdonasi/ubahrdonasi/'.$v->rdid)."><i class='fa fa-pencil'></i></a></td>
			<td><a href=".base_url('rekamdonasi/dbhapus/'.$v->rdid)."><i class='fa fa-trash-o'></i></a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
	<a class="btn btn-default" href="<?php echo base_url('rekamdonasi/tambahrdonasi');?>"><i class="fa fa-pencil-square-o"> </i><span>Tambah Entri</span></a>
<?php }else if ($page=="Tambah Rekam Donasi") {?>
	<div class="container">
		<div class="row">
			<div class="panel col-md-4">
	<?php echo form_open('rekamdonasi/dbtambahrdonasi','class=form');	?>
				<div class="form-group">
					<label for="rdwaktu">Waktu</label>
					<!-- <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
					<div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd hh:mm:ss" data-link-field="rdwaktu">
						<input class="form-control" size="16" type="text" value="" readonly name="rdwaktu">
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
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


<?php }else if ($page=="Ubah Rekam Donasi") {?>
<div class="container">
	<div class="row">
		<div class="panel col-md-4">
	<?php echo form_open('rekamdonasi/dbubah','class=form');	?>
	<input type="hidden" name="rdid" value="<?php echo $cmrdonasi->rdid;?>">
	<div class="form-group">
		<label for="rdwaktu">Waktu</label>
		<!-- <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
		<div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd hh:mm:ss" data-link-field="rdwaktu">
			<input class="form-control" size="16" type="text" value="<?php echo $cmrdonasi->rdwaktu;?>" readonly name="rdwaktu">
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
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

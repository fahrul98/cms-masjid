<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin


?>
	<div id="main-content">
		<?php

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

if ($page=="Jadwal Kegiatan") {
?>
			<!-- <div class="container" style="margin-left: 400px; margin-top: 50px;"> -->
			<h2><?php echo $page; ?> <a class="btn btn-default" href="<?php echo base_url('jadwalkegiatan/tambahkegiatan');?>"><i class="fa fa-pencil-square-o"> </i><span>Tambah Kegiatan</span></a></h2>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>No.</th>
					<th>Nama Kegiatan</th>
					<th>Pihak terkait</th>
					<th>Waktu</th>
					<th>Tag</th>
					<th colspan="2">Operasi</th>
				</thead>
				<?php
	$n = 1;
		foreach ($jadwalk as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('jadwalkegiatan/ubahjkegiatan/'.$v->jkid).">".$v->jknama."</a></td>
			<td>".$v->jkpihak."</td>
			<td>".indonesian_date($v->jkwaktu)."</td>
			<td>".$v->tag."</td>
			<td><a href=".base_url('jadwalkegiatan/ubahjkegiatan/'.$v->jkid)."><i class='fa fa-pencil'></i></a></td>
			<td><a href=".base_url('jadwalkegiatan/dbhapus/'.$v->jkid)."><i class='fa fa-trash-o'></i></a></td>

			</tr>";
			$n++;
		}
		 ?>
			</table>

			<?php }else if ($page=="Tambah Kegiatan") {?>
			<h3>Tambah kegiatan</h3>
			<?php echo $error; ?>
			<?php echo form_open('jadwalkegiatan/dbtambahjk','class=form');	?>
			<div class="row">
				<div class="panel col-md-4">
					<div class="form-group ">
						<label for="jknama">Nama Kegiatan</label>
						<input type="text" required="required" class="form-control" name="jknama" value="">
					</div>
					<div class="form-group">
						<label for="jkpihak">Pihak bersangkutan</label>
						<input type="text" class="form-control" name="jkpihak" value="">
					</div>
					<div class="form-group">
						<label for="jkwaktu">Waktu</label>
						<!-- <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
						<div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd hh:mm:ss" data-link-field="jkwaktu">
							<input class="form-control" size="16" type="text" value="" readonly name="jkwaktu">
							<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
						</div>
					</div>
					<div class="form-group">
						<label for="tagid">Tagid</label>
						<select class="form-control" name="tagid">
						<?php
							foreach ($cmtag as $t) {
								echo "<option value='".$t->tagid."'>".$t->tag."</option>";
							}
						?>
					</select>
					</div>
					<!-- <div class="form-group">
					<input type="textarea" class="form-control" name="jkwaktu" value="">
				</div> -->
				</div>
			</div>

			<button type="submit" class="btn btn-success" name="submit" value="Tambah">Tambah</button>
			<a class="btn btn-success" style="text-decoration: none; color: #fff" href="<?php echo base_url('jadwalkegiatan');?>">Kembali</a></button>
	</div>
	<?php }else if ($page=="Ubah Kegiatan") {?>
	<h3>Ubah kegiatan</h3>
	<?php echo $error; ?>
	<?php echo form_open('jadwalkegiatan/dbubahjk','class=form');	?>
	<input type="hidden" name="jkid" value="<?php echo $jadwalk->jkid;?>">
	<div class="container">
		<div class="row">
			<div class="panel panel-content col-md-4">
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="submit" value="Ubah">Ubah</button>
					<a class="btn btn-success" href="<?php echo base_url('jadwalkegiatan/dbhapus/'.$jadwalk->jkid);?>" style="color: #fff">Hapus</a>
					<a class="btn btn-success" href="<?php echo base_url('jadwalkegiatan');?>" style="color: #fff">Kembali</a>
				</div>
				<div class="form-group">
					<label for="jknama">Nama Kegiatan</label>
					<input type="text" required="required" class="form-control" name="jknama" value="<?php echo $jadwalk->jknama;?>">
				</div>
				<div class="form-group">
					<label for="jkpihak">Pihak bersangkutan</label>
					<input type="text" class="form-control" name="jkpihak" value="<?php echo $jadwalk->jkpihak;?>">
				</div>
				<div class="form-group">
					<label for="jkwaktu">Waktu</label>
					<!-- <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
					<div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd hh:mm:ss" data-link-field="jkwaktu">
						<input class="form-control" size="16" type="text" value="<?php echo $jadwalk->jkwaktu;?>" readonly name="jkwaktu">
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				</div>
				<div class="form-group">
					<label for="tagid">Tagid</label>
					<select class="form-control" name="tagid">
						<?php
							foreach ($cmtag as $t) {
								if ($jadwalk->tagid==$t->tagid) {
									echo "<option value='".$t->tagid."' selected='selected'>".$t->tag."</option>";
								}else{
									echo "<option value='".$t->tagid."'>".$t->tag."</option>";
								}
							}
						?>
					</select>
				</div>
			</div>
		</div>
	</div>

	</div>
	<?php } ?>
	</div>

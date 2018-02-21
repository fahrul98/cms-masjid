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
	<div id="main-content">
		<!-- <div class="container" style="margin-left: 400px; margin-top: 50px;"> -->
		<h2><?php echo $page; ?></h2>
		<?php echo $error; ?>
<?php
if ($page=="Ustadz") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>

			<table class="table table-bordered table-striped table-hover">
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
			<td>".$n."</td>";
			?>
			<td>
					<div class="thumbnail">
						<img src="<?php echo base_url('uploads/ustadz/'.$v->mediadir);?>" width=60 height=80 />
					</div>
			</td>
<?php
			echo '<td>'.$v->usnama.'</td>
			<td>'.$v->usnotelp.'</td>
			<td>'.$v->usalamat.'</td>
			<td><a href='.base_url('ustadz/ubahust/'.$v->usid).'><i class="fa fa-pencil"></i></a></td>
			<td><a href='.base_url('ustadz/dbhapus/'.$v->usid).'/'.$v->mediadir.' onclick=\return confirm(\'Apakah anda yakin ingin menghapus Ustadz '.$v->usnama.'?)\'><i class="fa fa-trash-o"></a></td>

			</tr>';
			$n++;
		}
		 ?>
			</table>
			<a class="btn btn-primary" href="<?php echo base_url('ustadz/tambahust');?>"><i class="fa fa-pencil-square-o"> </i> <span>Tambah Ustad</span></a>
<?php }else if ($page=="Tambah Ustadz") {?>
			<div class="container">
				<div class="row">
					<?php echo form_open_multipart('ustadz/dbtambahust','class=form');	?>
					<div class="panel col-md-4">
						<div class="form-group">
							<label for="mediaid">Media id</label>
							<input type="file" id="dropify-event" name="filename" data-default-file="<?php echo base_url('uploads/default.png');?>">
						</div>
					</div>
					<div class="panel col-md-4">
						<div class="form-group">
							<label for="usnama">Nama Ustadz</label>
							<input type="text" class="form-control" name="usnama" value="<?php echo $input['usnama']; ?>">
						</div>
						<div class="form-group">
							<label for="usnotelp">No. telp</label>
							<input type="text" class="form-control" name="usnotelp" value="<?php echo $input['usnotelp']; ?>">
						</div>
						<div class="form-group">
							<label for="usalamat">Alamat</label>
							<textarea name="usalamat" class="form-control" rows="5" value=""></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit" value="tambah">Tambah</button>
							<a class="btn btn-danger" href="<?php echo base_url('ustadz');?>">Kembali</a>
						</div>
					</div>
				</div>


<?php }else if ($page=="Ubah Ustadz") {?>
	<div class="container">
		<div class="row">
				<?php echo form_open_multipart('ustadz/dbubah','class=form');	?>
				<input type="hidden" name="usid" value="<?php echo $ustadz->usid;?>">
				<div class="panel col-md-4">
					<div class="form-group">
						<label for="mediaid">Media id</label>
						<input type="file" id="dropify-event" name="filename" data-default-file="<?php echo base_url('uploads/ustadz/'.$ustadz->mediadir);?>">
							<input type="hidden" name="oldmedia" value="<?php echo $ustadz->mediadir;?>">
					</div>
				</div>
				<div class="panel col-md-4">
					<div class="form-group">
						<label for="usnama">Nama Ustadz</label>
						<input type="text" required="required" class="form-control" name="usnama" value="<?php echo $ustadz->usnama;?>">
					</div>
				<div class="form-group">
					<label for="usnotelp">No. telp</label>
					<input type="text" required="required" class="form-control" name="usnotelp" value="<?php echo $ustadz->usnotelp;?>">
				</div>
				<div class="form-group">
					<label for="usalamat">Alamat</label>
					<textarea name="usalamat" required="required" class="form-control" rows="5" value="<?php echo $ustadz->usalamat;?>"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="submit" value="update">Update</button>
					<a class="btn btn-danger" href="<?php echo base_url('ustadz');?>">Kembali</a></button>
					<a class="btn btn-danger" href="<?php echo base_url('ustadz/dbhapus/'.$ustadz->usid);?>">Hapus Ustadz</a></button>
				</div>
				</div>
				</div>
				</div>
				<?php } ?>
			</div>

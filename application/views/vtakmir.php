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
	<div id="main-content">
		<!-- <div class="container" style="margin-left: 400px; margin-top: 50px;"> -->
		<h2><?php echo $page; ?></h2>
		<?php echo $error; ?>
		<?php
if ($page=="Takmir") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
			<table class="table table-bordered table-striped table-hover">
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
			<td>".$n."</td>";
			// <td>"$v->mediaid."</td>"
			?>
					<td>
					<div class="thumbnail">
						<!-- <img src="<?php echo base_url('uploads/'.$v->mdir);?>" /> -->
					</div>
					</td>
					<?php
			echo "<td>".$v->tknama."</td>
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
			<a class="btn btn-primary" href="<?php echo base_url('takmir/tambahtk');?>"><i class="fa fa-pencil-square-o"> </i><span>Tambah Takmir</span></a>
			<?php }else if ($page=="Tambah Takmir") {?>
			<?php echo form_open_multipart('takmir/dbtambahtk','class=form');	?>
			<div class="container">
				<div class="row">					
					<div class="col-md-4">
						<div class="panel-content">
							<h2 class="heading"><i class="fa fa-square"></i>Media</h2>
							<input type="file" id="dropify-event" name="filename" data-default-file="<?php echo base_url('uploads/default.png');?>">
						</div>
					</div>
					<div class="panel col-md-4">
						<div class="form-group">
							<label for="tknama">Nama takmir</label>
							<input type="text" class="form-control" name="tknama" value="<?php echo $input['ttknama']; ?>">
						</div>
						<div class="form-group">
							<label for="tkjabatan">Jabatan</label>
							<input type="text" class="form-control" name="tkjabatan" value="<?php echo $input['tkjabatan']; ?>">
						</div>
						<div class="form-group">
							<label for="tkmasajabatan">Masa jabatan</label>
							<input type="text" class="form-control" name="tkmasajabatan" value="<?php echo $input['tkmasajabatan']; ?>">
						</div>
						<div class="form-group">
							<label for="tknotelp">No. telp</label>
							<input type="text" class="form-control" name="tknotelp" value="<?php echo $input['tknotelp']; ?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit" value="tambah">Tambah</button>
							<a class="btn btn-danger" style="text-decoration: none" href="<?php echo base_url('takmir');?>">Kembali</a>
						</div>
					</div>
				</div>
			</div>
			<?php }else if ($page=="Ubah Takmir") {?>
			<div class="container">
				<div class="row">
					<?php echo form_open('takmir/dbubah','class=form');	?>
					<input type="hidden" class="form-control" name="tkid" value="<?php echo $takmir->tkid;?>">
					<div class="panel col-md-4">
						<div class="form-group">
							<label for="mediaid">Media</label>
							<input type="text" class="form-control" name="mediaid" value="<?php echo $takmir->mediaid;?>">
						</div>
					</div>
					<div class="panel col-md-4">
						<div class="form-group">
							<label for="tknama">Nama takmir</label>
							<input type="text" class="form-control" name="tknama" value="<?php echo $takmir->tknama;?>">
						</div>
						<div class="form-group">
							<label for="tkjabatan">Jabatan</label>
							<input type="text" class="form-control" name="tkjabatan" value="<?php echo $takmir->tkjabatan;?>">
						</div>
						<div class="form-group">
							<label for="tkmasajabatan">Masa jabatan</label><input type="text" class="form-control" name="tkmasajabatan" value="<?php echo $takmir->tkmasajabatan;?>">
						</div>
						<div class="form-group">
							<label for="tknotelp">No. telp</label>
							<input type="text" class="form-control" name="tknotelp" value="<?php echo $takmir->tknotelp;?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit" value="update">Ubah</button>
							<a class="btn btn-danger" href="<?php echo base_url('takmir');?>">Kembali</a>
							<a class="btn btn-danger" href="<?php echo base_url('takmir/dbhapus/'.$takmir->tkid);?>">Hapus Takmir</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
	</div>

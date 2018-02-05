<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
postid
psbuat
psubah
tagid
psjudul
psustadz
pstext
mediaid
*/
// view admin
?>

<div id="main-content">
<?php
if ($page=="Tag") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h2><?php echo $page; ?></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Tag</th>
			<th colspan="">Operasi</th>
		</thead>
<?php

$n = 1;
// <td><a href=".base_url('post/ubahpost/'.$v->postid).">".$v->psjudul."</a></td>
		foreach ($cmtag as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->tag."</td>
			<td><a href='".base_url('tag/dbhapus/'.$v->tagid)."'> hapus</a></td>";
			$n++;
		}
		 ?>
	</table>
<a class="btn btn-primary"href="<?php echo base_url('tag/tambahtag');?>"><i class="fa fa-pencil-square-o"> </i><span> Tambah tag</span></a>

<?php }else if ($page=="Tambah Tag") {?>

<?php echo form_open('tag/dbtambah'); ?>
	<div class="row">
		<div class="panel col-md-4">
			<div class="form-group ">
				<label for="tag">Tag</label>
				<input type="text" class="form-control" name="tag" value="">
			</div>
				<div class="form-group ">
				<input type="submit" class="btn btn-primary" name="submit" value="Tambah">
				<a class="btn btn-danger" name="submit" value="Tambah" href="<?php echo base_url('tag');?>">Kembali</a>
			</div>
		</div>
	</div>
</form>

<?php } ?>
</div>

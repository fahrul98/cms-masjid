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
if ($page=="Post") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h2><?php echo $page; ?></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
			<th colspan="3">Operasi</th>
		</thead>
<?php

$n = 1;
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('post/ubahpost/'.$v->postid).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
			<td><a href=".base_url('post/ubahpost/'.$v->postid)."> ubah</a></td>
			<td><a href=".base_url('post/dbhapus/'.$v->postid)."> hapus</a></td>
			<td><a href=".base_url('post/view/'.$v->postid).">pratinjau</a></td>
			</tr>";
			$n++;
		}
		 ?>
	</table>
<button class="btn"><i class="fa fa-pencil-square-o"> </i><a href="<?php echo base_url('post/tulis');?>"> Tulis postingan</a></button>
<button type="submit" class="btn " name="submit" value="kembali"><a style="text-decoration: none; text-decoration-color: white" href="<?php echo base_url('pengunjung/post');?>">Tampil Semua</a></button>

<?php }else if ($page=="Tulis Postingan") {?>
	<h2><?php echo $page; ?></h2>

	<?php echo form_open('post/dbtulis','class=form');	?>
	<div class="form-group">
		<label for="judul">Judul</label>
		<input type="text" class="form-control" name="judul" value="">
	</div>
	<div class="form-group">
		<label for="ustadz">Ustadz</label>
		<input type="text" class="form-control" name="ustadz" value="">
	</div>
	<div class="form-group">
		<label for="text">Text</label>
		<input type="textarea" style="height: 300px; width: 600px" class="form-control" name="text" value="">
	</div>
	<div class="form-group">
		<label for="tagid">Tagid</label>
		<input type="textarea" class="form-control" name="tagid" value="">
	</div>
	<div class="form-group">
		<label for="mediaid">Mediaid</label>
		<input type="file" class="form-control" name="mediaid" value="">
	</div>

	<button type="submit" class="btn btn-primary" name="submit" value="Tulis">Tulis</button>
		<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('post');?>">Kembali</a></button>
<?php }else if ($page=="Ubah Postingan") {?>
	<h2><?php echo $page; ?></h2>

	<?php echo form_open('post/dbubah','class=form');	?>
	<input type="hidden" name="postid" value="<?php echo $post->postid;?>">
	<div class="form-group">
		<label for="judul">Judul</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $post->psjudul;?>">
	</div>
	<div class="form-group">
		<label for="ustadz">Ustadz</label>
		<input type="text" class="form-control" name="ustadz" value="<?php echo $post->psustadz;?>">
	</div>
	<div class="form-group">
		<label for="text">Text</label>
		<input type="textarea" style="height: 300px; width: 600px" class="form-control" name="text" value="<?php echo $post->pstext;?>">
	</div>
	<div class="form-group">
		<label for="text">Tagid</label>
		<input type="textarea" class="form-control" name="tagid" value="<?php echo $post->tagid;?>">
	</div>



	<button type="submit" class="btn btn-primary" name="submit" value="Tulis">Update</button>
	<button type="submit" class="btn btn-danger" name="submit" value="hapus"><a style="text-decoration: none" href="<?php echo base_url('post/dbhapus/'.$post->postid);?>">Hapus Post</a></button>
	<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('post');?>">Kembali</a></button>
<?php
//view berdasarkan idpost
}else if ($mode=="view") {?>
	<h2><?php echo $post->psjudul; ?></h2>
	<!-- <label for="judul">Judul</label><input type="text" name="judul" value="<?php //echo $post->psjudul;?>"> -->

	<h4><?php echo $post->psustadz; echo " - ".$post->tagid;?></h4>
	<p>	<?php echo $post->pstext;?>	</p>

<?php

//view semua post
}else if ($mode=="viewall") {?>
	<h2><?php echo $page; ?></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
		</thead>
<?php


$n = 1;
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('post/view/'.$v->postid).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
			</tr>";
			$n++;
		}
		 ?>
	</table>
	<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('post');?>">Kembali</a></button>
<?php } ?>
</div>

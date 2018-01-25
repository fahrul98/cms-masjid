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
<div class="container">
	<h2>Post</h2>
<?php
if ($page=="Post") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
	<table class="table table-bordered table-striped table-hover">
		<thead align="center">
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
			<th colspan="2">Operasi</th>
		</thead>
<?php

$n = 1;
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->psjudul."</td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
			<td><a href=".base_url('post/ubahpost/'.$v->postid)."> ubah</a></td>
			<td><a href=".base_url('post/dbhapus/'.$v->postid)."> hapus</a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
	<button class="btn"><i class="fa fa-pencil-square-o"> </i><a href="<?php echo base_url('post/tulis');?>"> Tulis postingan</a></button> 
<?php }else if ($page=="Tulis Postingan") {?>
<h3><a href="<?php echo base_url('post');?>">Kembali</a></h3>
	<h3>Tulis postingan</h3>
	<?php echo form_open('post/dbtulis','class=form');	?>
	<label for="judul">Judul</label><input type="text" name="judul" value="">
	<label for="ustadz">Ustadz</label><input type="text" name="ustadz" value="">
	<label for="text">Text</label><input type="textarea" name="text" value="">
	<label for="tagid">Tagid</label><input type="textarea" name="tagid" value="">
	<label for="mediaid">Tagid</label><input type="file" name="mediaid" value="">
	<input type="submit" name="submit" value="Tulis">

<?php }else if ($page=="Ubah Postingan") {?>
	<h3><a href="<?php echo base_url('post');?>">Kembali</a></h3>
	<h3>Tulis postingan</h3>
	<a href="<?php echo base_url('post/dbhapus/'.$post->postid) ?>">Hapus Post</a>
	<?php echo form_open('post/dbubah','class=form');	?>
	<input type="hidden" name="postid" value="<?php echo $post->postid;?>">
	<label for="judul">Judul</label><input type="text" name="judul" value="<?php echo $post->psjudul;?>">
	<label for="ustadz">Ustadz</label><input type="text" name="ustadz" value="<?php echo $post->psustadz;?>">
	<label for="text">Text</label><input type="textarea" name="text" value="<?php echo $post->pstext;?>">
	<label for="text">Tagid</label><input type="textarea" name="tagid" value="<?php echo $post->tagid;?>">
	<input type="submit" name="submit" value="Tulis">
<?php } ?>
	
</div>
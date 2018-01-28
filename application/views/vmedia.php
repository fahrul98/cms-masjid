<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
	<!-- <h1>Welcome to CodeIgniter!</h1> -->
	<!-- <h2><?php echo $page; ?></h2> -->
	<?php //echo form_open_multipart('post/dbtulis','class=form');	?>
	<!-- <label for="judul">Judul</label><input type="text" name="judul" value="">
	<label for="ustadz">Ustadz</label><input type="text" name="ustadz" value="">
	<label for="text">Text</label><input type="textarea" name="text" value="">
	<label for="tagid">Tagid</label><input type="textarea" name="tagid" value="">
	<label for="mediaid">Tagid</label><input type="file" name="mediaid" value="">
	<input type="submit" name="submit" value="Tulis"> -->
<!-- <div class="container" style="margin-top: 160px; margin-left: 400px"> -->
<div id="main-content">
	
	<?php if(isset($error))echo $error;
if ($page=="Media") {
	foreach ($imgs as $v) {
		echo "<img src='./uploads/".$v->mdir."'/>
		<a href='".base_url('media/dbmhapus')."?mediaid=".$v->mediaid."&mdir=".$v->mdir."'>hapus</a><br>";
	}
	?>

	<?php
	 echo form_open_multipart('media/do_upload');?>
	<input type="file" name="filename" size="30" />
	<br/><br/>
	<input type="submit" value="upload" />
	</form>
<?php }else if ($page=="Stats") {?>
	<h3>Berhasil upload!</h3>

	<ul>
	<?php foreach ($upload_data as $item => $value):?>
	<li><?php echo $item;?>: <?php echo $value;?></li>
	<?php endforeach; ?>
	</ul>

	<p><?php echo anchor('media', 'Upload Another File!'); ?></p>
<?php } ?>
</div>

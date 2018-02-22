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
if ($page=="Media") {?>
<div class="container">

	<?php if ($this->session->flashdata('data')) {
		$d= $this->session->flashdata('data');
		echo $d['konfirmasi'];
		//barangkali tambahan tag html dibawah
		?>
		<!-- here -->
	<?php	} ?>

	<div class="row">
		<?php	 echo form_open_multipart('media/do_upload');?>
		<div class="col-md-6">
			<div class="panel-content">
				<h2 class="heading"><i class="fa fa-square"></i>Media</h2>
				<input type="file" id="dropify-event" name="filename" data-default-file="<?php echo base_url('uploads/default.png');?>">
				<input type="submit" class="btn btn-primary" value="upload" />
			</div>
		</div>
	</div>
</form>
<div class="row">
	<div class="container content">
		<div class="grid" style="">

	<?php
	//iterate pic
	foreach ($imgs as $v) {?>
		<!-- <div class="col-md-3">
			<div class="thumbnail">
				<img src="<?php echo base_url('uploads/'.$v->mdir);?>"/>
				<a class="btn btn-danger" href="<?php echo base_url('media/dbmhapus?mediaid='.$v->mediaid.'&mdir='.$v->mdir); ?>">hapus</a><br>
			</div>
		</div> -->
		<figure class="effect-zoe">
			<!-- <img src="assets/img/25.jpg" alt="img25"> -->
			<img src="<?php echo base_url('uploads/'.$v->mdir);?>"/>
			<figcaption>
				<h2>Opsi <span>>></span></h2>
				<p class="icon-links">
					<a class="btn" href="<?php echo base_url('media/dbmhapus?mediaid='.$v->mediaid.'&mdir='.$v->mdir); ?>">
						<span class="fa fa-trash"></span>
					</a>
				</p>
			</figcaption>
		</figure>
<?php	}	?>
		</div>
	</div>
</div>

</div>
<?php }?>
</div>

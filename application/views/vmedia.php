<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>

<div id="main-content">

	<?php if(isset($error))echo $error;
if ($page=="Media") {?>
	<section>
	<div class="container gal-container">
<!-- <div class="container"> -->

	<?php if ($this->session->flashdata('data')) {
		$d= $this->session->flashdata('data');
		echo $d['konfirmasi'];
		//barangkali tambahan tag html dibawah
		?>
		<!-- here -->
	<?php	} ?>


		<?php	 echo form_open_multipart('media/do_upload');?>
		<!-- <div class="col-md-6"> -->
			<div class="col-md-8 col-sm-12 co-xs-12 gal-item">
			<div class="panel-content">
				<h2 class="heading"><i class="fa fa-square"></i>Media</h2>
				<input type="file" id="dropify-event" name="filename" data-default-file="<?php echo base_url('uploads/default.png');?>">
				<input type="submit" class="btn btn-primary" value="upload" />
			</div>
			</div>
		</form>

	<?php
	$n=1;
	// $val= rand(1,10);
	$val= 5;
		//iterate pic
		foreach ($imgs as $v) {?>
			<?php if ($n%$val==0){ ?>
				<div class="col-md-8 col-sm-12 co-xs-12 gal-item">
			<?php }else {?>
				<div class="col-md-4 col-sm-12 co-xs-12 gal-item">
			<?php } ?>
		<div class="box">
			<a href="#<?php echo $n; ?>" data-toggle="modal" data-target="#<?php echo $n; ?>">
				<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
				<!-- <img src="http://nabeel.co.in/files/bootsnipp/gallery/1.jpg"> -->
			</a>
			<div class="">
			</div>
			<!-- tabindex="-1"
			 role="document"
		-->
			<div class="modal fade" id="<?php echo $n; ?>" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<div class="modal-body">
							<!-- <img src="http://nabeel.co.in/files/bootsnipp/gallery/1.jpg"> -->
							<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
						</div>
							<div class="col-md-12 description">
								<h4>Desk
								<a class="btn btn-danger" href="<?php echo base_url('media/dbmhapus?mediaid='.$v->mediaid.'&mdir='.$v->mdir); ?>">
									<span class="fa fa-trash"></span>
								</a>
							</h4>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$n++;
}	?>
</div>
</div>
</section>
<?php }?>
</div>

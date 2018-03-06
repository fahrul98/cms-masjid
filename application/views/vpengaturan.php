<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
<div id="main-content">
<!-- <div class="container"> -->
	<!-- <h1>Welcome to CodeIgniter!</h1> -->
	<h2><?php echo $page; ?></h2>
	<?php echo $error; ?>
	<div class="panel panel-default row">
				<!-- <?php echo form_open('profiladmin/dbubahprofiladmin');?> -->
				<?php echo form_open_multipart('pengaturan/dbubahp','class=form');	?>
			<div class="panel-content col-md-12">
			<div class="form-group">
				<label for="dsid">dsid : </label>
				<input type="text" required="required" class="form-control" name="dsid2" value="<?php echo $pgt->dsid;?>">
				<input type="hidden" required="required" class="form-control" name="dsid1" value="<?php echo $pgt->dsid;?>">
			</div>
			<div class="form-group">
				<label for="foot1">Foot 1 : </label>
				<!-- <input type="text" required="required" class="form-control" name="cmfoot1" value="<?php echo $pgt->cmfoot1;?>"> -->
				<textarea style="resize: none; height: 100px" type="textarea" class="form-control" name="cmfoot1" value=""><?php echo $pgt->cmfoot1;?></textarea>
			</div>
			<div class="form-group">
				<label for="foot2">Foot 2 : </label>
				<textarea style="resize: none; height: 100px" type="textarea" class="form-control" name="cmfoot2" value=""><?php echo $pgt->cmfoot2;?></textarea>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Terapkan</button>
			</div>
		</form>
		</div>
	</div>
</div>

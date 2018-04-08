<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
<div id="main-content">
<!-- <div class="container"> -->
	<!-- <h1>Welcome to CodeIgniter!</h1> -->
	<h2><?php echo $page; ?></h2>
	<?php echo $error;
		if ($page=="Pengaturan Info") {
	?>
	<div class="panel panel-default row">
				<!-- <?php echo form_open('profiladmin/dbubahprofiladmin');?> -->
				<?php echo form_open_multipart('pengaturan/dbubahp','class=form');	?>
			<div class="panel-content col-md-12">
			<div class="form-group">
				<label for="dsid">dsid : </label>
<?php
$dsarr=array(1,2,3);
$dsarr2=array("Hitam","Biru","Hijau");
 ?>
				<select class="form-control " name="dsid2" required="required">
					<?php
					$s='';$n=0;
					foreach ($dsarr as $d) {
						$selected = $pgt->dsid==$d?"selected='selected'":" ";
						echo "<option value='$d' $selected>".$dsarr2[$n]."</option>";
						$n++;
					}
					 ?>
				</select>
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
 <?php }else if ($page=="Slide Show") { ?>
<!--	<div class="panel panel-default row">
				<?php echo form_open_multipart('pengaturan/dbubahslide','class=form');	?>
			<div class="panel-content col-md-12">
			<div class="form-group">
				<label for="dsid">dsid : </label>
				<input type="text" required="required" class="form-control" name="dsid2" value="<?php echo $pgt->dsid;?>">
				<input type="hidden" required="required" class="form-control" name="dsid1" value="<?php echo $pgt->dsid;?>">
			</div>
			<div class="form-group">
				<label for="foot1">Foot 1 : </label>
				<input type="text" required="required" class="form-control" name="cmfoot1" value="<?php echo $pgt->cmfoot1;?>">
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

-->
<?php } ?>

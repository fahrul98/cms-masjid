<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
/*
pnama
pdeskripsi
psejarah
pvisimisi
*/

$adminlogin = $this->session->userdata('username')&&$this->session->userdata('userpass')?'notnull':null;

//$adminlogin vars test

// echo $adminlogin."--";
// $val = $adminlogin==1?'nice':'not nice';
// $val = isset($adminlogin)?'nice':'not nice';
// if ($adminlogin) {
// 	echo "val -> ".$val;
// }

?>
<div id="main-content">
<!-- <div class="container" style="margin-left: 300px; margin-top: 40px"> -->
<h2><?php echo $page; ?></h2>
<?php echo $error; ?>
		<?php echo form_open('profilm/dbubahprofilm','class=form');	?>
		<div class="row">
			<input type="hidden" name="pnama" value="<?php echo $profil['pnama'];?>">
			<div class="form-group col-md-4">
				<label for="pnama">Nama Masjid</label>
				<input type="text" class="form-control" name="pnama2" value="<?php echo $profil['pnama'];?>">
			</div>
		</div>
			<div class="form-group">
				<label for="pdeskripsi">Deskripsi</label>
				<textarea style="resize: none; height: 300px" type="textarea" class="form-control" name="pdeskripsi" value=""><?php echo $profil['pdeskripsi'];?></textarea>
			</div>
			<div class="form-group">
				<label for="psejarah">Sejarah</label>
				<textarea style="resize: none; height: 300px" type="textarea" class="form-control" name="psejarah" value=""><?php echo $profil['psejarah'];?></textarea>
			</div>
			<div class="form-group">
				<label for="pvisimisi">Visi Misi</label>
				<textarea style="resize: none; height: 300px" type="textarea" class="form-control" name="pvisimisi" value=""><?php echo $profil['pvisimisi'];?></textarea>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Terapkan</button>
			<a class="btn btn-primary" href="<?php echo base_url('beranda/profilm');?>">Lihat Profile</a>
		</form>
</div>

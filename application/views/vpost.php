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
			<th>Publication</th>
			<th colspan="3">Operasi</th>
		</thead>
<?php

$n = 1;
// <td><a href=".base_url('post/ubahpost/'.$v->postid).">".$v->psjudul."</a></td>
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('post/ubahpost/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>";
			if ($v->pspublic==0) {
				echo "<td>Draft<br/>
					<a href=".base_url('post/dbpublish/'.$v->postid)."> Publish</a></td>";
			}else{
				echo "<td>Published</td>";
			}
			echo "<td><a href=".base_url('post/ubahpost/'.urlencode($v->psjudul))."> ubah</a></td>
			<td><a href=".base_url('post/dbhapus/'.$v->postid)."> hapus</a></td>
			<td><a href=".base_url('post/view/'.urlencode($v->psjudul)).">pratinjau</a></td>
			</tr>";
			$n++;
		}
		 ?>
	</table>
<button class="btn"><i class="fa fa-pencil-square-o"> </i><a href="<?php echo base_url('post/tulis');?>"> Tulis postingan</a></button>
<button type="submit" class="btn " name="submit" value="kembali"><a style="text-decoration: none; text-decoration-color: white" href="<?php echo base_url('beranda/post');?>">Tampil Semua</a></button>

<?php }else if ($page=="Tulis Postingan") {?>
	<h2><?php echo $page; ?></h2>

	<?php echo form_open('post/dbtulis','class=form');	?>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="judul">Judul</label>
			<input type="text" class="form-control" name="judul" value="">
		</div>
		<div class="form-group col-md-3">
			<label for="ustadz">Ustadz</label>
			<input type="text" class="form-control" name="ustadz" value="">
		</div>
		<div class="form-group col-md-3">
			<label for="tagid">Tagid</label>
			<select class="form-control" name="tagid" >
				<?php 
					foreach ($cmtag as $t) {
						echo "<option value='".$t->tagid."'>".$t->tag."</option>";
					} 
				?>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="mediaid">Mediaid</label>
			<input type="file" class="form-control" name="mediaid" value="">
		</div>
	</div>

	<!-- gk jadi <div class="form-group ">
		<label for="text">Text</label>
		<input type="textarea" style="height: 300px; width: 600px" class="form-control" name="text" value="">
	</div> -->
	<div class="row">
		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary" name="submit" value="Tulis">Tulis</button>
			<button type="submit" class="btn btn-danger" name="submit" value="kembali">
				<a style="text-decoration: none" href="<?php echo base_url('post');?>">Kembali</a></button>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<textarea class="summernote" id="textpost" name="text"></textarea>
		</div>
	</div>
</form>

<?php }else if ($page=="Ubah Postingan") {?>

	<h2><?php echo $page; ?></h2>
	<?php echo form_open('post/dbubah','class=form');	?>
	<label class="fancy-checkbox custom-bgcolor-green">
		<input type="checkbox" name="pspublic"<?php
		if ($post->pspublic==1) {
			echo 'checked=""';
		}
		?>><span>Publik</span></label>
	<input type="hidden" name="postid" value="<?php echo $post->postid;?>">
	<div class="row">
		<div class="form-group col-md-3">
			<label for="judul">Judul</label>
			<input type="text" class="form-control" name="judul" value="<?php echo $post->psjudul;?>">
		</div>
		<div class="form-group col-md-3">
			<label for="ustadz">Ustadz</label>
			<input type="text" class="form-control" name="ustadz" value="<?php echo $post->psustadz;?>">
		</div>
		<div class="form-group col-md-3">
			<label for="tagid">Tagid</label>
			<select class="form-control" name="tagid" >
				<?php 
					foreach ($cmtag as $t) {
						if ($post->tagid==$t->tagid) {
							echo "<option value='".$t->tagid."' selected='selected'>".$t->tag."</option>";
						}else{
							echo "<option value='".$t->tagid."'>".$t->tag."</option>";
						}
					} 
				?>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="mediaid">Mediaid</label>
			<input type="file" class="form-control" name="mediaid" value="">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-8">
			<button type="submit" class="btn btn-primary" name="submit" value="ubah">Ubah</button>
			<button type="submit" class="btn" name="submit" value="kembali">
				<a href="<?php echo base_url('post/view/'.urlencode($post->psjudul));?>">pratinjau</a></button>
			<button type="submit" class="btn btn-danger" name="submit" value="kembali"><a style="text-decoration: none" href="<?php echo base_url('post');?>"><span>Kembali</span></a></button>
			<button type="submit" class="btn btn-danger" name="submit" value="hapus"><i class="fa fa-trash-o"></i><a style="text-decoration: none" href="<?php echo base_url('post/dbhapus/'.$post->postid);?>">Hapus Post</a></button>
			<!-- <button type="button" class="btn btn-danger"> <span>Danger</span></button> -->
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<textarea class="summernote" id="textpost" name="text"><?php echo $post->pstext;?></textarea>
		</div>
	</div>
	</form>

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
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

<h2><?php echo $page; ?>&nbsp &nbsp <a class="btn btn-default" href="<?php echo base_url('post/tulis');?>"><i class="fa fa-pencil-square-o"> </i> Tulis postingan</a>
<a class="btn btn-default" href="<?php echo base_url('beranda/post');?>">Tampil Semua</a></h2>
<div class="panel">
<div class="panel-content">
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
			<th>Publikasi</th>
			<th colspan="3">Operasi</th>
			<th>Dilihat</th>
		</thead>
<?php

// $n = 1;
// <td><a href=".base_url('post/ubahpost/'.$v->postid).">".$v->psjudul."</a></td>
		$n = $this->uri->segment('3') + 1;
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('post/ubahpost/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psbuat."</td>
			<td>".$v->tag."</td>";
			if ($v->pspublic==0) {
				echo "<td>Draft<br/>
					<a href=".base_url('post/dbpublish/'.$v->postid)."> Publish</a></td>";
			}else{
				echo "<td>Ya</td>";
			}
			echo "<td><a href=".base_url('post/ubahpost/'.urlencode($v->psjudul))."><i class='fa fa-pencil'></i></a></td>
			<td><a href=".base_url('post/dbhapus/'.$v->postid)."><i class='fa fa-trash-o'></i></a></td>
			<td><a href=".base_url('post/view/'.urlencode($v->psjudul)).">pratinjau</a></td>
			<td align='center'><i class='fa fa-eye' aria-hidden='true'></i><span> ".$v->vcount."</span></td>
			</tr>";
			$n++;
		}
		 ?>

	</table>
<ul class="pagination pagination">
	<?php
	if (isset($links)) {
		foreach ($links as $link) {
			echo "<li>". $link."</li>";
		}
		// echo $links;
	}
	?>
</ul>
</div>
</div>

<?php }else if ($page=="Tulis Postingan") {?>
	<h2><?php echo $page; ?></h2>
	<?php echo $error; ?>
	<?php echo form_open_multipart('post/dbtulis','class=form');	?>
	<label class="fancy-checkbox custom-bgcolor-green">
		<input type="checkbox" name="pspublic"<?php
		if ($input['pspublic']==1) {
			echo 'checked=""';
		}
		?>><span>Publik</span></label>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="judul">Judul</label>
			<input type="text" class="form-control" name="judul" value="<?php echo $input['psjudul']; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="ustadz">Ustadz</label>
			<input type="text" class="form-control" name="ustadz" value="<?php echo $input['psustadz']; ?>">
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
	</div>
		<div class="row">
		<div class="form-group col-md-6">
			<div class="panel-content">
				<label for="filename">Media</label>
				<input type="file" id="dropify-event" name="filename" data-default-file="<?php echo base_url('uploads/default.png');?>" data-allowed-file-extensions="jpg gif png" />
			</div>
		</div>
		</div>
	<div class="row">
		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-success" name="submit" value="Tulis">Tulis</button>
			<a class="btn btn-success" style="text-decoration: none; color: #fff" href="<?php echo base_url('post');?>">Kembali</a>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<textarea class="summernote" id="textpost" name="text"><?php echo $input['pstext']; ?></textarea>
		</div>
	</div>
</form>

<?php }else if ($page=="Ubah Postingan") {?>

	<h2><?php echo $page; ?></h2>
	<?php echo $error; ?>
	<?php echo form_open_multipart('post/dbubah','class=form');	?>
	<label class="fancy-checkbox custom-bgcolor-green">
		<input type="checkbox" name="pspublic"<?php
		if ($post->pspublic==1) {
			echo 'checked=""';
		}
		?>><span>Publik</span></label>
	<input type="hidden" name="postid" value="<?php echo $post->postid;?>">
	<div class="row">
		<div class="form-group col-md-6">
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
	</div>
		<div class="row">
		<div class="form-group col-md-6">
			<div class="panel-content">
				<label for="filename">Media</label>
				<input type="file" id="dropify-event" name="filename" data-default-file=" <?php if ($post->mediadir) {
					echo base_url('uploads/posts/'.$post->mediadir);
				}else{
					echo base_url('uploads/default.png');
				}
				?>" data-allowed-file-extensions="jpg gif png">
				<input type="hidden" name="oldmedia" value="<?php echo $post->mediadir;?>" />
			</div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="form-group col-md-3">
			<label for="mediaid">Mediaid</label>
			<input type="file" class="form-control" name="mediaid" value="">
		</div>
	</div> -->
	<div class="row">
		<div class="form-group col-md-8">
			<button type="submit" class="btn btn-success" name="submit" value="ubah">Ubah</button>
			<a class="btn btn-success" href="<?php echo base_url('post/view/'.urlencode($post->psjudul));?>" style="color: #fff">pratinjau</a>
			<a class="btn btn-success" style="text-decoration: none; color: #fff" href="<?php echo base_url('post');?>">Kembali</a>
			<a class="btn btn-success" style="text-decoration: none; color: #fff" href="<?php echo base_url('post/dbhapus/'.$post->postid);?>"><i class="fa fa-trash-o"></i> 	Hapus Post</a></button>
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
	<div class="container">
		<hr>
	<div class="row">
	<h2><?php echo $post->psjudul; ?></h2>
	<!-- <label for="judul">Judul</label><input type="text" name="judul" value="<?php //echo $post->psjudul;?>"> -->

	<h4><?php echo $post->psustadz; echo " - ".$post->tagid;?></h4>
	<p>	<?php echo $post->pstext;?>	</p>
</div>
</div>
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

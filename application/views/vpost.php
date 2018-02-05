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
if ($page=="post") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="blogs">
					<div class="text-center">
						<h2>Blog</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br>
						vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<div class="blog">
						<h5>February,22 2015</h5>
						<img src="assets/img/01.jpg" class="img-responsive" alt="" />			
					
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper
						suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						
						<h3>Lorem ipsum dolor sit amet</h3>

						<p>Duis autem vel eum iriure dolor in hendrerit
						in vulputate velit esse molestie consequat,
						vel illum dolore eu feugiat nulla facilisis at
						vero eros et accumsan et iusto odio dignissim qui
						blandit praesent luptatum zzril delenit augue duis
						dolore te feugait nulla facilisi. Nam liber tempor 
						cum soluta nobis eleifend option congue nihil imperdiet
						doming id quod mazim placerat facer possim assum.
						Typi non habent claritatem insitam;
						est usus legentis in iis qui facit eorum claritatem.</p>

						<p>Nam liber tempor cum soluta nobis eleifend option 
						congue nihil imperdiet doming id quod mazim placerat
						facer possim assum. Typi non habent claritatem insitam;
						est usus legentis in iis qui facit eorum.</p>

						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
						magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
						quis nostrud exerci tation ullamcorper suscipit 
						lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<div class="ficon">
							<a href="#" alt="">Learn more</a> 
						</div>
					</div>
				</div>	
				<div class="container">
					<div class="row">
						<nav>
						  <ul class="pagination">
							<li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
						  </ul>
						</nav>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<form class="form-search">
					<input class="form-control" type="text" placeholder="Search..">
				</form>
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Popular Posts</strong>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="assets/img/b.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
								</p>
								<div class="ficon">
									<a href="#" alt="">Read more</a> 
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="assets/img/a.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
								</p>
								<div class="ficon">
									<a href="#" alt="">Read more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="assets/img/c.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
								</p>
								<div class="ficon">
									<a href="#" alt="">Read more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="assets/img/d.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
								</p>
								<div class="ficon">
									<a href="#" alt="">Read more</a> 
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>				
		</div>
	</div>
	
		<div class="container">
			<div class="row">				
				<div class="col-md-8">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/HrdAkX0ue3k?list=PLB523918A978EF359" frameborder="1" allowfullscreen></iframe>
					</div>	
				</div>
				<div class="col-md-4">	
					<div class="popular-tags">
						<h5>Popular tags</h5>
						<ul class="tags">
							<li><a href="#">Quran</a></li>
							<li><a href="#">Sunnah</a></li>
							<li><a href="#">Mesjid</a></li>
							<li><a href="#">Kajian</a></li>
							<li><a href="#">Berkah</a></li>
							<li><a href="#">Donasi</a></li>
						</ul>
					</div>				
				</div>	
			</div>			
		</div>

<h2><?php echo $page; ?></h2>
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
}
?>
</ul>
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
			<a class="btn btn-danger"style="text-decoration: none" href="<?php echo base_url('post');?>">Kembali</a>
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
			<a class="btn btn-danger" style="text-decoration: none" href="<?php echo base_url('post');?>">Kembali</a>
			<a class="btn btn-danger" style="text-decoration: none" href="<?php echo base_url('post/dbhapus/'.$post->postid);?>"><i class="fa fa-trash-o"></i> 	Hapus Post</a></button>
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

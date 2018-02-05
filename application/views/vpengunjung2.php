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
<!-- Template -->
<?php
if ($page=="Beranda") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<!-- SlideShow -->
<!-- <div class="container">
	<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<div class="bx-wrapper" style="max-width: 100%;">
						<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 468px;">
							<ul class="bxslider" style="width: 515%; position: relative; transition-duration: 0s; transform: translate3d(-3670px, 0px, 0px);">
								<li style="float: left; list-style: none; position: relative; width: 1170px;" class="bx-clone"><img src="assets/img/01.jpg" alt=""></li>
								<li style="float: left; list-style: none; position: relative; width: 1170px;"><img src="assets/img/01.jpg" alt=""></li>
								<li style="float: left; list-style: none; position: relative; width: 1170px;"><img src="assets/img/01.jpg" alt=""></li>
								<li style="float: left; list-style: none; position: relative; width: 1170px;"><img src="assets/img/01.jpg" alt=""></li>
								<li style="float: left; list-style: none; position: relative; width: 1170px;" class="bx-clone"><img src="assets/img/01.jpg" alt=""></li>
							</ul>
						</div>
						<div class="bx-controls bx-has-pager bx-has-controls-direction">
							<div class="bx-pager bx-default-pager">
								<div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div>
								<div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div>
								<div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link active">3</a></div>
							</div>
							<div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div> -->

<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Selamat Datang di Masjid Taqwa</h2>
					<p>Mari kita memuliakan rumah Allah<br>
					<br>
					</p>
				</div>
				<hr>
			</div>
		</div>
</div>

<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<h4>Portal Donasi</h4>
							<div class="icon">
								<i class="fa fa-heart-o fa-3x"></i>
							</div>
						<p>Pastikan kita menggunakan harta kita di jalan Allah</p>
						<div class="ficon">
							<a href="<?php echo base_url('');?>" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
						<h4>Jadwal Kegiatan</h4>
						<div class="icon">
							<i class="fa fa-calendar fa-3x"></i>
						</div>
						<p>Jangan sampai hari ini berakhir tanpa ada satu ilmu pun yang kita dapatkan</p>
						<div class="ficon">
							<a href="<?php echo base_url('beranda/jadwalkegiatan');?>" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<h4>Materi Kajian</h4>
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<p>Klik untuk melihat daftar judul kajian</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>

				</div>

			</div>
		</div>
</div>


<?php }else if ($page=="Semua Post") {?>
	<h2><?php echo $page;?><h3>
		<?php if (isset($mode)) {
		// echo $mode;
	} ?></h3></h2>

	<!-- <table class="table  table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
		</thead> -->
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
	<?php
		$n = 1;
		foreach ($cmpost as $v) {
			// echo "<tr>
			// <td>".$n."</td>
			// <td><a href=".base_url('beranda/post/'.$v->postid).">".$v->psjudul."</a></td>
			// <td>".$v->psustadz."</td>
			// <td>".$v->psubah."</td>
			// <td>".$v->tagid."</td>
			// </tr>";
			?>
			<div class="row panel panel-default">
				<div class="panel-content">
					<!-- panel -->
					<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul)); ?>"><?php echo $v->psjudul;?></a>
				</div>
			</div>
			<?php
			$n++;
		}
	?>
	<!-- </table> -->


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

<?php

//tampilpost
 }else if ($page=="tampilpost") {?>
	<!-- <h2><?php echo $page;?></h2> -->
	<?php
		$n = 1;
		$v=$post;
		// echo "<tr>
		// <td>".$n."</td>
		// <td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
		// <td>".$v->psustadz."</td>
		// <td>".$v->psubah."</td>
		// <td>".$v->tagid."</td>
		// </tr>";
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

						<h1><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $page2;?></a></h1>
						<p><?php echo $v->psustadz;?></p>
						<p><?php echo $v->psubah;?></p>
						<p><?php echo $v->tagid;?></p>
						<p><?php echo $v->pstext;?></p>

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
				<?php echo form_open('beranda/search','class=form');  ?>
				<div id="navbar-search" class="navbar-form search-form">
					<input name="search" value="" class="form-control" placeholder="Cari..." type="text">
        			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        		</div>
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
<<<<<<< HEAD
=======
	<table class="table  table-bordered table-striped table-hover">
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
			<td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
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


<?php

//tampilpost
 }else if ($page=="tampilpost") {?>
	<!-- <h2><?php echo $page;?></h2> -->
	<?php
		$n = 1;
		$v=$post;
		echo "<tr>
		<td>".$n."</td>
		<td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
		<td>".$v->psustadz."</td>
		<td>".$v->psubah."</td>
		<td>".$v->tagid."</td>
		</tr>";
	?>

<h1><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $v->psjudul;?></a></h1>
<p><?php echo $v->psustadz;?></p>
<p><?php echo $v->psubah;?></p>
<p><?php echo $v->tagid;?></p>
<p><?php echo $v->pstext;?></p>

>>>>>>> a734b5a5d492d93293a2e14a770d8b4a06349caf

<?php }else if ($page=="Profil Masjid") {?>

<div class="container">
	<div class="row">
		<div class="service">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2><?php echo $page;?></h2>
					<p>Lanjutkan membaca untuk mengenal masjid Taqwa lebih dekat<br>
					</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

<div class="services">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
					<h4>Data Masjid</h4>
						<div class="icon">
							<i class="fa fa-heart-o fa-3x"></i>
						</div>
					<p><?php echo $profil->pnama;?></p>
					<div class="ficon">
						<a href="#" class="btn btn-default" role="button">Read more</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
					<h4>Deskripsi</h4>
					<div class="icon">
						<i class="fa fa-desktop fa-3x"></i>
					</div>
					<p><?php echo $profil->pdeskripsi;?></p>
					<div class="ficon">
						<a href="#" class="btn btn-default" role="button">Read more</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
					<h4>Sejarah</h4>
					<div class="icon">
						<i class="fa fa-location-arrow fa-3x"></i>
					</div>
					<p><?php echo $profil->psejarah;?></p>
					<div class="ficon">
						<a href="#" class="btn btn-default" role="button">Read more</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.2s">
					<h4>Visi-Misi</h4>
					<div class="icon">
						<i class="fa fa-laptop fa-3x"></i>
					</div>
					<p><?php echo $profil->pvisimisi;?></p>
					<div class="ficon">
						<a href="#" class="btn btn-default" role="button">Read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }else if ($page=="Takmir Masjid") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama takmir</th>
			<th>Jabatan</th>
			<th>Masa Jabatan</th>
			<th>No. Telp</th>
		</thead>
	<?php

	$n = 1;
		foreach ($cmtakmir as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->mediaid."</td>
			<td>".$v->tknama."</td>
			<td>".$v->tkjabatan."</td>
			<td>".$v->tkmasajabatan."</td>
			<td>".$v->tknotelp."</td>

			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Ustadz") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama ust.</th>
			<th>No. Telp</th>
			<th>Alamat</th>
		</thead>
<?php

$n = 1;
		foreach ($cmustadz as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->mediaid."</td>
			<td>".$v->usnama."</td>
			<td>".$v->usnotelp."</td>
			<td>".$v->usalamat."</td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
<?php }else if ($page=="Keuangan Masjid") {?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2><?php echo $page;?></h2>
						<p>Berikut ini adalah kondisi keuangan dari Masjid Taqwa<br>
						Untuk donasi silahkan menuju Tab Donasi<br>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Waktu</th>
			<th>Keterangan</th>
			<th>Pengeluaran</th>
			<th>Saldo</th>
			<!-- <th colspan="2">Operasi</th> -->
		</thead>
	<?php

	$n = 1;
		foreach ($kmasjid as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->kmwaktu."</td>
			<td>".$v->kmketerangan."</td>
			<td>".$v->kmpengeluaran."</td>
			<td>".$v->kmsaldo."</td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
<?php }else if ($page=="Jadwal Kegiatan") {?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2><?php echo $page;?></h2>
						<p>Berikut ini adalah jadwal kegiatan yang akan berlangsung di Masjid Taqwa<br>
						Catat tanggalnya jangan sampai ketinggalan<br>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Nama Kegiatan</th>
			<th>Pihak terkait</th>
			<th>Waktu</th>
			<th>Tag</th>
		</thead>
	<?php
		$n = 1;
			foreach ($jadwalk as $v) {
				echo "<tr>
				<td>".$n."</td>
				<td>".$v->jknama."</td>
				<td>".$v->jkpihak."</td>
				<td>".$v->jkwaktu."</td>
				<td>".$v->tagid."</td>

				</tr>";
				$n++;
			}
			 ?>
		</table>
</div>

<?php } else if ($page=="Bantuan") {?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2><?php echo $page;?></h2>
						<p>Bantuan<br>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>

<?php }else if ($page=="Tentang") {?>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2><?php echo $page;?></h2>
						<p>Tentang<br>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>

<?php }?>
</div>
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

?>
	<!-- <div class="wrapper"> -->
	<!-- Template -->

	<?php
	if ($page=="Beranda") {

?>

		<!-- SlideShow -->
		<div class="container">
			<div class="row">
				<div class="slider">
					<div class="img-responsive">
						<ul class="bxslider">
							<li>
								<img src="assets/img/01.jpg" alt="www.malasngoding.com">
								<div class="carousel-caption" style="padding-bottom: 120px">
									<h3>Galeri</h3>
									<p>Foto foto kegiatan Masjid</p>
								</div>
							</li>
							<li>
								<img src="assets/img/01.jpg" alt="www.malasngoding.com">
								<div class="carousel-caption" style="padding-bottom: 120px">
									<h3>Galeri</h3>
									<p>Foto foto kegiatan Masjid</p>
								</div>
							</li>
							<li>
								<img src="assets/img/01.jpg" alt="www.malasngoding.com">
								<div class="carousel-caption" style="padding-bottom: 120px">
									<h3>Galeri</h3>
									<p>Foto foto kegiatan Masjid</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END Show -->

		<div class="container" style="">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<h2>Selamat Datang di Website <br><?php echo $cmprofil->pnama; ?></h2>
						<p>Mari kita memuliakan rumah Allah</p>
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

		<div class="container">
			<div class="row">
				<div class="text-center">
					<!-- <div class="col-md-10"> -->
					<div class="col-md-10 col-md-offset-1">
						<h2>Profil Masjid</h2><br>
						<h4>Sejarah</h4>
						<p class="phitam">
							<?php echo $profil->psejarah;?>
						</p><br>
						<h4>Visi Misi</h4>
						<p class="phitam">
							<?php echo $profil->pvisimisi;?>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<h2>Galeri</h2>
						<p>Foto Foto Kegiatan Masjid Taqwa<br>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container content">
			<div class="grid" style="">
				<figure class="effect-zoe">
					<img src="assets/img/25.jpg" alt="img25">
					<figcaption>
						<h2>Title <span>Name</span></h2>
						<p class="icon-links">
							<a href="#"><span class="icon-heart"></span></a>
							<a href="#"><span class="icon-eye"></span></a>
							<a href="#"><span class="icon-paper-clip"></span></a>
						</p>
						<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
					</figcaption>
				</figure>
				<figure class="effect-zoe" style="">
					<img src="assets/img/26.jpg" alt="img26">
					<figcaption>
						<h2>Title <span>Name</span></h2>
						<p class="icon-links">
							<a href="#"><span class="icon-heart"></span></a>
							<a href="#"><span class="icon-eye"></span></a>
							<a href="#"><span class="icon-paper-clip"></span></a>
						</p>
						<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
					</figcaption>
				</figure>
			</div>
		</div>

		<div class="container content">
			<div class="grid" style="">
				<figure class="effect-zoe">
					<img src="assets/img/27.jpg" alt="img2">
					<figcaption>
						<h2>Title <span>Name</span></h2>
						<p class="icon-links">
							<a href="#"><span class="icon-heart"></span></a>
							<a href="#"><span class="icon-eye"></span></a>
							<a href="#"><span class="icon-paper-clip"></span></a>
						</p>
						<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
					</figcaption>
				</figure>
				<figure class="effect-zoe" style="">
					<img src="assets/img/28.jpg" alt="img26">
					<figcaption>
						<h2>Title <span>Name</span></h2>
						<p class="icon-links">
							<a href="#"><span class="icon-heart"></span></a>
							<a href="#"><span class="icon-eye"></span></a>
							<a href="#"><span class="icon-paper-clip"></span></a>
						</p>
						<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
					</figcaption>
				</figure>
			</div>
		</div>

		<?php }else if ($page=="Semua Post") {?>

		<div class="container" style="">
			<div class="row">
				<div class="service">
					<h2><?php echo $page;?></h2>
					<h3 class="phitam">~hadits~</h3>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
							<h5><?php echo "Sekarang tanggal : tgl hr ini"; ?></h5>
<hr>
								<?php
							$n = 1;
							foreach ($cmpost as $v) {
								// echo "<tr>
								// <td>".$n."</td>
								// <td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
								// <td>".$v->psustadz."</td>
								// <td>".$v->psubah."</td>
								// <td>".$v->tagid."</td>
								// </tr>";
								?>

									<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>">
										<h3 class="media-heading"><?php echo $v->psjudul; ?></h3>
									</a>
									<p class="text-muted">
										<?php echo $v->psbuat."	".$v->psustadz." | ".$v->tag;?>
									</p>
									<div class="phitam">
									<?php echo substr($v->pstext,0,100)."...</p>"; ?>
									</div>
									<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>" alt="">Lebih banyak...</a>
									<hr>
									<?php
								$n++;
							}

						?>

									<div class="container">
										<div class="row">
											<nav>
												<ul class="pagination">
													<?php
										if (isset($links)) {
											foreach ($links as $link) {
												echo "<li>". $link."</li>";
											}
										}
										?>
														<!-- <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
										<li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li> -->
												</ul>
											</nav>
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
		echo "<tr>
		<td>".$n."</td>
		<td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
		<td>".$v->psustadz."</td>
		<td>".$v->psubah."</td>
		<td>".$v->tagid."</td>
		</tr>";
	?>


				<!-- <div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="blogs">
									<div class="text-center">
										<h2>Blog</h2>

										<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
										</p>
									</div>
									<hr>
								</div>
							</div>
						</div>
					</div> -->

				<div class="container">
					<div class="row">
						<div class="col-md-8 l-posts">
							<div class="page-header">
								<div class="blog">
									<h5><?php echo $v->psubah;?></h5>
									<img src="assets/img/01.jpg" class="img-responsive" alt="" />
									<div class="panel-content">
											<h1><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $v->psjudul;?></a></h1>
											<p>
												<?php echo $v->psustadz;?>
											</p>
											<p>
												<?php echo $v->tagid;?>
											</p>
											<p>
												<?php echo $v->pstext;?>
											</p>
									</div>
								</div>
							</div>
						</div>
						<!-- sidebar -->
						<div class="col-md-4 page-header">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Popular Posts</strong>
								</div>
								<div class="panel-body search-form form-group">
									<?php echo form_open('beranda/search','class=form');  ?>
									<input name="search" value="" class="form form-control" placeholder="Cari..." type="text">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<div class="panel-body">
									<div class="media">
										<a class="media-left" href="#">
										<img src="assets/img/b.jpg" alt="">
									</a>
										<div class="media-body">
											<h4 class="media-heading">Kelly Hidayah</h4>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
											</p>

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
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
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
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
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
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
											</p>
											<div class="ficon">
												<a href="#" alt="">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
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

			<?php }else if ($page=="Profil Masjid") {?>

			<div class="container" style="">
				<div class="row">
					<div class="service">
						<h2><?php echo $page;?></h2>
						<h3 class="phitam">Lanjutkan membaca untuk mengenal <?php echo $cmprofil->pnama; ?> lebih dekat
									</h3>
					</div>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<h2>Deskripsi</h2>
					<p class="phitam">
						<?php echo $profil->pdeskripsi;?>
					</p>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<h2>Sejarah</h2>
					<p class="phitam">
						<?php echo $profil->psejarah;?>
					</p>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<h2>Visi Misi</h2>
					<p class="phitam">
						<?php echo $profil->pvisimisi;?>
					</p>
				</div>
			</div>
			<hr>
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
								<p>Berikut ini adalah kondisi keuangan dari Masjid Taqwa<br> Untuk donasi silahkan menuju Tab Donasi<br>
								</p>
							</div>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
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
			</div>
			<?php }else if ($page=="Jadwal Kegiatan") {?>

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="portfolios">
							<div class="text-center">
								<h2><?php echo $page;?></h2>
								<p>Berikut ini adalah jadwal kegiatan yang akan berlangsung di Masjid Taqwa<br> Catat tanggalnya jangan sampai ketinggalan<br>
								</p>
							</div>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
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
			<!-- end wrapp -->
		</div>

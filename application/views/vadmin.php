<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
	<!-- <div class="container"> -->
	<div id="main-content">
		<!-- <h1>Welcome to CodeIgniter!</h1> -->
		<h2><?php echo $page; ?></h2>
		<div class="col-md-3 col-sm-6">
			<div class="number-chart">
				<div class="mini-stat">
					<h1><span><?php echo $total->totalp; ?></span></h1>
					<!-- <p class="text-muted"><i class="fa fa-caret-up text-success"></i> 44% compared to last week</p> -->
				</div>
				<div class="number"><span></span> <span>Total penayangan halaman</span></div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="number-chart">
				<div class="mini-stat">
					<h1><span><?php echo $total->maxp; ?></span></h1>
					<!-- <p class="text-muted"><i class="fa fa-caret-up text-success"></i> 44% compared to last week</p> -->
				</div>
				<div class="number"><span></span> <span>Penayangan Post terbaik</span></div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="number-chart">
				<div class="mini-stat">
					<table>
						<thead>
							<th>Judul</th>
							<th>Total views</th>
						</thead>
						<?php 
							foreach ($poppost as $p) {
								echo "<tr>
								<td>".$p->psjudul."</td>
								<td>".$p->vcount."</td>
								</tr>";
							}
						 ?>
					</table>
				</div>
				<div class="number"><span></span> <span>Post Terpopuler</span></div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="number-chart">
				<div class="mini-stat">
					<table>
						<thead>
							<th>Tag</th>
							<th>Total views</th>
						</thead>
						<?php 
							foreach ($poptag as $t) {
								echo "<tr>
								<td>".$t->tag."</td>
								<td>".$t->views."</td>
								</tr>";
							}
						 ?>
					</table>
				</div>
				<div class="number"><span></span> <span>Tag Terpopuler</span></div>
			</div>
		</div>
	</div>

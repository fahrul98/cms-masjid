<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
	<!-- <div class="container"> -->
	<div id="main-content">
		<!-- <h1>Welcome to CodeIgniter!</h1> -->
		<h2><?php echo $page; ?></h2>
		<div class="row">
		<div class="col-md-6 col-sm-7 left">
			<div id="demo-line-chart" class="ct-chart"></div>
		</div>
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
		</div>
				<div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="panel">
				<div class="panel-content">
					<h3>Post Terpopuler</h3>
					<table class="table table-bordered">
						<thead style="margin:0px auto">
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
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="panel">
				<div class="panel-content">
					<h3>Tag Terpopuler</h3>
					<table class="table table-bordered">
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
			</div>
		</div>
		</div>
	</div>
  <?php
//jika butuh chart
if($page="Beranda Admin"){?>
    <script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js'); ?>"></script>
<?php } ?>
<script>
				// line chart
		var data = {
			labels: [<?php foreach (array_reverse($chart) as $D) { Print('"'.$D->Date.'",'); }?>],
			series: [[<?php foreach (array_reverse($chart) as $v) { Print($v->views.','); }?>],
			]
		};

		var options = {
			height: "200px",
			showPoint: true,
			showArea: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
			chartPadding: {
				top: 0,
				right: 0,
				bottom: 30,
				left: 30
			},
			plugins: [
				Chartist.plugins.tooltip({
					appendToBody: true
				}),
				Chartist.plugins.ctAxisTitle({
					axisX: {
						axisTitle: 'Days',
						axisTitle: 'Tanggal',
						axisClass: 'ct-axis-title',
						offset: {
							x: 0,
							y: 50
						},
						textAnchor: 'middle'
					},
					axisY: {
						axisTitle: 'Views',
						axisTitle: 'Tayangan',
						axisClass: 'ct-axis-title',
						offset: {
							x: 0,
							y: -10
						},
					}
				})
			]
		};

		new Chartist.Line('#demo-line-chart', data, options);
</script>

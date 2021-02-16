  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php
  function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

} ?>
  	<!-- Sidebar -->
  	<ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">

  		<!-- Sidebar - Brand -->
  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  			<div class="sidebar-brand-icon ">
				  <img class="img-profile rounded-circle" style="height:70px" src="<?php echo base_url(); ?>assets/images/logomemore.jpg">
  			</div>
  			<div class="sidebar-brand-text mx-3">SIMODIS</div>
  		</a>

  		<!-- Divider -->
  		<hr class="sidebar-divider my-0">

  		<!-- Nav Item - Dashboard -->
  		<li class="nav-item active">
  			<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
  				<i class="fas fa-fw fa-tachometer-alt"></i>
  				<span>Dashboard</span></a>
  		</li>

  		<!-- Divider -->
  		<hr class="sidebar-divider">

  		<!-- Heading -->
  		<div class="sidebar-heading">
  		</div>

  		<!-- Nav Item - Charts -->
  		<li class="nav-item">
  			<a class="nav-link" href="<?php echo base_url('pemasukan') ?>">
  				<i class="fas fa-fw fa-chart-area"></i>
  				<span>Penambahan Data</span></a>
  		</li>

  		<!-- Nav Item - Tables -->
  		<li class="nav-item">
  			<a class="nav-link" href="<?php echo base_url('pengeluaran') ?>">
  				<i class="fas fa-fw fa-table"></i>
  				<span>Dokumen Masuk</span></a>
  		</li>

	<?php if($_SESSION['level'] == 'admin'){ ?>
		<li class="nav-item">
  			<a class="nav-link" href="<?php echo base_url('aturprofit') ?>">
			  <i class="fas fa-hand-holding-usd"></i>
  				<span>Monitoring</span></a>
  		</li>
	<?php } ?>

  		<!-- Divider -->
  		<hr class="sidebar-divider d-none d-md-block">

  		<!-- Sidebar Toggler (Sidebar) -->
  		<!-- <div class="text-center d-none d-md-inline">
  			<button class="rounded-circle border-0" id="sidebarToggle"></button>
  		</div> -->

  	</ul>
  	<!-- End of Sidebar -->

  	<!-- Content Wrapper -->
  	<div id="content-wrapper" class="d-flex flex-column">

  		<!-- Main Content -->
  		<div id="content">

  			<!-- Topbar -->
  			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  				<!-- Sidebar Toggle (Topbar) -->
  				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  					<i class="fa fa-bars"></i>
  				</button>

  				<!-- Topbar Navbar -->
  				<ul class="navbar-nav ml-auto">

  					<div class="topbar-divider d-none d-sm-block"></div>

  					<!-- Nav Item - User Information -->
  					<li class="nav-item dropdown no-arrow">
  						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username ?></span>
  							
				 			 <img class="img-profile rounded-circle"  src="<?php echo base_url(); ?>assets/images/logomemore.jpg">
  						</a>
  						<!-- Dropdown - User Information -->
  						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
  								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  								Logout
  							</a>
  						</div>
  					</li>
  				</ul>

  			</nav>
  			<!-- End of Topbar -->

  			<!-- Begin Page Content -->
  			<div class="container-fluid">

  				<!-- Page Heading -->
  				<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>



  				<div id="wrapper">


  					<div class="d-flex flex-column" id="content-wrapper">
  						<div id="content">
  					
  							<div class="container-fluid">
  						
  								<div class="row">
  									<div class="col-md-6 col-xl-4 mb-4">
  										<div class="card shadow border-left-success py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Uang Masuk</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span> <?php echo rupiah($jumlahpemasukan); ?></span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-arrow-up fa-2x text-success"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>
  									<div class="col-md-6 col-xl-4 mb-4">
  										<div class="card shadow border-left-danger py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-danger font-weight-bold text-xs mb-1"><span>Uang Keluar</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span><?=rupiah($jumlahpengeluaran);?></span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-arrow-down fa-2x text-danger"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>

  									<div class="col-md-6 col-xl-4 mb-4">
  										<div class="card shadow border-left-warning py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Profit/Loss</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span><?=rupiah($jumlahpemasukan-$jumlahpengeluaran)?></span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-money-check fa-2x text-warning"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>

<!-- Bagian Grafik -->
<?php if($_SESSION['level'] == 'admin'){ ?> 
								  <div class="col-md-6 col-xl col-sm-12 mb-4 ">
  										<div class="card shadow border-left-info py-2">
  											<div class="card-body">
  												<div class="row justify-content-center no-gutters">
								  <script type="text/javascript" src="chartjs/Chart.js"></script>
<div style=" height:45vh; width: 90vh;">
<canvas id="myChart"></canvas>
<script>
Chart.defaults.doughnutLabels = Chart.helpers.clone(Chart.defaults.doughnut);

var helpers = Chart.helpers;
var defaults = Chart.defaults;

Chart.controllers.doughnutLabels = Chart.controllers.doughnut.extend({
	updateElement: function(arc, index, reset) {
    var _this = this;
    var chart = _this.chart,
        chartArea = chart.chartArea,
        opts = chart.options,
        animationOpts = opts.animation,
        arcOpts = opts.elements.arc,
        centerX = (chartArea.left + chartArea.right) / 2,
        centerY = (chartArea.top + chartArea.bottom) / 2,
        startAngle = opts.rotation, // non reset case handled later
        endAngle = opts.rotation, // non reset case handled later
        dataset = _this.getDataset(),
        circumference = reset && animationOpts.animateRotate ? 0 : arc.hidden ? 0 : _this.calculateCircumference(dataset.data[index]) * (opts.circumference / (2.0 * Math.PI)),
        innerRadius = reset && animationOpts.animateScale ? 0 : _this.innerRadius,
        outerRadius = reset && animationOpts.animateScale ? 0 : _this.outerRadius,
        custom = arc.custom || {},
        valueAtIndexOrDefault = helpers.getValueAtIndexOrDefault;

    helpers.extend(arc, {
      // Utility
      _datasetIndex: _this.index,
      _index: index,

      // Desired view properties
      _model: {
        x: centerX + chart.offsetX,
        y: centerY + chart.offsetY,
        startAngle: startAngle,
        endAngle: endAngle,
        circumference: circumference,
        outerRadius: outerRadius,
        innerRadius: innerRadius,
        label: valueAtIndexOrDefault(dataset.label, index, chart.data.labels[index])
      },

      draw: function () {
      	var ctx = this._chart.ctx,
						vm = this._view,
						sA = vm.startAngle,
						eA = vm.endAngle,
						opts = this._chart.config.options;
				
					var labelPos = this.tooltipPosition();
					var segmentLabel = vm.circumference / opts.circumference * 100;
					
					ctx.beginPath();
					
					ctx.arc(vm.x, vm.y, vm.outerRadius, sA, eA);
					ctx.arc(vm.x, vm.y, vm.innerRadius, eA, sA, true);
					
					ctx.closePath();
					ctx.strokeStyle = vm.borderColor;
					ctx.lineWidth = vm.borderWidth;
					
					ctx.fillStyle = vm.backgroundColor;
					
					ctx.fill();
					ctx.lineJoin = 'bevel';
					
					if (vm.borderWidth) {
						ctx.stroke();
					}
					
					if (vm.circumference > 0.0015) { // Trying to hide label when it doesn't fit in segment
						ctx.beginPath();
						ctx.font = helpers.fontString(opts.defaultFontSize, opts.defaultFontStyle, opts.defaultFontFamily);
						ctx.fillStyle = "#190707";
						ctx.textBaseline = "top";
						ctx.textAlign = "center";
            
            // Round percentage in a way that it always adds up to 100%
						ctx.fillText(segmentLabel.toFixed(2) + "%", labelPos.x, labelPos.y);
					

          }
          //display in the center the total sum of all segments
        //   ctx.fillText('Total = ', vm.x, vm.y-20, 200);
      }
    });

    var model = arc._model;
    model.backgroundColor = custom.backgroundColor ? custom.backgroundColor : valueAtIndexOrDefault(dataset.backgroundColor, index, arcOpts.backgroundColor);
    model.hoverBackgroundColor = custom.hoverBackgroundColor ? custom.hoverBackgroundColor : valueAtIndexOrDefault(dataset.hoverBackgroundColor, index, arcOpts.hoverBackgroundColor);
    model.borderWidth = custom.borderWidth ? custom.borderWidth : valueAtIndexOrDefault(dataset.borderWidth, index, arcOpts.borderWidth);
    model.borderColor = custom.borderColor ? custom.borderColor : valueAtIndexOrDefault(dataset.borderColor, index, arcOpts.borderColor);

    // Set correct angles if not resetting
    if (!reset || !animationOpts.animateRotate) {
      if (index === 0) {
        model.startAngle = opts.rotation;
      } else {
        model.startAngle = _this.getMeta().data[index - 1]._model.endAngle;
      }

      model.endAngle = model.startAngle + model.circumference;
    }

    arc.pivot();
  }
});

var config = {
  type: 'doughnutLabels',
  data: {
    datasets: [{
      data: [
        <?php foreach ($data_profit as $pt) {
			echo $pt->profit_nilai, ',';
		} ?>
      ],
      backgroundColor: [
        "#F7464A",
        "#46BFBD",
        "#FDB45C",
        "#949FB1",
        "#4D5360",
      ],
      label: 'Dataset 1'
    }],
    labels: [
		<?php foreach ($data_profit as $pt) {
			echo '"', $pt->profit_nama, ' = ', $pt->profit_nilai, '",';
		} ?>
    ]
  },
  options: {
			circumference: Math.PI,
			rotation: 1.0 * Math.PI,
			responsive: true,
			legend: { position: 'top',},
			title: { display: true, text: 'Pembagian Profit' },
			animation: { animateScale: true, animateRotate: true }
		}
};

var ctx = document.getElementById("myChart").getContext("2d");
new Chart(ctx, config);
</script>
  												</div>
  											</div>
  										</div>
  									</div>
								  </div>

<?php } ?>
								  
<!-- Akhir bahian Grafik -->
  							</div>
  						</div>
  					

					  
  					</div>
  					<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
  				</div>






















  			</div>
  			<!-- /.container-fluid -->

  		</div>
  		<!-- End of Main Content -->
  	</div>
  	<!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
  	<i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
  				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">×</span>
  				</button>
  			</div>
  			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  			<div class="modal-footer">
  				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  				<a class="btn btn-warning" href="<?= base_url('Login/logout') ?>">Logout</a>
  			</div>
  		</div>
  	</div>
  </div>

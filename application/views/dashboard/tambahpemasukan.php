  <!-- Page Wrapper -->
  <div id="wrapper">

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
  		<li class="nav-item">
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
  		<li class="nav-item active">
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
  							<a class="dropdown-item" href="#">
  								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
  								Profile
  							</a>
  							<a class="dropdown-item" href="#">
  								<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
  								Activity Log
  							</a>
  							<div class="dropdown-divider"></div>
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
  				<h1 class="h3 mb-4 text-gray-800">Input Jenis Survey</h1>
  				<div id="wrapper">


  					<div class="d-flex flex-column" id="content-wrapper">
  						<div id="content">

  							<div class="container" style="margin-top: 40px">
  								<div class="col-md-12">
  									<?php echo form_open('login/simpan') ?>

  									<div class="form-group">
  										<label for="text">Jenis Survey</label>
  										<input type="text" name="detail" class="form-control" placeholder="contoh: untuk beli bunga">
  									</div>

  									<div class="form-group">
  										<label for="text">Jumlah</label>
  										<input type="text" name="jumlah" class="form-control" placeholder="contoh: 100.000">
  									</div>

									  <?php date_default_timezone_set("Asia/Jakarta"); ?>
										  <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= date("Y-m-d h:i:sa") ?>">
									
  									<!-- <div class="form-group" style="margin-bottom: 50px">
										  <label for="text">Tanggal</label> -->
  										<!-- <input type="date" id="datepicker" name="tanggal" class="form-control"> -->
									  <!-- </div> -->
  

  									<!-- <div class="form-group">
  										<label for="text">Pengarang</label>
  										<input type="text" name="pengarang" class="form-control">
  									</div> -->

  									<button type="submit" class="btn btn-md btn-success">Simpan</button>
  									<button type="reset" class="btn btn-md btn-warning">reset</button>
  									<?php echo form_close() ?>
  								</div>
  							</div>
  							
  							<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
							  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
							  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
							 
  						

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
  				<a class="btn btn-primary" href="<?= base_url('Login') ?>">Logout</a>
  			</div>
  		</div>
  	</div>
  </div>

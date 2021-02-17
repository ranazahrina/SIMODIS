  <!-- Page Wrapper -->
  <div id="wrapper">

  	<!-- Sidebar -->
  	<ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">

  		<!-- Sidebar - Brand -->
  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  			<div class="sidebar-brand-icon ">
				  <!-- <i class="fab fa-connectdevelop"></i> -->
				  
				  <img class="img-profile rounded-circle" style="height:70px" src="<?php echo base_url(); ?>assets/images/Logosimodis.jpg">
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

  	</ul>
  	<!-- End of Sidebar -->

  	<!-- Content Wrapper -->
  	<div id="content-wrapper" class="d-flex flex-column">

  		<!-- Main Content -->
  		<div id="content">

  			<!-- Topbar -->
  			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  				<!-- Sidebar Toggle (Topbar) -->
  				<button id="sidebarToggleTop" class="btn btn-warning d-md-none rounded-circle mr-3">
  					<i class="fa fa-bars"></i>
  				</button>

  				<!-- Topbar Navbar -->
  				<ul class="navbar-nav ml-auto">

  					<div class="topbar-divider d-none d-sm-block"></div>

  					<!-- Nav Item - User Information -->
  					<li class="nav-item dropdown no-arrow">
  						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username ?></span>
  							<img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/images/logomemore.jpg">
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
  				<h1 class="h3 mb-4 text-gray-800">Penambahan Data</h1>
  				<div id="wrapper">


  					<div class="d-flex flex-column" id="content-wrapper">
  						<div id="content">

  							<div class="container">
  								<?php echo $this->session->flashdata('notif') ?>
  								<a href="tambahpemasukan" class="btn btn-md btn-warning">Tambah Jenis Survey</a>
								<a href="tambah" class="btn btn-md btn-warning">Tambah Responden</a>
  								<hr>

								<div class="form-group row">
 									<label class="col-md-2 col-form-label">Jenis Survey</label>
									<th>
 										<div class="col-md-3">
  											<select class="form-control" id="category_name" name="category_name">
   												<option selected="0">Jenis Survey</option>
   													<?php foreach($cats as $cat) : ?>
    												<option value="<?php echo $cat->cat_id;?>"> <?php echo $cat->cat_name; ?></option>
   													<?php endforeach; ?>
  											</select>
 										</div>
									</th>
								</div>
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Waktu Pelaksanaan</label>
										<th>
										<div class="col-md-3">
  											<select class="form-control" id="category_name" name="category_name">
											  <option selected="0">Waktu Pelaksanaan</option>
													<?php foreach($cats as $cat) : ?>
												<form method="post" action="">
													<input type="checkbox" id="checkItem" name="check[]" value="1">Jan<br>
													<input type="checkbox" id="checkItem" name="check[]" value="2">Feb<br>
													<input type="checkbox" id="checkItem" name="check[]" value="3">Mar<br>
													<?php endforeach; ?>
												</select>
											</div>
										</th>
									</div>

								<div class="form-group row">
									<label class="col-md-2 col-form-label">Petugas</label>
									  <div class="col-md-3">
  										<input type="text" name="petugas" class="form-control" placeholder="Nama Petugas">
									</div>
  								</div>

								<div class="form-group row">
 									<label class="col-md-2 col-form-label">Responden</label>
									<th>
 										<div class="col-md-3">
  											<select class="form-control" id="category_name" name="category_name">
   												<option selected="0">Responden</option>
   													<?php foreach($cats as $cat) : ?>
    												<option value="<?php echo $cat->cat_id;?>"> <?php echo $cat->cat_name; ?></option>
   													<?php endforeach; ?>
  											</select>
 										</div>
									</th>
								</div>

								<div class="form-group row">
									<label class="col-md-2 col-form-label">Jumlah Responden</label>
										<th>
 										<div class="col-md-3">			
									<input type="number" max="1000" step=1 min="0" value="0" class="form-control">
								</div>
  								<!-- table -->
  								<div class="table-responsive">
  									<table id="table" class="table table-striped table-bordered table-hover">
  										<thead>
  											<tr>
  												<th>No.</th>
  												<!-- <th>id</th> -->
												  <th>Jenis Survey</th>
  												<th>Waktu Pelaksanaan</th>
  												<th>Petugas</th>
												  <th>Responden</th>

												  <?php if($_SESSION['level'] == 'admin') { ?> 
												  <th>Options</th>
												  <?php } ?>
												  
  											</tr>
  										</thead>
  										<tbody>

  											<?php
												$no = 1;
												foreach ($data_pemasukan as $hasil) {
												?>

  												<tr>
  													<td><?php echo $no++ ?></td>
  													<td><?php echo $hasil->tanggal ?></td>
  													<td><?php echo $hasil->nama ?></td>
  													<td><?php echo $hasil->jumlah ?></td>
												  <td><?php echo $hasil->detail ?></td>

												  <?php if($_SESSION['level'] == 'admin'){ ?>
  													<td>
														<button style="width:80px"  id='<?php echo json_encode($hasil); ?>' onClick="openModal(this.id)" type="button" class="btn btn-warning m-1" data-toggle="modal" data-target="#exampleModal">Edit</button>
														<button style="width:80px" id="<?php echo $hasil->id_pemasukan ?>"  onClick="deleteModal(this.id)" type="button" class="btn btn-danger m-1" data-toggle="modal" data-target="#Modal_Delete">Hapus</button>
													  </td>
												  <?php } ?>

  												</tr>

  											<?php } ?>

										  </tbody>
										
  									</table>
  								</div>

  							</div>

  							<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  							<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
  							<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  							<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->

			<form action="<?php echo base_url(). 'login/hapus'; ?>" method="post">
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
				  </div>
				  <div class="form-group" style="display: hidden;">
            <input type="hidden" class="form-control" id="id" name="id" >
          </div>
                  <div class="modal-body">
                       <strong>Yakin ingin menghapus?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                    <button type="submit" id="btn_delete" class="btn btn-danger">Ya</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
							

<form action="<?php echo base_url(). 'login/update'; ?>" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <?php date_default_timezone_set("Asia/Jakarta"); ?>
	  <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= date("Y-m-d h:i:sa"); ?>">
		<!-- <div class="form-group">
			<label for="tanggal" class="col-form-label">Tanggal:</label>
			<input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= date("Y-m-d h:i:sa") ?>">
		  </div> -->
          
          <div class="form-group">
			<label for="nama" class="col-form-label">Nama:</label>
			<input disabled type="text" class="form-control" id="nama" name="nama" value="<?= $_SESSION['username']; ?>">
		  </div>
		  
          <div class="form-group">
			<label for="jumlah" class="col-form-label">Jumlah:</label>
			<input type="text" class="form-control" id="jumlah" name="jumlah" >
		  </div>

		  <div class="form-group">
			<label for="detail" class="col-form-label">Detail:</label>
			<input type="text" class="form-control" id="detail" name="detail" >
		  </div>
		  
		  <div class="form-group" >
            <input type="hidden" class="form-control" id="id_edit" name="id_edit" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Tutup</button>
		<button type="submit" class="btn btn-warning">Perbarui</button>
      </div>
    </div>
  </div>
</form>

</div>

<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
<script>
	function openModal(id) {
		// var json=$(this).data("href");
		var obj = JSON.parse(id);
		document.getElementById('id_edit').value = obj.id_pemasukan;
		//document.getElementById('tanggal').value = obj.tanggal;
		//document.getElementById('nama').value = obj.nama;
		document.getElementById('jumlah').value = obj.jumlah;
		document.getElementById('detail').value = obj.detail;
		console.log(obj);
	}
</script>
<script>
	
	function deleteModal(id) {
		// var json=$(this).data("href");
		// var obj = JSON.parse(id);
		document.getElementById('id').value = id;
		// console.log(obj);
	}
</script>
  						
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
  				<a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Logout</a>
  			</div>
  		</div>
  	</div>
  </div>

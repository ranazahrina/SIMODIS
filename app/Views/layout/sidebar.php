<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon ">
            <img class="img-profile rounded-circle" style="height:50px" src="<?php echo base_url(); ?>/assets/img/logosimodis.jpg">
        </div>
        <div class="sidebar-brand-text mx-3">SIMODIS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/home/home') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Homepage</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Input Data
    </div>

    <!-- Nav Item - Penambahan Data -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/home/datamasuk') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Penambahan Data</span></a>
    </li>

    <!-- Nav Item - Dokumen Masuk -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/home/dokumen') ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Dokumen Masuk</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Monitoring</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Lihat Data : </h6>
                <a class="collapse-item" href="<?php echo base_url('/home/persurvey') ?>">Per Petugas</a>
                <a class="collapse-item" href="<?php echo base_url('/home/perpetugas') ?>">Per Survey</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="<?php echo base_url('/home/register') ?>">Tambah Pengguna</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <?php if (logged_in()) : ?>
                        <a class="nav-link dropdown-toggle" href="/logout">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>
                            Logout
                        </a>
                    <?php else : ?>
                        <a href="/login">Login</a>
                    <?php endif; ?>


                </li>
            </ul>

        </nav>
        <!-- End of Topbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">SIMODIS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/pages/datamasuk'); ?>">Pemasukkan Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/pages/dokumen'); ?>">Dokumen Masuk</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Monitoring
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= base_url('/pages/persurvey'); ?>">Per Survey</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('/pages/perpetugas'); ?>">Per Petugas</a></li>
                        <li><a class="dropdown-item" href="#">Visualisasi Data</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
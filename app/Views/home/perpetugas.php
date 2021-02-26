<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Per Petugas</h1>
            <div class="pencarian">
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Per Petugas</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Petugas</th>
                                    <th scope="col">Jenis Survey</th>
                                    <th scope="col">Tanggal Pelaksanaan</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Relisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bps</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
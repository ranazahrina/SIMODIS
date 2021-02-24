<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Pemasukan Data</h1>
                <div class="container-tambahdata">
                    <a href="tambahdata" class="btn btn-md btn-warning">Tambah Jenis Survey</a>
                    <a href="tambahresponden" class="btn btn-md btn-warning">Tambah Responden</a>
                    <h1 class="mt-2"></h1>
                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Jenis Survey</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <select class="form-control" id="category_name" name="category_name">
                                    <option selected="0">Jenis Survey</option>
                                </select>
                            </div>
                        </th>
                        <label class="col-md-1 col-form-label">Waktu Pelaksanaan</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <select class="form-control" id="category_name" name="category_name">
                                    <option selected="0">Waktu Pelaksanaan</option>
                                </select>
                            </div>
                        </th>
                        <label class="col-md-1 col-form-label">Petugas</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <input type="text" name="petugas" class="form-control" placeholder=" Nama Petugas">
                            </div>
                        </th>
                        <label class="col-md-1 col-form-label">Responden</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <select class="form-control" id="category_name" name="category_name">
                                    <option selected="0">Responden</option>

                                </select>
                            </div>
                        </th>
                        <label class="col-md-1 col-form-label">Jumlah Responden</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <input type="number" max="1000" step=1 min="0" value="0" class="form-control">
                            </div>
                        </th>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <a herf="" class="btn btn-success">Simpan</a>
                            </div>
                        </th>
                    </div>
                </div>
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
                        <h6 class="m-0 font-weight-bold text-primary">Pemasukan Data</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Survey</th>
                                        <th scope="col">Tanggal Pelaksanaan</th>
                                        <th scope="col">Petugas</th>
                                        <th scope="col">Respoden</th>
                                        <th scope="col">Jumlah Respoden</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td></td>
                                        <td></td>
                                        <td> <a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Delete </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
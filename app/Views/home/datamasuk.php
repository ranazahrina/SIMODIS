<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Penambahan Data</h1>
                <div class="container-tambahdata">
                    <a href="jenissurvey" class="btn btn-md btn-warning">Tambah Jenis Survey</a>
                    <h1 class="mt-2"></h1>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Jenis Survey</label>
                            <select class="form-control" id="category_name" name="category_name">
                                <option selected="0">Jenis Survey</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Waktu Survey</label>
                            <select class="form-control" id="category_name" name="category_name">
                                <option selected="0">Waktu Survey</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Pelaksanaan</label>
                            <select class="form-control" id="category_name" name="category_name">
                                <option selected="0">Waktu pelaksanaan</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Petugas</label>
                            <input type="text" name="petugas" class="form-control" placeholder=" Nama Petugas">
                        </div>
                        <div class="col-md-2">
                            <label>Responden</label>
                            <input type="text" name="petugas" class="form-control" placeholder=" Nama Responden">
                        </div>
                        <div class="col-md-2">
                            <label>Simpan</label>
                            <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-block">
                        </div>
                    </div>
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
                    <h6 class="m-0 font-weight-bold text-primary">Penambahan Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Survey</th>
                                    <th scope="col">Waktu Survey</th>
                                    <th scope="col">Tanggal Pelaksanaan</th>
                                    <th scope="col">Petugas</th>
                                    <th scope="col">Respoden</th>
                                    <th scope="col">Jumlah Responden</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($isidata as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['jenis_survey']; ?></td>
                                        <td><?= $k['waktu_survey']; ?></td>
                                        <td><?= $k['dokumen_masuk']; ?></td>
                                        <td><?= $k['nama_petugas']; ?></td>
                                        <td><?= $k['responden']; ?></td>
                                        <td></td>
                                        <td> <a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Delete </a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
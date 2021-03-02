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
                          <form class="user" method="post" action="<?= base_url('Home/jenissurvey'); ?>">
                            <label>Jenis Survey</label>
                            <select class="form-control" id="survey" name="survey" placeholder="Jenis Survey">
                                    <option disabled selected>Jenis Survey</option>
                            <?php foreach ($survey as $i) : ?>
                                    <option value="<?= $i['jenis_survey']; ?>"> <?= $i['jenis_survey']; ?> </option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Waktu Survey</label>
                            <select class="form-control" id="waktu_s" name="waktu_s" placeholder="Waktu Survey">
                                <option disabled selected>Waktu pelaksanaan</option>
                                <option value="Bulanan">Bulanan</option>
                                <option value="Triwulan">Triwulan</option>
                                <option value="Tahunan">Tahunan</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Pelaksanaan</label>
                            <select class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder="Waktu Pelaksanaan">
                                <option disabled selected>Waktu pelaksanaan</option>
                                <option value="JANUARI">JANUARI</option>
                                <option value="FEBRUARI">FEBRUARI</option>
                                <option value="MARET">MARET</option>
                                <option value="APRIL">APRIL</option>
                                <option value="MEI">MEI</option>
                                <option value="JUNI">JUNI</option>
                                <option value="JULI">JULI</option>
                                <option value="AGUSTUS">AGUSTUS</option>
                                <option value="SEPTEMBER">SEPTEMBER</option>
                                <option value="OKTOBER">OKTOBER</option>
                                <option value="NOVEMBER">NOVEMBER</option>
                                <option value="DESEMBER">DESEMBER</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Petugas</label>
                            <input type="text" name="petugas" class="form-control" placeholder="Nama Petugas">
                        </div>
                        <div class="col-md-2">
                            <label>Responden</label>
                            <input type="text" name="petugas" class="form-control" placeholder="Nama Responden">
                        </div>
                        <div class="col-md-2">
                            <label>Simpan</label>
                            <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-block">
                        </div>
                      </form>
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

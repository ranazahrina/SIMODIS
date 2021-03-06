<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Penambahan Data</h1>
                <div class="container-tambahdata">
                    <a href="jenissurvey" class="btn btn-md btn-warning">Tambah Jenis Survey</a>
                    <h1 class="mt-2"></h1>
                    <form action="/survei/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Jenis Survey</label>
                                <select class="form-control <?= ($validation->hasError('jenis_survey')) ? 'is-invalid' : ''; ?>" id="jenis_survey" name="jenis_survey" placeholder="Waktu Survey">
                                    <option disabled selected>Jenis survey</option>
                                    <?php foreach ($survey as $a) : ?>
                                        <option value="<?= $a['jenis_survey']; ?>"> <?= $a['jenis_survey']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_survey'); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Waktu Survey</label>
                                <select class="form-control <?= ($validation->hasError('waktu_s')) ? 'is-invalid' : ''; ?>" id="waktu_s" name="waktu_s" placeholder="Waktu Survey">
                                    <option disabled selected>Waktu pelaksanaan</option>
                                    <option value="Bulanan">Bulanan</option>
                                    <option value="Triwulan">Triwulan</option>
                                    <option value="Tahunan">Tahunan</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktu_s'); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Pelaksanaan</label>
                                <select class="form-control <?= ($validation->hasError('pelaksanaan')) ? 'is-invalid' : ''; ?>" id="pelaksanaan" name="pelaksanaan" placeholder="Waktu Pelaksanaan">
                                    <option disabled selected>Bulan pelaksanaan</option>
                                    <option value=" JANUARI">JANUARI</option>
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
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pelaksanaan'); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control  <?= ($validation->hasError('nama_petugas')) ? 'is-invalid' : ''; ?>" placeholder=" Nama Petugas">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_petugas'); ?>
                                </div>
                                <!-- <div class="invalid-feedback">

                                </div> -->
                            </div>

                            <div class="col-md-2">
                                <label>Responden</label>
                                <input type="text" name="responden" class="form-control <?= ($validation->hasError('responden')) ? 'is-invalid' : ''; ?>" placeholder=" Nama Responden">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('responden'); ?>
                                </div>
                            </div>
                            <div class="buttonsubmit">
                                <button type="submit" name="submit" class="button" onchange="this.form.submit()">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pencarian">
                <form action="/home/datamasuk" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input name="keyword" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit" onchange="this.form.submit()">
                                <i class="fas fa-search fa-sm">Cari</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <?php if (session()->getFlashdata('berhasil')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('berhasil'); ?>
                    </div>
                <?php endif; ?>
            </div>
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
                                <th scope="col">Waktu Pelaksanaan</th>
                                <th scope="col">Petugas</th>
                                <th scope="col">Responden</th>
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
                                    <td><?= $k['waktu_pelaksanaan']; ?></td>
                                    <td><?= $k['nama_petugas']; ?></td>
                                    <td><?= $k['responden']; ?></td>
                                    <td> <a href="/survei/edit/<?= $k['id']; ?>" class="btn btn-warning">Edit</a>
                                        <form action="/survei/<?= $k['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                        <!-- <a href="/survei/delete/" class="btn btn-danger">Delete </a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                    <?= $pager->links('data', 'paginationnew'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

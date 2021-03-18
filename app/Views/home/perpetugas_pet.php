<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Per Survey</h1>
            <div class="container">
                <form action="/home/perpetugas" method="post">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Jenis Survey : </label>
                            <select class="form-control" id="jenis_survey" name="jenis_survey">
                                <option selected="0">Jenis Survey</option>
                                <?php foreach ($survey as $a) : ?>
                                    <option value="<?= $a['jenis_survey']; ?>"> <?= $a['jenis_survey']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>By : </label>
                            <select class="form-control" id="byapanih" name="byapanih" onchange="this.form.submit()">
                                <option disabled selected>Oleh</option>
                                <option value="responden">Responden</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="pencarian">
                    <form action="/home/searchingtabpetugas/<?= $jenissurvei; ?>" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" onchange="this.form.submit()">
                                    <i class="fas fa-search fa-sm">cari</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card shadow mb-4" width="full">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">By Petugas</h6>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0" overflow="auto" text-align="center">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Jenis survey</th>
                                    <th rowspan="2">Petugas</th>
                                    <th colspan="2">JANUARI</th>
                                    <th colspan="2">FEBRUARI</th>
                                    <th colspan="2">MARET</th>
                                    <th colspan="2">APRIL</th>
                                    <th colspan="2">MEI</th>
                                    <th colspan="2">JUNI</th>
                                    <th colspan="2">JULI</th>
                                    <th colspan="2">AGUSTUS</th>
                                    <th colspan="2">SEPTEMBER</th>
                                    <th colspan="2">OKTOBER</th>
                                    <th colspan="2">NOVEMBER</th>
                                    <th colspan="2">DESEMBER</th>
                                </tr>

                                <tr>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Realisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                $varpetugas = null;
                                $varrealisasi = null;
                                ?>

                                <?php foreach ($petugas as $k) : ?>
                                    <tr>
                                        <?php if ($k['nama_petugas'] != $varpetugas) : ?>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $k['jenis_survey']; ?></td>
                                            <td>
                                                <?= $k['nama_petugas']; ?>
                                                <?php $varpetugas = $k['nama_petugas']; ?></td>
                                            <td><?= $k['target']; ?></td>
                                            <td><?= $k['realisasi']; ?></td>
                                            <?php $varrealisasi = $k['realisasi']; ?>

                                        <?php elseif ($k['nama_petugas'] == $varpetugas && $k['realisasi'] != $varrealisasi) : ?>
                                            <td><?= $k['target']; ?></td>
                                            <td><?= $k['realisasi']; ?></td>

                                            <?php $varrealisasi = $k['realisasi']; ?>

                                        <?php endif; ?>





                                    </tr>




                                <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
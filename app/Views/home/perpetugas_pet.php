<div class="container-fluid">
    <div class="container">
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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">By Petugas</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis survey</th>
                                        <th scope="col">Petugas</th>
                                        <th scope="col">Target</th>
                                        <th scope="col">Realisasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($petugas as $k) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $k['jenis_survey']; ?></td>
                                            <td><?= $k['nama_petugas']; ?></td>
                                            <td><?= $k['target']; ?></td>
                                            <td><?= $k['realisasi']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
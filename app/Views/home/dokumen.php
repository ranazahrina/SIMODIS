<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Dokumen Masuk</h1>
                <form action="/dokumenmasuk/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Jenis Survey : </label>
                            <select class="form-control" id="jenis_survey" name="jenis_survey" placeholder="Waktu Survey">
                                <option disabled selected>Jenis survey</option>
                                <?php foreach ($jenis as $a) : ?>
                                    <option value="<?= $a['jenis_survey']; ?>"> <?= $a['jenis_survey']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Waktu Survey : </label>
                            <select class="form-control" id="category_name" name="category_name">
                                <option disabled selected>Bulan pelaksanaan</option>
                                <option value="Bulanan">Bulanan</option>
                                <option value="Triwulan">Triwulan</option>
                                <option value="Tahunan">Tahunan</option>
                            </select>
                        </div>
                    </div>
                </form>
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
                        <h6 class="m-0 font-weight-bold text-primary">Dokumen Masuk</h6>
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
                                        <th scope="col">Respoden</th>
                                        <th scope="col">Dokumen Masuk</th>
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
                                            <td>waktu pelaksanaan</td>
                                            <td><?= $k['responden']; ?></td>
                                            <td><input type="date" id="birthday" name="birthday"><?= $k['dokumen_masuk']; ?></td>
                                            <td>
                                                <form action="/survei/<?= $k['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
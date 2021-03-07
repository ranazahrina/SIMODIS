<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Dokumen Masuk</h1>
                <form action="/home/dokumen" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Jenis Survey : </label>
                            <select class="form-control" id="jenis_survey" name="jenis_survey" placeholder="Waktu Survey" onchange="this.form.submit()">
                                <option disabled selected>Jenis survey</option>
                                <?php foreach ($jenis as $a) : ?>
                                    <option value="<?= $a['jenis_survey']; ?>"> <?= $a['jenis_survey']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Waktu Survey : </label>
                            <select class="form-control" id="category_name" name="waktu_pelaksanaan" onchange="this.form.submit()">
                                <option disabled selected>Waktu pelaksanaan</option>
                                <option value="Bulanan">Bulanan</option>
                                <option value="Triwulan">Triwulan</option>
                                <option value="Tahunan">Tahunan</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="container">
                    <div class="pencarian">
                        <form action="/home/dokumen" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for Responden..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" onchange="this.form.submit()">
                                        <i class="fas fa-search fa-sm">Cari</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php if (session()->getFlashdata('berhasil')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('berhasil'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if (session()->getFlashdata('taksuk')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('taksuk'); ?>
                        </div>
                    <?php endif; ?>
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
                                        <th scope="col">Responden</th>
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
                                            <td><?= $k['waktu_pelaksanaan']; ?></td>
                                            <td><?= $k['responden']; ?></td>
                                            <td>
                                                <form action="/survei/taksuk/<?= $k['id']; ?>" method="post">

                                                    <input type="date" id="birthday" name="tanggal_masuk" onchange="this.form.submit() " value="<?= $k['dokumen_masuk']; ?>">

                                                </form>
                                            </td>
                                            <td>
                                                <form action="/survei/<?= $k['id']; ?>/doksuk" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?= $pager->links('data', 'paginationnew'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Pemasukan Data</h1>
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

            <table class="table">
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
                        <td> <a href="" class="btn btn-warning">Edit</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
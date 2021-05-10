<div class="container-fluid">
    <h1 class="mt-2">Tambah Jenis Survey</h1>
    <div id="content">
        <div class="container-jenis" style="margin-top: 30px">
            <div class="col-md-12">
                <?php if (session()->getFlashdata('Pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('Pesan'); ?>
                    </div>
            </div>
        <?php endif; ?>
        <th>
            <div class="form-group">
                <form class="user" method="post" action="<?= base_url('Home/tambahjenissurvey'); ?>">
                    <label for="text">Jenis Survey</label>
                    <input type="text" name="survey" class="form-control <?= ($validation->hasError('survey')) ? 'is-invalid' : ''; ?>" placeholder="Jenis Survey">
                    <div class="invalid-feedback">
                        <?= $validation->getError('survey'); ?>
                    </div>
            </div>

            <button type="submit" class="btn btn-md btn-success" onchange="this.form.submit()">Simpan</button>
            <a href="jenissurvey" class="btn btn-md btn-warning">reset</a>
            </form>
        </th>
        </div>
    </div>
</div>
</div>
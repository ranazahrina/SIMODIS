<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Edit Dokumen</h1>
                <div class="container-tambahdata">
                    <form action="/survei/update/<?= $data['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Jenis Survey</label>
                                <select class="form-control" id="jenis_survey" name="jenis_survey" placeholder="<?= $data['jenis_survey']; ?>">
                                    <option disabled selected="<?= $data['jenis_survey']; ?>"> <?= $data['jenis_survey']; ?></option>
                                    <?php foreach ($jenis as $a) : ?>
                                        <option value="<?= $a['jenis_survey']; ?>"> <?= $a['jenis_survey']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Waktu Survey</label>
                                <select class="form-control" id="waktu_s" name="waktu_s" placeholder="Waktu Survey">
                                    <option disabled selected="<?= $data['waktu_survey']; ?>"><?= $data['waktu_survey']; ?></option>
                                    <option value="Bulanan">Bulanan</option>
                                    <option value="Triwulan">Triwulan</option>
                                    <option value="Tahunan">Tahunan</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Dokumen Masuk</label>
                                <input type="date" id="birthday" name="birthday">" <?= $data['dokumen_masuk']; ?>">
                            </div>
                            <div class="buttonsubmit">
                                <button type="submit" name="submit" class="btn btn-primary btn-block" onchange="this.form.submit()"> submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php if (session()->getFlashdata('berhasil')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('berhasil'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
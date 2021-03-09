<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Edit data</h1>
                <div class="container-tambahdata">
                    <form action="/survei/update/<?= $data['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Jenis Survey</label>
                                <select class="form-control" id="jenis_survey" name="jenis_survey" placeholder="<?= $data['jenis_survey']; ?>">
                                    <option selected="<?= $data['jenis_survey']; ?>"> <?= $data['jenis_survey']; ?></option>

                                    <?php foreach ($jenis as $a) : ?>

                                        <option value="<?= $a['jenis_survey']; ?>"> <?= $a['jenis_survey']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label>Waktu Survey</label>
                                <select class="form-control" id="waktu_s" name="waktu_s" placeholder="Waktu Survey">
                                    <option selected="<?= $data['waktu_survey']; ?>"><?= $data['waktu_survey']; ?></option>
                                    <option value="Bulanan">Bulanan</option>
                                    <option value="Triwulan">Triwulan</option>
                                    <option value="Tahunan">Tahunan</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Pelaksanaan</label>
                                <select class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder="Waktu Pelaksanaan">
                                    <option selected="<?= $data['waktu_pelaksanaan']; ?>"><?= $data['waktu_pelaksanaan']; ?></option>
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
                            </div>
                            <div class="col-md-2">
                                <label>Petugas</label>
                                <input type="text" name="nama_petugas" value="<?= $data['nama_petugas']; ?>" class="form-control" placeholder=" <?= $data['nama_petugas']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label>Responden</label>
                                <input type="text" value=" <?= $data['responden']; ?>" name="responden" class="form-control" placeholder="  <?= $data['responden']; ?>">
                            </div>
                            <div class="buttonsubmit">
                                <button type="submit" name="submit" class="btn btn-primary btn-block" onchange="this.form.submit()"> submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
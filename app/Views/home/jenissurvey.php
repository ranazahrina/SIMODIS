<div class="container-fluid">
    <h1 class="mt-2">Input Jenis Survey</h1>
    <div id="content">
        <div class="container-jenis" style="margin-top: 30px">
            <div class="col-md-12">
                <th>
                    <div class="form-group">
                        <label for="text">Jenis Survey</label>
                        <input type="text" name="jenissurvey" class="form-control" placeholder="Jenis Survey">
                    </div>

                    <?php date_default_timezone_set("Asia/Jakarta"); ?>
                    <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= date("Y-m-d h:i:sa") ?>">

                    <button type="submit" class="btn btn-md btn-success">Simpan</button>
                    <button type="reset" class="btn btn-md btn-warning">reset</button>
                </th>
            </div>
        </div>
    </div>
</div>

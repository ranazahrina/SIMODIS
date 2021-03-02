<div class="container-fluid">
    <h1 class="mt-2">Input Jenis Survey</h1>
    <div id="content">
        <div class="container-jenis" style="margin-top: 30px">
            <div class="col-md-12">
              <?php if (session()->get('success')) : ?>
                  <div class="alert alert-success" role="alert">
                      <?= session()->get('success') ?>
                  </div>
              <?php endif; ?>
                <th>
                    <div class="form-group">
                      <form class="user" method="post" action="<?= base_url('Home/jenissurvey'); ?>">
                        <label for="text">Jenis Survey</label>
                        <input type="text" name="survey" class="form-control" placeholder="Jenis Survey" value="<?= set_value('survey'); ?>">
                    </div>

                    <?php date_default_timezone_set("Asia/Jakarta"); ?>
                    <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= date("Y-m-d h:i:sa") ?>">

                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-md btn-success">Simpan</button>
                    <button type="reset" class="btn btn-md btn-warning">reset</button>
                  </form>
                </th>
            </div>
        </div>
    </div>
</div>

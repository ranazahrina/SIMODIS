<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Per Survey</h1>
                <div class="container-tambahdata">
                    <form action="/home/perpetugas" method="post">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Jenis Survey : </label>
                                <select class="form-control" id="jenis_survey" name="jenis_survey">
                                    <option disabled selected="0">Jenis Survey</option>
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

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">By Petugas</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
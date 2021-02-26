<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">DOKUMEN</h1>
                <div class="container-tambahdata">
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
                        <label class="col-md-1 col-form-label">Waktu Survey</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <select class="form-control" id="category_name" name="category_name">
                                    <option selected="0">Waktu Survey</option>
                                </select>
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
                        <label class="col-md-1 col-form-label">Dokumen Masuk</label>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <select class="form-control" id="category_name" name="category_name">
                                    <option selected="0">Dokumen Masuk</option>
                                </select>
                            </div>
                        </th>
                        <th>
                            <div class="col-md-2 col-form-label">
                                <a herf="" class="btn btn-success">Simpan</a>
                            </div>
                        </th>
                    </div>
                </div>
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
                                        <th scope="col">Dokumen Masuk</th>
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
                                        <td> <a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Delete </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
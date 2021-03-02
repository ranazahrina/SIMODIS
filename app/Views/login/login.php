<div class="container">
    <div class="d-flex justify-content-center">
        <div class="container-login">
            <img class="img-profile rounded-circle mx-auto d-block" style=" height:85px;" src="<?php echo base_url(); ?>/assets/img/logosimodis.jpg">
            <h3 class=" text-center mb-4">SIMODIS</h3>
            <hr>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>
            <form method="post" action="Login">
                <div class="form-group">
                    <input autofocus type="input" class="form-control" id="uname" name="uname" aria-describedby="emailHelp" placeholder="Username" value="<?= set_value('uname') ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" value="<?= set_value('password') ?>">
                </div>
                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <a href="home/home" class="btn btn-primary btn-user btn-block">
                    Login
                </a>
            </form>
        </div>
    </div>
</div>

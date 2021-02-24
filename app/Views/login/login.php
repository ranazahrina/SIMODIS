<div class="container">
    <div class="d-flex justify-content-center">
        <div class="container-login">
            <img class="img-profile rounded-circle mx-auto d-block" style=" height:85px;" src="<?php echo base_url(); ?>/assets/img/logosimodis.jpg">
            <h3 class=" text-center mb-4">SIMODIS</h3>
            <hr>
            <form method="post" action="Login">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                </div>
                <a href="home/home" class="btn btn-primary btn-user btn-block">
                    Login
                </a>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="register.html">Create an Account!</a>
            </div>
            </hr>
        </div>
    </div>
</div>
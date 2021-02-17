<div class="container">
	<div class="d-flex justify-content-center">
		<div class="container-login">
			<?= $this->session->flashdata('message'); ?>
			<img class="img-profile rounded-circle mx-auto d-block" style=" height:85px;" src="<?php echo base_url(); ?>assets/images/Logosimodis.jpg">
			<h3 class="text-center mb-4">SIMODIS</h3>
			<hr>
			<form method="post" action="Login">
				<div class="form-group">
					<!-- <label for="uname">Username :</label> -->
					<input autofocus type="input" class="form-control" id="uname" name="uname" aria-describedby="emailHelp" placeholder="Username" value="<?= set_value('uname') ?>">
					<?= form_error('uname', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<!-- <label for="exampleInputPassword1">Password :</label> -->
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
				<button type="submit" class="btn btn-warning mx-auto d-block mt-4">Login</button>
			</form>
		</div>
	</div>
</div>

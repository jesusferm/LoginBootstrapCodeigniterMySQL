<?php $this->load->view('common/navBar'); ?>
<div class="container">
	<div class="login-form">
		<form class="form" role="form" method="post" enctype="multipart/form-data" id="form-login-user" name="form-login-user" accept-charset="utf-8" action="<?php echo base_url('user/login_user');?>">
			<fieldset>
				<legend class="text-center mb-4"> Inicio de Sesión </legend>
				<div class="md-12">
				<?php
					$success_msg = $this->session->flashdata('success_msg');
					$error_msg = $this->session->flashdata('error_msg');
					if($success_msg){
						echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Correcto!</strong> '.$success_msg.' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
					}
					if($error_msg){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> '.$error_msg.' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
					}
				?>
				</div>
				<div class="form-group">
					<label class="sr-only" for="username"> Correo electrónico</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<span><i class="fas fa-user"></i></span>
							</div>
						</div>
						<input type="email" class="form-control" name="txt-email" id="txt-email" placeholder="Email" required="">
					</div>
				</div>

				<div class="form-group">
					<label class="sr-only" for="password"> Contraseña </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"> 
								<span><i class="fas fa-key"></i></span>
							</div>
						</div>
						<input type="password" class="form-control" name="txt-password" id="txt-password" placeholder="Contraseña" required>
					</div>
				</div>

				<button type="submit" class="btn btn-primary btn-block" name="btn-login">
					<span><i class="fa fa-arrow-circle-right"></i> </span> Iniciar sesión 
				</button>

				<div class="d-flex justify-content-between rememberme">
					<div class="custom-control custom-checkbox ">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label" for="rememberme"> Recordar sesión </label>
					</div>

					<a href="#"> Olvidaste contraseña? </a>
				</div>
			</fieldset>
		</form>

		<div class="msg-new-account">
			<hr>
			<span> No tienes una cuenta? <a href="<?= base_url();?>registration"> Registrarse </a></span>
		</div>
	</div>
</div>

<script type="text/javascript">
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
			});
		}, false);
	})();
</script>
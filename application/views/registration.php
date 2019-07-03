<?php $this->load->view('common/navBar'); ?>
<div class="container">
	<div class="login-form">
		<form class="form" role="form" method="post" enctype="multipart/form-data" id="form-register-user" name="form-register-user" accept-charset="utf-8" action="<?php echo base_url('user/register_user');?>">
			<fieldset>
				<legend class="text-center mb-4"> Crear Cuenta </legend>
				<div class="md-12">
					<?php
					$error_msg=$this->session->flashdata('error_msg');
					if($error_msg){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> '.$error_msg.' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
					}
					?>
				</div>
				<div class="form-group">
					<label class="sr-only" for="txt-nom-user"> Nombre Usuario</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<span><i class="fas fa-user"></i></span>
							</div>
						</div>
						<input type="text" class="form-control" id="txt-nom-user" name="txt-nom-user" placeholder="Nombre Usuario" required>
					</div>
				</div>
				<div class="form-group">
					<label class="sr-only" for="txt-email"> Correo electrónico </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<span><i class="fas fa-user"></i></span>
							</div>
						</div>
						<input type="email" class="form-control" id="txt-email" name="txt-email" placeholder="Correo electrónico" required>
					</div>
				</div>

				<div class="form-group">
					<label class="sr-only" for="txt-password"> Contraseña </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"> 
								<span><i class="fas fa-key"></i></span>
							</div>
						</div>
						<input type="password" class="form-control" id="txt-password" name="txt-password" placeholder="Contraseña" required>
					</div>
					<small id="msgPassword" class="form-text text-muted"> 
						Usa al menos una letra, un número y 6 caracteres como mínimo.
					</small>
				</div>
				<div class="form-group">
					<label class="sr-only" for="txt-confirm-password"> Confirmar contraseña </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"> 
								<span><i class="fas fa-key"></i></span>
							</div>
						</div>
						<input type="password" class="form-control" id="txt-confirm-password" name="txt-confirm-password" placeholder="Confirmar contraseña">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block"> 
					<i class="fa fa-check-square"></i>
					Registrarse 
				</button>
			</fieldset>
		</form>

		<div class="msg-privacy">
			<span> Al hacer clic en botón de registro, tu estás aceptando nuestros
				<a href="#">Términos y condiciones</a>, y
				<a href="#">Políticas de Privacidad</a>.
			</span>
		</div>
		<div class="msg-login">
			<hr>
			<span> Ya tienes una cuenta? <a href="<?= base_url() ?>"> Iniciar Sesión </a></span>
		</div>
	</div>
</div>

<script>
	var password = document.getElementById("txt-password");
	var confirm_password = document.getElementById("txt-confirm-password");
	function validatePassword(){
		if(password.value != confirm_password.value){
			confirm_password.setCustomValidity("Contraseñas no coinciden.");
		}else{
			confirm_password.setCustomValidity('');
		}
	}
	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
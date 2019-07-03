<?php
$id_user = $this->session->userdata('id_user_session');
if(!$id_user){
	$this->session->set_flashdata('error_msg', 'Por favor inicia sesión.');
	redirect('login');
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
	<div class="container">
		<a class="navbar-brand" href="<?=base_url();?>dashboard"> LiNuXiToS </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?=base_url();?>dashboard">Inicio <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			 <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user"></i>
						<strong><?php echo $this->session->userdata('nom_user_session');?></strong>
						<span class="glyphicon glyphicon-chevron-down"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="navbar-login">
								<div class="row">
									<div class="col-lg-4">
										<p class="text-center">
											<i class="fa fa-user fa-5x"></i>
										</p>
									</div>
									<div class="col-lg-8">
										<p class="text-left">
											<strong>
												<?php echo $this->session->userdata('nickname_session');?>
											</strong>
										</p>
										<p class="text-left small">
											<?php echo $this->session->userdata('email_session');?>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<div class="navbar-login navbar-login-session">
								<div class="row">
									<div class="col-lg-12">
										<p>
											<a href="<?php echo base_url('user/user_logout');?>" class="btn btn-danger btn-block">Cerrar Sesion</a>
										</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>


<div class="container">
	<div class="row">
		<div class="md-12">
			<table class="table table-bordered table-striped">
				<tr>
					<th colspan="2">
						<h4 class="text-center">
							Información de usuario de inicio de sesión
						</h3>
					</th>
				</tr>
				<tr>
					<td>Id de usuario</td>
					<td><?php echo $this->session->userdata('id_user_session');?></td>
				</tr>
				<tr>
					<td>Nombre de usuario</td>
					<td><?php echo $this->session->userdata('nom_user_session');?></td>
				</tr>
				<tr>
					<td>Email del usuario</td>
					<td><?php echo $this->session->userdata('email_session');?></td>
				</tr>
				<tr>
					<td>Contraseña encriptada</td>
					<td><?php echo $this->session->userdata('password_session');?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
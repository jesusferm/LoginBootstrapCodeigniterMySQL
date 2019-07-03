<?php $this->load->view('common/navBar'); ?>
<div class="container" style="margin-top: 10px;">
	<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
		<div class="col-md-6 px-0">
			<h1 class="display-6">
				Ejemplo de Codeigniter y Bootstrap.
			</h1>
			<p class="lead my-3">
				Éste es un ejemplo del framework Codeigniter y bootstrap 4.0.0. Éste ejemplo es un inicio de sesión con base de datos. Se usó hash para la contraseña y validación de usuarios.
			</p>
			<p class="lead mb-0">
				<a href="http://getbootstrap.com/" target="_blank" class="text-white ">Codeigniter...</a>
				<a href="https://www.codeigniter.com/" target="_blank" class="text-white ">Bootstrap...</a>
			</p>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-md-6">
			<div class="card flex-md-row mb-4 box-shadow h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
					<strong class="d-inline-block mb-2 text-primary">Blog</strong>
					<h3 class="mb-0">
						<a class="text-dark" href="http://linuxgx.blogspot.mx/" target="_blank">Codeigniter y Bootstrap</a>
					</h3>
					<div class="mb-1 text-muted">Abr 3</div>
					<p class="card-text mb-auto">
						Puedes encontrar este código en mi blog linuxgx.blogspot.com
					</p>
					<a href="https://linuxgx.blogspot.mx/2018/04/login-bootstrap-codeigniter-mysql.html" target="_blank">Continuar leyendo</a>
				</div>
				<img class="card-img-right flex-auto d-none d-md-block" alt="Blog" style="width: 200px; height: 250px;" src="<?=base_url();?>assets/images/blog/blog1.png" data-holder-rendered="true">
			</div>
		</div>
		<div class="col-md-6">
			<div class="card flex-md-row mb-4 box-shadow h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
					<strong class="d-inline-block mb-2 text-success">Github</strong>
					<h3 class="mb-0">
						<a class="text-dark" href="https://github.com/jesusferm" target="_blank">CI Login Codeigniter & Bootstrap 4.0.0</a>
					</h3>
					<div class="mb-1 text-muted">Abr 03</div>
					<p class="card-text mb-auto">
						El código de este ejemplo lo pueden encontrar en mi sitio de github.
					</p>
					<a href="https://github.com/jesusferm/LoginBootstrapCodeigniterMySQL" target="_blank">Continuar leyendo</a>
				</div>
				<img class="card-img-right flex-auto d-none d-md-block" alt="Github" style="width: 200px; height: 250px;" src="<?=base_url();?>assets/images/blog/blog2.png" data-holder-rendered="true">
			</div>
		</div>
	</div>
</div>

<footer class="text-muted">
	<div class="container">
		<p class="float-right">
			<a href="#"><i class="fas fa-angle-up fa-3x"></i></a>
		</p>
		<p>
			Ejemplo de prueba © LiNuXiToS 2018
		</p>
		<p>
			Quieres saber sobre bootstrap? <a href="http://getbootstrap.com/" target="_blank">Visita su página oficial</a> e inicia tus propios ejemplos.
		</p>
	</div>
</footer>
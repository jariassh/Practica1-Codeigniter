<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= base_url() ?>"> <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarDefault">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>/somos">Somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>/estudiantes">Estudiantes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>/matriculas">Matriculas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>/eventos">Eventos</a>
				</li>
			</ul>

			<a href="<?= base_url() ?>/backoffice" class="btn btn-outline-success mr-4">Iniciar sesión</a>

		</div>
	</div>
</nav>
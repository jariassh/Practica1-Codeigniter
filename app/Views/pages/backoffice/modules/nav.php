<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
		<div class="col-auto">
			<a class="navbar-brand" href="#">Backoffice</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item me-5">
					<span class="navbar-text"><strong>Nombre de usuario:</strong> <?= $user['name'] ?></span>
				</li>
				<li class="nav-item me-5">
					<span class="navbar-text"><strong>Rol: </strong> <?= $user['rol'] ?></span>
				</li>
			</ul>
			<a href="<?= base_url() ?>" class="btn btn-warning d-flex ms-3">Cerrar Sesión</a>
		</div>
	</div>
</nav>
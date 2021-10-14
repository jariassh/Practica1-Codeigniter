<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Sistema Escolar</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link rel="stylesheet" href="<?php base_url(); ?>public/css/custom_styles.css">

	<!--CDN Boostrap 5 latest version -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body class="container-fluid">

	<header class="bg-dark">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-3 pr-3">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Somos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Estudiantes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Matriculas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Eventos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Iniciar sesión</a>
							</li>
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Buscar</button>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<section>
		<?php
		// Cuerpo
		include "public/modules/home.container.php";
		?>
	</section>


	<footer class="mt-2 bg-dark d-flex justify-content-center pt-3">
		<div>
			<p>Copyright &copy; <?= $year = Date("Y"); ?> - Jonathan Arias| All Rights Reserved.</p>
		</div>
	</footer>

</body>

</html>
<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Nueva sucursal</h2>
		<div class="right-wrapper text-end">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="bx bx-home-alt"></i>
					</a>
				</li>
				<li><span>Sistema</span></li>
				<li><span class="me-4">Sucursal</span></li>
			</ol>
		</div>
	</header>
	<!-- start: page -->

	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3>Registrar nueva sucursal</h3>
			</div>
			<div class="card-body">
				<form action="<?= url_controllers() ?>sucursales.store.php" method="post">

					<div class="row">
						<div class="col-sm-6">
							<label>Nombre de la sucursal</label>
							<input class="form-control" name="nombre_sucursal" type="text" placeholder="Ingrese nombre de sucursal" required>
						</div>
						<div class="col-sm-6">
							<label>Direccion</label>
							<input class="form-control" name="direccion" type="text" placeholder="Ingrese la direccion" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>Municipio</label>
							<input class="form-control" name="municipio" type="text" placeholder="Municipio" required>
						</div>
						<div class="col-sm-4">
							<label>Estado</label>
							<input class="form-control" name="estado" type="text" placeholder="Estado" required>
						</div>
						<div class="col-sm-4">
							<label>C.P</label>
							<input name="cp" class="form-control" type="number" placeholder="cp	" required>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-sm-4">
							<label>Status</label>
							<select class="form-select" aria-label="Default select example" required name="status">
								<option selected>seleccionar</option>
								<option value="1">ACTIVO</option>
								<option value="2">INACTIVO</option>
							</select>
						</div> -->
						<div class="col-sm-4">
						<button style="margin-top: 1.5em;" class="btn btn-success " type="submit">Guardar</button>

						</div>
						<div class="col-sm-4">

						</div>
					</div>
				</form>
			</div>
		</div>


	</div>



	<?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>
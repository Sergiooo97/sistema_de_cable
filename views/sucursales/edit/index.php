<?php 
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'sistema'.DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php'); ?>
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
		<?php
		$sql = "SELECT * from tb_sucursales WHERE id=$id";
		$result = mysqli_query($conexion, $sql);
		while ($data = mysqli_fetch_array($result)) {
		?>

			<form action="<?= url_controllers() ?>sucursales.update.php?id=<?php echo $data['id'] ?>" method="post">

				<div class="row">
					<div class="col-sm-6">
						<label>Nombre de la sucursal</label>
						<input class="form-control" name="nombre_sucursal" value="<?php echo $data['Nombre_sucursal'] ?>" type="text" placeholder="Ingrese nombre de sucursal">
					</div>
					<div class="col-sm-6">
						<label>Direccion</label>
						<input class="form-control" name="direccion" value="<?php echo $data['direccion'] ?>" type="text" placeholder="Ingrese la direccion">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Municipio</label>
						<input class="form-control" name="municipio" value="<?php echo $data['municipio'] ?>" type="text" placeholder="Municipio">
					</div>
					<div class="col-sm-4">
						<label>Estado</label>
						<input class="form-control" name="estado" value="<?php echo $data['estado'] ?>" type="text" placeholder="Estado">
					</div>
					<div class="col-sm-4">
						<label>C.P</label>
						<input name="cp" class="form-control" value="<?php echo $data['cp'] ?>" type="text" placeholder="cp	">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Status</label>
						<select class="form-select" aria-label="Default select example" required name="status">
							<option value="<?php echo $data['status'] ?>" selected><?php echo $data['status'] ?></option>
							<option value="ACTIVO">ACTIVO</option>
							<option value="INACTIVO">INACTIVO</option>
						</select>
					</div>
					<div class="col-sm-4">

					</div>
					<div class="col-sm-4">
						<button style="margin-top: 1.5em;" class="btn btn-success pull-right" type="submit">Guardar</button>

					</div>
				</div>
			</form>
		<?php
		}
		?>

	</div>



	<?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>
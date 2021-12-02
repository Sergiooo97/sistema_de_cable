<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Nuevo cliente</h2>
		<div class="right-wrapper text-end">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="bx bx-home-alt"></i>
					</a>
				</li>
				<li><span>Sistema</span></li>
				<li><span class="me-4">Clientes</span></li>
			</ol>
		</div>
	</header>
	<!-- start: page -->

	<div class="container justify-content-center">
		<div class="card">
			<div class="card-header">
				<h3>Registrar cliente</h3>
			</div>
			<div class="card-body">
				<form action="<?= url_controllers() ?>clientes.store.php" method="POST">

					<div class="row">
						<div class="col-md-6">
							<label>Nombres</label>
							<input class="form-control" name="nombres_cliente" type="text" placeholder="Ingrese nombre del cliente" required>
						</div>
						<div class="col-md-3">
							<label>Apellido Paterno</label>
							<input class="form-control" name="apellido_p_cliente" type="text" placeholder="Ingrese apellido paterno del cliente" required>
						</div>
						<div class="col-md-3">
							<label>Apellido Materno</label>
							<input class="form-control" name="apellido_m_cliente" type="text" placeholder="Ingrese apellido materno del cliente" required>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>CURP</label>
							<input class="form-control" name="curp_cliente" type="text" placeholder="Ingrese curp del cliente" required>

						</div>
						<div class="col-sm-6">
							<label>Direccion</label>
							<input class="form-control" name="direccion_cliente" type="text" placeholder="Ingrese la direccion" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>Municipio</label>
							<input class="form-control" name="municipio_cliente" type="text" placeholder="Municipio" required>
						</div>
						<div class="col-sm-4">
							<label>Estado</label>
							<input class="form-control" name="estado_cliente" type="text" placeholder="Estado" required>
						</div>
						<div class="col-sm-4">
							<label>C.P</label>
							<input name="cp_cliente" class="form-control" type="text" placeholder="cp	" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>Sucursal</label>
							<select class="form-select" aria-label="Default select example" required name="sucursal_id">
								<option selected>seleccionar</option>

								<?php
								$sql = "SELECT * from tb_sucursales";
								$resultS = mysqli_query($conexion, $sql);
								while ($data = mysqli_fetch_array($resultS)) {
								?>
									<option value="1"><?php echo $data['Nombre_sucursal'] ?></option>

								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
					</div>
			</div>
			<div class="card-footer justify-content-center">
				<button style="margin-top: 1.5em;" class="btn btn-success 	" type="submit">Guardar</button>
			</div>
			</form>
		</div>
	</div>
	</div>



	<?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>
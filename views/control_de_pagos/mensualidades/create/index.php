<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Registrar mensualidad</h2>
		<div class="right-wrapper text-end">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="bx bx-home-alt"></i>
					</a>
				</li>
				<li><span>Sistema</span></li>
				<li><span class="me-4">Mensualidades</span></li>
			</ol>
		</div>
	</header>
	<!-- start: page -->

	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3>Registrar mensualidad</h3>
			</div>
			<div class="card-body">
				<form action="<?= url_controllers() ?>mensualidad.store.php" method="POST">

					<div class="row">
						<div class="col-md-6">
							<label>Cliente id</label>
							<input class="form-control" name="id_cliente" type="text" placeholder="Ingrese id del cliente" required>
						</div>
						<div class="col-md-3">
							<label>Fecha</label>
							<input class="form-control" name="ultimo_mes_pago" type="date" required>
						</div>
						<div class="col-md-3">
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

					<div class="row">
						<div class="col-sm-6">
							<label>importe</label>
							<input class="form-control" name="importe" type="text" placeholder="Ingrese curp del cliente" required>

						</div>

					</div>

					<div class="col-sm-4">
						<button style="margin-top: 1.5em;" class="btn btn-success pull-right" type="submit">Guardar</button>

					</div>
				</form>
			</div>
		</div>


	</div>

	</div>



	<?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>
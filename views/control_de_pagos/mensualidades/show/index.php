<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'consultas.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');

?>
<!-- end: sidebar -->
<section role="main" class="content-body">
    <header class="page-header">
        <?php
        $resultS = mysqli_query($conexion, $cliente);
        while ($data = mysqli_fetch_array($resultS)) {
        ?>
            <h2>Mensualidades de <?php echo $data['nombres_cliente'] ?></h2>
        <?php
        }
        ?>
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
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h3>Agregar mensualidad</h3>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <form action="<?= url_controllers() ?>mensualidad.store.php" method="POST">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Cliente id</label>
                                        <input class="form-control" value="<?php echo $id ?>" name="cliente_id" type="text" placeholder="Ingrese id del cliente" required readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Sucursal</label>
                                        <select class="form-select" aria-label="Default select example" required name="sucursal_id">
                                            <?php
                                            $resultS = mysqli_query($conexion, $cliente);
                                            while ($data = mysqli_fetch_array($resultS)) {
                                            ?>
                                                <option value="<?php echo $data['sucursal_id'] ?>"><?php echo $data['sucursal'] ?></option>
                                            <?php
                                            }
                                            ?>

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
                                    <div class="col-md-6">
                                        <label>Fecha</label>
                                        <?php $fcha = date("Y-m-d"); ?>
                                        <input type="date" class="form-control" value="<?php echo $fcha; ?>" name="fecha_pago">
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

        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3>Mensualidades pagadas</h3>

                </div>
                <div class="card-body">
                    <div style=" overflow-x: auto;" class="container">
                        <table class="table display table-responsive table-hover table-bordered">
                            <thead text="primary">
                                <th>Fecha ultimo mes pagado</th>
                                <th>Importe</th>
                                <th>No. Nota</th>
                            </thead>
                            <tbody>
                                <?php
                                $resultS = mysqli_query($conexion, $mensualidades2);
                                while ($data = mysqli_fetch_array($resultS)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['fecha'] ?></td>
                                        <td><?php echo $data['importe'] ?></td>
                                        <td><?php echo $data['id'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script>
        $(document).ready(function() {


            $('.register_delete_btn').click(function(e) {
                e.preventDefault();
                var deleteid = $(this).closest("tr").find('.delete_id_value').val();
                Swal.fire({
                    title: '¿Está seguro de eliminar este usuario?',
                    text: "Estás a tiempo de cancelar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "<?= url_controllers() ?>clientes.delete.php?id=" + deleteid
                        if (form.submit()) {
                            Swal.fire(
                                'Ahora te mandaré a la lista :).',
                                'success'
                            )
                        }

                    }
                })
            });


        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>
<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'consultas.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');

?>
<!-- end: sidebar -->
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Lista de clientes</h2>
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

    <div style=" overflow-x: auto;" class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="pull-left">Mensualidades</h3>
        <a style="margin-bottom: 1em;" href="<?= url_views() ?>control_de_pagos/mensualidades/create" class="btn btn-success pull-right"><i class="fas fa-edit"></i>Registrar mensualidad</a>

        </div>
        <div class="card-body">
        <table class="table display table-responsive table-hover table-bordered">
            <thead text="primary">
                <th>Nombre</th>
                <th>sucursal</th>
                <th>Fecha ultimo mes pagado</th>
                <th>Importe</th>
                <th>No. Nota</th>
                <th>Pagar mensualidad</th>

            </thead>
            <tbody>

                <?php
                $resultS = mysqli_query($conexion, $mensualidades);
                while ($data = mysqli_fetch_array($resultS)) {
                ?>

                    <tr>
                        <td><?php echo $data['nombres_cliente'] ?></td>
                        <td><?php echo $data['Nombre_sucursal'] ?></td>

                        <td><?php echo $data['ultimo_pago'] ?></td>
                        <td> $ <?php echo $data['importe'] ?></td>
                        <td><?php echo $data['id'] ?></td>
                        <td><a href="<?= url_views() ?>control_de_pagos/mensualidades/show?id=<?php echo $data['id'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                    </tr>
                     
                <?php
                }
                ?>

            </tbody>
        </table>
        </div>
    </div>
        
    </div>


    <script>
     
     $(document).ready(function(){


        $('.register_delete_btn').click(function(e){
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
                                    window.location.href = "<?= url_controllers() ?>clientes.delete.php?id="+deleteid
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
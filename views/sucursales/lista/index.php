<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Lista de sucursales</h2>
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

    <div style=" overflow-x: auto;" class="container">
        <table class="table display table-responsive table-hover table-bordered">
            <thead text="primary">
                <th>Nombre de sucursal</th>
                <th>Direccion</th>
                <th>Municipio</th>
                <th>Estado</th>
                <th>C.P</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * from tb_sucursales";
                $resultS = mysqli_query($conexion, $sql);
                while ($data = mysqli_fetch_array($resultS)) {
                ?>

                    <tr>
                        <td><?php echo $data['Nombre_sucursal'] ?></td>
                        <td><?php echo $data['direccion'] ?></td>
                        <td><?php echo $data['municipio'] ?></td>
                        <td><?php echo $data['estado'] ?></td>
                        <td><?php echo $data['cp'] ?></td>
                        <td><a href="<?= url_views() ?>sucursales/edit?id=<?php echo $data['id'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a></td>


                        <td>

                        <input type="hidden" class="delete_id_value" value="<?php echo $data['id'] ?>" hidden>

                            <button type="submit" class="btn btn-danger register_delete_btn" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </td>
                      



                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>





    <script>
     
     $(document).ready(function(){


        $('.register_delete_btn').click(function(e){
        e.preventDefault();
        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
        Swal.fire({
                                title: '¿Está seguro de eliminar esta sucursal?',
                                text: "Estás a tiempo de cancelar!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, eliminar!'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href = "<?= url_controllers() ?>sucursales.delete.php?id="+deleteid
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

    <?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>
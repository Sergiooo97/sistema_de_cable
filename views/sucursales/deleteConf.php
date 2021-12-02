<?php
 define('_RAIZ', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'sistema'.DIRECTORY_SEPARATOR);
 require_once(_RAIZ.'s_funciones'.DIRECTORY_SEPARATOR.'sistema.php');
 require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php'); 

                                                $sql = "SELECT * from tb_sucursales WHERE id=$id";
                                                $result = mysqli_query($conexion, $sql);
                                                while ($data = mysqli_fetch_array($result)) {

                                                ?>
    <div class="modal-body">
        
        <h5 class="text-center">¿Estas seguro de eliminar la sucursal
        <?php echo $data['Nombre_sucursal'] ?> ?</h5>
    </div>
    <div class="modal-footer">
    <a href="<?=url_views()?>sucursales/lista/" class="btn btn-secondary">Cancelar</a>

        <!-- <button type="button" class="btn btn-secondary"
            data-dismiss="modal">Cancel</button> -->
        <a href="<?=url_controllers()?>sucursales.delete.php?id=<?php echo $data['id'] ?> " class="btn btn-danger">Si, eliminar registro</a>
    </div>
<?php
                                                }
                                                ?>

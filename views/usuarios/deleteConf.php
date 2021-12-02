<?php 
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'sistema'.DIRECTORY_SEPARATOR);
require_once(_RAIZ.'s_funciones'.DIRECTORY_SEPARATOR.'sistema.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php'); 

                                                $sql = "SELECT * from tb_usuarios WHERE id=$id";
                                                $result = mysqli_query($conexion, $sql);
                                                while ($data = mysqli_fetch_array($result)) {

                                                ?>
    <div class="modal-body">
        
        <h5 class="text-center">¿Estas seguro de eliminar el usuario
        <?php echo $data['nombre'] ?> ?</h5>
    </div>
    <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary"
            data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-default cerrarModal">Cerrar</button> -->
            <a href="<?=url_views()?>usuarios/lista/" class="btn btn-secondary">Cancelar</a>

        <a href="<?=url_controllers()?>usuarios.delete.php?id=<?php echo $data['id'] ?> " class="btn btn-danger">Si, eliminar registro</a>
    </div>
   
<?php
                                                }
                                                ?>

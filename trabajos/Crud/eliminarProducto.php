<!DOCTYPE html>

        <?php
            include 'conexion.php';
            
            $id_prod = $_GET['idP'];
            
            $eliminarImagen ="DELETE FROM imagen WHERE id_producto_fk = $id_prod";
            $resultadoImagen = mysqli_query($conn,$eliminarImagen);
            
            $eliminarProducto = "DELETE FROM producto WHERE id_producto = $id_prod";
            $resultadoProducto = mysqli_query($conn,$eliminarProducto);
            
            echo"<script>alert('Registro Eliminado Satisfactoriamente'); "
            . "window.location.href='consultarProducto.php';</script>";
        ?>
   

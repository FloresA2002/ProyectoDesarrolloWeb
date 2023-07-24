<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso de Producto</title>
        <link href="estilos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action ="" method="POST" enctype="multipart/form-data">
        <div style="width: 900px; margin-left:500px">
            <br><h4 style="text-align: center">Ingrese de Productos</h4><br>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Producto</label>
                            <input type="text" name="producto" class="form-control" />

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Color</label>
                            <input type="text" name="color" class="form-control" />

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Precio</label>
                            <input type="text" name="precio" class="form-control" />

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" />

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
<!--                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Nombre Imagen</label>
                            <input type="text" name="imagen" class="form-control" />

                        </div>
                    </div>-->
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Imagen</label>
                            <input type="file" class="form-control" id="carga_archivo" name="imagen"/>

                        </div>
                    </div>
                </div>
                <button type="submit" name="guardar" class="btn btn-primary btn-block mb-4">Ingresar</button>
                <a href="consultarProducto.php" class="btn btn-primary btn-block mb-4">Regresar</a>
                
        </div>
    </form>
</body>
</html>


<?php
if(isset($_POST['guardar'])){
    include "conexion.php";
    $producto = $_POST['producto'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    
    $insertarProd ="INSERT INTO producto (nombre,color,precio,stock) "
            . "VALUES ('$producto','$color','$precio','$stock')";
    $resultadoProducto = mysqli_query($conn,$insertarProd);
    
    //recuperar el ultimo id-pk ingresada en producto para poder ingresar la fk en imagen
    $idproducto=mysqli_insert_id($conn);
    
    $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $nombre_img = $_FILES['imagen']['name'];
    
    $insertarImagen ="INSERT INTO imagen (nombre_imagen,figura,id_producto_fk) "
            . "VALUES('$nombre_img','$foto','$idproducto')";
    $resultadoImagen = mysqli_query($conn,$insertarImagen);
    
    echo "<script>alert('Producto Ingresado');window.location.href='consultarProducto.php'; </script>";
}

?>
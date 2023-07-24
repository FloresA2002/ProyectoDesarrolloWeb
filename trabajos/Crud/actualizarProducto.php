<?php
ob_start();//utilizar header para rediccionar paginas de forma automatica

include "conexion.php";

$id_prod = $_GET['idP'];
$consultarProd = "SELECT * FROM producto, imagen WHERE id_producto =id_producto_fk AND id_producto = $id_prod";
$resultadoProd = mysqli_query($conn, $consultarProd);

if($fila= mysqli_fetch_assoc($resultadoProd)){
    

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso de Producto</title>
        <link href="estilos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
            img{
              width: 350px;
              heigth:240px;
            } 
            
            figure{
                position: absolute;
                margin-left: 1200px;
                margin-top:-380px;
                border:3px solid #0dcaf0;
                text-align: center;
                height: 360px;
            }
            
            
        </style>
    </head>
    <body>
        <form action ="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $fila['id_producto'] ?>" />
        <div style="width: 900px; margin-left:200px">
            <br><h4 style="text-align: center">Actualización del Productos</h4><br>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Producto</label>
                            <input type="text" name="producto" value="<?php echo $fila['nombre']?>" class="form-control" />

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Color</label>
                            <input type="text" name="color" value="<?php echo $fila['color']?>" class="form-control" />

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Precio</label>
                            <input type="text" name="precio" class="form-control" value="<?php echo $fila['precio']?>"/>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Stock</label>
                            <input type="number" value="<?php echo $fila['stock']?>" name="stock" class="form-control" />

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Nombre Imagen</label>
                            <input type="text" name="imagen" class="form-control" value="<?php echo $fila['nombre_imagen']?>"/>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" >Imagen</label>
                            <input type="file" class="form-control" id="carga_archivo" name="imagen" />

                        </div>
                    </div>
                </div>
                <button type="submit" name="guardar" class="btn btn-primary btn-block mb-4" onclick="return confirm('Seguro de Actualizar el Registro ?')">Actualizar</button>
                <a href="consultarProducto.php" class="btn btn-primary btn-block mb-4">Regresar</a>
                
        </div>
            <figure>
                <figcaption>Imagen del Producto</figcaption>
                <img name="imgAnterior" id="imgAnterior" src="data:image/jpg;base64,<?php echo base64_encode($fila['figura']);?>"/>
                <div id="verImagen"></div>   
            </figure>
<?php }?>
    </form>
</body>
</html>
<script>
    function leeArchivo(input) {
        document.getElementById("imgAnterior").style.display = "none";
        document.getElementById("verImagen").innerHTML = "";

        if (input.files && input.files[0]) {
            var leeImagen = new FileReader();

            leeImagen.onload = function (e) {
                var imagenPrevia = document.createElement('img');
                imagenPrevia.id = 'imagenPrevia';
                imagenPrevia.src = e.target.result;

                var previewZone = document.getElementById('verImagen');
                previewZone.appendChild(imagenPrevia);
            }
            leeImagen.readAsDataURL(input.files[0]);
        }
    }
    var fileUpload = document.getElementById('carga_archivo');
    fileUpload.onchange = function (e) {
        leeArchivo(e.srcElement);
    }
</script>


<?php
if(isset($_POST['guardar'])){
    
    $producto = $_POST['producto'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id_producto=$_REQUEST['id'];
    
    
    //actuazlizo producto
    $ediarProd ="UPDATE producto SET nombre = '$producto',color='$color',precio='$precio',stock='$stock' WHERE id_producto = $id_producto";
    
    $resultadoActualizar = mysqli_query($conn, $ediarProd);
   //actualizo imagen
    $nombre_img = $_POST['imagen'];
    $vacio = $_FILES['imagen']['size'];//verifico si selecione una nueva imagen
    
    if($vacio !== 0){
        $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $editarImagen ="UPDATE imagen SET nombre_imagen = '$nombre_img',figura ='$foto' WHERE id_producto_fk = $id_producto";
        $resultadoImagen = mysqli_query($conn, $editarImagen);
    }
    
    echo "<script>alert('Producto Actualizado')</script>";
    header("location:consultarProducto.php");
    ob_end_flush();
}

?>
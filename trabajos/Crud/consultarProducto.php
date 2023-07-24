<?php
include "conexion.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Producto</title>
        <link href="estilos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
            #header {
				margin:auto;
				width:90%;
				font-family:Arial, Helvetica, sans-serif;
                               
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:15px 30px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
        </style>
    </head>
    <body>
        <div id="header">
            <ul class="nav">
                <li><a href="../../index.html">Indice</a></li>
                <li><a href="">Ejercicios Basicos</a>
                    <ul>
                        <li><a href="../Hoja/hoja.php">Hoja de Vida</a></li>
                        <li><a href="../EstadosEnlaces.php">Estados Enlaces</a></li>
                        <li><a href="../EstilosBordes.php">Estilos Bordes</a></li>
                        <li><a href="../FormasEstilos/FormasInsertarEstilos.php">Insertar Estilos</a></li>
                        <li><a href="../Listas.php">Listas</a></li><!-- comment -->
                        <li><a href="../MarginVsPadding.php">MarginVsPadding</a></li>
                        <li><a href="../Exposicion/ElementosHtml.php">Exposicion</a></li>
                    </ul>
                </li>
                <li><a href="">Ejercicios Complejos</a>
                    <ul>
                        <li><a href="../PaginaEsta/index.php">Pagina Estatica</a></li>
                        <li><a href="../F1/Formulario1.php">Formulario 1</a></li>
                        <li><a href="../F2/Formulario2.php">Formulario 2</a></li>
                        <li><a href="../Crud/consultarProducto.php">Crud Imagenes</a></li>
                        <li><a href="../Prueba/index.php">Prueba Practica</a></li>
                    </ul>
                </li>
            </ul>
            <br><!-- comment -->
            <br>
        </div>
        <div align="center">
            <br><h3>Datos del Producto</h3><br>
        <table border=1 class="table table-hover">
            <tr>
                <th>IdP</th>
                <th>Producto</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Foto</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        
            <?php
            $consultaProducto = "SELECT * FROM producto, imagen WHERE id_producto = id_producto_fk ORDER BY id_producto";
            $resultadoProducto= mysqli_query($conn, $consultaProducto);
            
            while($fila = mysqli_fetch_assoc($resultadoProducto)){
            ?>
            <tr><!-- comment -->
                <td><?php echo $fila['id_producto']?> </td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['color'] ?></td><!-- comment -->
                 <td><?php echo $fila['precio'] ?></td>
                <td><?php echo $fila['stock'] ?></td>
                <td><?php echo $fila['nombre_imagen'] ?></td>
                <td> <?php echo'<img src=" data:image/jpg; base64,'. base64_encode($fila['figura']).'" width="80" height="80" />'?> </td>
                <td><a href="actualizarProducto.php?idP=<?php echo $fila['id_producto']?>">Editar</a></td>
                <td><a href="eliminarProducto.php?idP=<?php echo $fila['id_producto']?>" onclick="return confirm('Seguro de Eliminar el Registro?')">Eliminar</a></td>
            </tr>    
            
            <?php } ?>
            </table>
            <br><a class="btn btn-light" href="ingresarProducto.php">Ingreso de Productos</a>
        </div>
    </body>
</html>

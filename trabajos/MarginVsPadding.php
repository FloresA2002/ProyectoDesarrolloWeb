<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                        
            body{background-color:yellowgreen}
            p{background-color: aqua }
            p.ejemplo{
                border: 3px dashed crimson;
                padding-top: 120px;
                padding-right:  120px;
                padding-bottom: 60px;
                padding-left: 80px;
            }
            
            
            div.contenedor{border:2px solid blue; 
                           margin-left: 100px
                    }
                    p.heredado{margin-left: inherit}
        </style>
    </head>
    <body>
        <div id="header">
            <ul class="nav">
                <li><a href="../index.html">Indice</a></li>
                <li><a href="">Ejercicios Basicos</a>
                    <ul>
                        <li><a href="Hoja/hoja.php">Hoja de Vida</a></li>
                        <li><a href="EstadosEnlaces.php">Estados Enlaces</a></li>
                        <li><a href="EstilosBordes.php">Estilos Bordes</a></li>
                        <li><a href="FormasEstilos/FormasInsertarEstilos.php">Insertar Estilos</a></li>
                        <li><a href="Listas.php">Listas</a></li><!-- comment -->
                        <li><a href="MarginVsPadding.php">MarginVsPadding</a></li>
                        <li><a href="Exposicion/ElementosHtml.php">Exposicion</a></li>
                    </ul>
                </li>
                <li><a href="">Ejercicios Complejos</a>
                    <ul>
                        <li><a href="PaginaEsta/index.php">Pagina Estatica</a></li>
                        <li><a href="F1/Formulario1.php">Formulario 1</a></li>
                        <li><a href="F2/Formulario2.php">Formulario 2</a></li>
                        <li><a href="Crud/consultarProducto.php">Crud Imagenes</a></li>
                        <li><a href="Prueba/index.php">Prueba Practica</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <h2 style="text-align: center"> Uso de margenes y padding</h2>
        <h3> Uso de la propiedad inherit</h3>
        <p>El segundo parrafo a la izquierda hereda del elemento padre</p>
        
        <div class="contenedor">
            <p class="heredado">Este parrado tiene un margen izquierdo heredado<code> div </code></p>
        </div>
        <p> Continuo escribiendo mis siguientes parrafos</p> 
        <hr style="height: 5px">
        <h2>Usando Propiedades individuales</h2>
        <p>Aqui Realizare un parrafo sin margenes especificos</p>
        <p class="ejemplo">Este nuevo parrafo tiene un margen superior 120px,un margen inferior de 60px,<br>
        un margen izquierdo de 80px y un margen derecho de 120px</p>
        <p>otro parrafo para ver la diferencia</p>
    </body>
</html>

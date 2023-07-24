<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
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
                        
      
            ol.lr{list-style-type: lower-roman}
            ol.la{list-style-type: lower-latin}

            ol.tr{line-style-type: upper-roman}
            ol.ta{list-style-type:  upper-alpha}

            ul.imagen{list-style-image: url(data:image/jpeg;base64,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)}

            ol.color{background: darkgray; padding:20px}
            ol.color li{background: activeborder;padding:5px;margin-left: 35px}

            ul.color{background: darkgray; padding:10px}
            ul.color li{background: activeborder;padding:5px;margin:3px}
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
        <h3>Implementacion de listas</h3>
        <p style="color: crimson">Ejemplo de Listas ordenadas</p>
        <ul class="circulo">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ul>
        <ul class="Cuadrado">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ul><!-- comment -->
        <ul class="imagen">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ul>
        <p style="color: crimson">Ejemplo de Listas No ordenadas</p>
        <ol class="lr">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ol>
        <ol class="la">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ol>
        <ol class="tr">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ol>
        <ol class="ta">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ol>
        <ol class="color">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ol>
        <ul class="color">
            <li>Redes 1</li>
            <li>Redes 2</li>
        </ul>
    </body>
</html>
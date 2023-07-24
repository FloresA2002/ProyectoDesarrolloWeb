<!DOCTYPE html>

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
                        
            
            a.enlaces:link{color:black}
            a.enlaces:visited{color:darkcyan}
            a.enlaces:hover{color:darkturquoise}
            a.enlaces:active{color:fuchsia}
            
            a.efectos:link, a.efecto:visited{
                color:black;
                padding:14px 25px;
                border: 2px solid green;
                text-align: center;
                display: inline-block;
            }
            
            a.efectos:hover, a.efecto:active{
                background-color: lightcyan;
                border-color: aquamarine;
            }
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
        <h3>Estados de los enlaces</h3>
        <br><b><a class="enlaces" href="https://www.google.com">Primer Enlace</a></b>
        <br><b><a class ="efectos" href="https://www.google.com">Segunndo enlace</a></b>
    </body>
</html>
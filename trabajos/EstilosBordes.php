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
                        
            
                    p.heredado{margin-left: inherit}
         p.dotted{border: 5px dotted chocolate}  
         p.dashed{border: medium dashed darkorange} 
        p.solid{border: 5px solid aquamarine}
        p.double{border: medium double blue}
        p.groove{border: medium groove dodgerblue}
        p.ridge{border: 5px ridge darkolivegreen}
        p.inset{border: 5px inset darkcyan}
        p.outset{border:10px outset darkorchid}
        p.none{border: 5px none darksalmon}
        p.hidden{border:5px hidden deeppink}
        p.mix{border-style: dotted groove double solid}<!--arriba,derecha,abajo,izquierda-->
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
                        <li><a href="Listas.html">Listas</a></li><!-- comment -->
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
        <h2>Uso de la propiedad border-style</h2>
        <p>Esta propiedad <code>border-style</code> especifica las caractersticas del borde a utlizar</p>
        <p class="dotted">Borde con estilo dotted</p>
        <p class="dashed">Borde con estilo dashed</p>
        <p class="solid">Borde con estilo solid</p><!-- comment -->
        <p class="double">Borde con estilo double</p>
        <p class="groove">Borde con estilo groove</p>
        <p class="ridge">Borde con estilo ridge</p><!--  -->
        <p class="inset">Borde con estilo inset</p>
        <p class="outset">Borde con estilo outset</p>
        <p class="none">Borde con estilo none</p>
        <p class="hidden">Borde con estilo hidden</p>
        <p class="mix">Borde con estilo MIX</p><!-- comment -->
    </body>
</html>

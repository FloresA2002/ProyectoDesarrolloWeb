<!DOCTYPE html>
<html>
    <head>
        <title>Uso Estilos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
        
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
                        
            
            h1{color:blueviolet;
               text-alignt:center;
                
            }
            p{font-family: "Arial";font-size :20px;color:cornflowerblue}
                
            #p1{color:brown; font-family:"Times New Roman";font-size: 25px}
            #p2{color:green; font-family:"Calibri";font-size: 20px}
            #p3{color:rosybrown; font-family:"Comic Sans MS";font-size: 18px}
            
            
            p.center{text-align: center;color:blue}
            p.large{font-size:300%}
            
            body{background-color: deeppink}
        </style>
        
        
    </head>
    <body style="background-color: honeydew">
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
        </div>
        <br>
        <br>
       <h1>Mi Primer Ejemplo del uso de Estilos</h1>
       <p>Esta seccion es correspondiente a la etiqueta <code>p </code>que es de un parrafo</p>
       <p id ="p1"><b>Esta es mi etiqueta de parrafo de id 1 !!!</b></p>
       <p id ="p2"><em>Esta es mi etiqueta de parrafo de id 2 !!!</em></p>
       <p id ="p3">Esta es mi etiqueta de parrafo de id 3 !!!</p>
       <p class ="center large">Esta es mi cuarto parrafo!!!</p>
       <p class ="center ">Este parrafo solo aplica a<code>p.large</code>!!!</p>
       <h1>Adapta las mias caracteristicas que la etiqueta h1 anterior</h1>
       <div style="background-color: greenyellow">
       <p> nuevo parrafo 1</p>
       <p> nuevo parrafo 2</p>
       </div>
    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
	<div class="contenido">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Elementos Html</title>
                
		<link href="Estilos/myStyle.css" rel ="stylesheet" type="text/css">
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
	<body background="assets/bg.jpg">
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
	<header><h4 class="titulo">ELEMENTOS HTML 1</h4></header>
	<div class="inferior">
			<div class="cuadros">
				<h2>&lt;a&gt;</h2>
				<h3><p class="text_column"><center>Crea un enlace a otras páginas(Hipervinculo)</center></p></h3>
				<button><a href ="https://www.google.com.ec">ir a Google</a></button>
			</div>
			<div class="cuadros">
				<h2>&lt;em&gt;</h2>
				<h3><p class="text_column"><center>Poner Partes más importantes de un texto en Cursiva.</center></p></h3>
				<h3><p>Esto es un <em>Ejemplo</em></p></h3>
			</div>
			<div class="cuadros">
				<h2>&lt;code&gt;</h2>
				<h3><p class="text_column"><center>Apropiado para marcar el código de un programa.</center></p></h3>
				<h3><code>System.out.println("Hola Mundo");</code></h3>
			</div>
			<div class="cuadros">
				<h2>&lt;strong&gt;</h2>
				<h3><p class="text_column"><center>Poner en Negrita un Texto</center></p></h3>
				<font size=3 color="black">Hola <strong>Mundo</strong>!</font>
			</div>
			
		  </div>
		  <header><h4 class="titulo">ELEMENTOS HTML 2</h4></header>
		  
		  <div class="inferior">
			<div class="cuadros">
				<h2>&lt;small&gt;</h2>
				<h3><p class="text_column"><center>Representar comentarios en letra pequeña</center></p></h3>
				<small>El cocotero es una sola especie con múltiples variedades, diferenciadas básicamente por el color del fruto</small>
			</div>
			
			<div class="cuadros">
				<h2>&lt;abbr&gt;</h2>
				<h3><p class="text_column"><center>Hace una abreviatura</center></p></h3>
				<p>El <abbr title="Señor">Sr.</abbr> Jhon Smith estudió en la Escuela Guildhall</p>
			</div>
			<div class="cuadros">
				<h2>&lt;sub&gt;</h2>
				<h3><p class="text_column"><center>Sirve para agregar un SUBÍNDICE</center></p></h3>
				<h3>H<sub>2</sub>O</h3>
			</div>
		  </div>
		  
		  <header><h4 class="titulo">Agrupacion de Contenido 1</h4></header>
		  <div class="inferior">
			<div class="cuadros">
				<h2>&lt;p&gt;</h2>
				<h3><p class="text_column"><center>Representa un cambio de tema entre párrafos</center></p></h3>
				<p>NetBeans es un proyecto de código abierto de gran éxito con una gran base de usuarios, una comunidad en constante crecimiento.</p><p>Sun Microsystems fundó el proyecto de código abierto NetBeans en junio de 2000 y continúa siendo el patrocinador principal de los proyectos. Actualmente Sun Microsystems es administrado por Oracle Corporation.</p>
			</div>
			<div class="cuadros">
				<h2>&lt;hr&gt;</h2>
				<h3><p class="text_column"><center>Es una Linea de Separación</center></p></h3>
				<h3>Hola<h3>
				<hr>
				<h3>Mundo<h3>
			</div>
			<div class="cuadros">
				<h2>&lt;pre&gt;</h2>
				<h3><p class="text_column"><center>los espacios continuos y los quiebres de línea escritos en el editor son respetados.</center></p></h3>
				<p>Las cosas que necesitarás están listadas aquí:
				- Una linterna.
				- Una caja de fósforos.
				- Un cuchillo afilado.</p>

<pre>Las cosas que necesitarás están listadas aquí:
- Una linterna.
- Una caja de fósforos.
- Un cuchillo afilado.
</pre>
			</div>
		  </div>
		  <header><h4 class="titulo">Agrupacion de Contenido 2</h4></header>
		  <div class="inferior">
			<div class="cuadros">
				<h2>&lt;li&gt;</h2>
				<h3><p class="text_column"><center>Declara un Elemento de la Lista</center></p></h3>
				<li>Punto Uno</li>
				<li>Punto Dos</li>
				<li>Punto Tres</li>
			</div>
			
			<div class="cuadros">
				<h2>&lt;ul&gt;</h2>
				<h3><p class="text_column"><center>Lista no Ordenada</center></p></h3>
				<ul>
		<li>Punto Uno</li>
		<li>Punto Dos</li>
		<li>Punto Tres</li>
				</ul>
			</div>
			<div class="cuadros">
				<h2>&lt;ol&gt;</h2>
				<h3><p class="text_column"><center>Viñetas ordenadas</center></p></h3>
				<ol>
		<li>Punto Uno</li>
		<li>Punto Dos</li>
		<li>Punto Tres</li>
				</ol>
			</div>
		  </div>
		  <header><h4 class="titulo">Agrupacion de Contenido 3</h4></header>
		  <div class="inferior">
			<div class="cuadros">
				<h2>&lt;menu&gt;</h2>
				<h3><p class="text_column"><center>Representa una lista descriptiva</center></p></h3>
				<menu>
			<li>Opcion Uno</li>
			<li>Opcion Dos</li>
			<li>Opcion Tres</li>
				</menu>
			</div>
			
			<div class="cuadros">
				<h2>&lt;dl&gt;&lt;dt&gt;&lt;dd&gt;</h2>
				<h3><p class="text_column"><center>Representa contenido independiente, a menudo con un título</center></p></h3>
				<dl>
				<p>Animales:</p>
				<dl>
    <dt>Hervivoros:</dt>
    <dd>Animales que se alimentan de plantas</dd>

    <dt>Carnivoros:</dt>
    <dd>Animales que se alimentan de carnes</dd>

    <dt>Ovnmivoros:</dt>
    <dd>Animales que se alimentan de carne y plantas</dd>
</dl>

			</div>
			<div class="cuadros">
				<h2>&lt;figure&gt;</h2>
				<h3><p class="text_column"><center>Sirve para modificar una imagen</center></p></h3>
				<figure style="float: center">
				<img src="assets/sus.png" width="100" height="120">
				</figure>
			</div>
		  </div>
		  <header><h4 class="titulo">Agrupacion de Contenido 4</h4></header>
		  <div class="inferior">
			<div class="cuadros">
				<h2>&lt;figcaption&gt;</h2>
				<h3><p class="text_column"><center>Brindar un Descripciona a algo</center></p></h3>
				<figure>
				<img src="assets/imagen.jpg" width="100" height="120">
				<figcaption><strong>figcaption</strong></figcaption>
				</figure>
			</div>
			
			<div class="cuadros">
				<h2>&lt;main&gt;</h2>
				<h3><p class="text_column"><center>El contenido principal.</center></p></h3>
				<figure>
				<img src="assets/main.jpg" width="270" height="130">
				</figure>
			</div>
			<div class="cuadros">
				<h2>&lt;div&gt;</h2>
				<h3><p class="text_column"><center>Sirve para crear secciones o agrupar contenidos.</center></p></h3>
				<figure style="float: center">
				<img src="assets/div.png" width="500" height="160">
				</figure>
			</div>
		  </div>
	</body>
</html>

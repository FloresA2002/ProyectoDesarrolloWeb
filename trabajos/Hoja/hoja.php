<!DOCTYPE html>

<html>
	<head>
            <meta charset="UTF-8">
		<title>Hoja de Vida</title>
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
	<body background="Fondo.jpg">
            <div id="header">
            <ul class="nav">
                <li><a href="../../index.html">Indice</a></li>
                <li><a href="">Ejercicios Basicos</a>
                    <ul>
                        <li><a href="hoja.php">Hoja de Vida</a></li>
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
	<!--bgcolor ="#FEF9E7"-->
		<div class="contenido">
		  <header><h4 class="titulo">Hoja de Vida(Página Estática)</h4></header>
		  <section class ="intro">
			<div class="column">
				<img src="imagen.jpg"width="50%" height="320">
			</div>
			<div class="column">
			  <h2><p class="text_column"><strong><em style="color: #D35400">Nombres:</em></strong>Anthony Sebastian</p></h2>
			  <h2><p class="text_column"><strong><em style="color: #D35400">Apellidos:</em></strong>Flores Erazo</p></h2>
			  <h2><p class="text_column"><strong><em style="color: #D35400">Cédula:</em></strong>1752827251</p></h2>
			  <h2><p class="text_column"><strong><em style="color: #D35400">Fecha de Nacimiento:</em></strong>dd/mm/aa</p></h2>
			  <h2><p class="text_column"><strong><em style="color: #D35400">Dirección:</em></strong>Quitumbe</p></h2>
			  <h2><p class="text_column"><strong><em style="color: #D35400">Teléfono:</em></strong>0992938269</p></h2>
			</div>
		  </section>
		  <div class="inferior">
			<div class="cuadros">
				<h2>FORMACION ACADÉMICA</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Nivel de Educación:</em></strong>Bachiller</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Area de Conocimiento:</em></strong>Ciencias</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Titulo:</em></strong>Bachiller en Ciencias</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Especialidad:</em></strong>n/a</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Institución:</em></strong>Instituto Tecnologico Quito</p></h3>
			</div>
			
			<div class="cuadros">
				<h2>IDIOMAS</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Ingles:</em></strong>Medio</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Español:</em></strong>Nativo</p></h3>
				
			</div>
			<div class="cuadros">
				<h2>CONOCIMIENTOS</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Lenguajes Programacion:</em></strong>html,java</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Area de Conocimiento:</em></strong>Desarrollo Web</p></h3>
			</div>
			<div class="cuadros">
				<h2>REFERENCIAS</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">NOMBRE:</em></strong>Dra. Katherine Garces</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">NOMBRE:</em></strong>Mgtr. Orfy Erazo	 </p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">NOMBRE:</em></strong>Mtr. Luis Flores </p></h3>
			</div>
		  </div>
		  <header><h4 class="titulo">HOBBYS</h4></header>
		  <div class="inferior">
			<div class="cuadros">
				<h2>VIDEOJUEGOS</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Videojuego Favorito:</em></strong>Metroid</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Género Favorito:</em></strong>Accion,Shooter</p></h3>
			</div>
			
			<div class="cuadros">
				<h2>LIBROS</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">LIBRO FAVORITO</em></strong>Archivo de las Tormentas</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">GENERO Favorito</em></strong>Fantasia</p></h3>
				
			</div>
			<div class="cuadros">
				<h2>SERIES</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Series Favorita:</em></strong>Arcane</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Género Favorito:</em></strong>Fansatia,Anime</p></h3>
			</div>
			<div class="cuadros">
				<h2>PELICULAS</h2>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Pelicula Favorita:</em></strong>Your Name</p></h3>
				<h3><p class="text_column"><strong><em style="color: #A569BD">Actor Favorito:</em></strong>Tom Holland</p></h3>
			</div>
		  </div>
		  <header><h4 class="titulo">REDES SOCIALES</h4></header>
		  <div class="inferior">
			<div class="cuadros">
				<h2>Facebook</h2>
				<h3><p class="text_column"><a href ="https://www.facebook.com/profile.php?id=100010359127207"><img src="FB.png" width="60" height="50"></a></p></h3>
				
			</div>
			
			<div class="cuadros">
				<h2>Instagram</h2>
				<h3><p class="text_column"><strong><a href ="https://www.instagram.com/anthonyfva_3112/?hl=es"><img src="IG.png" width="60" height="50"></a></p></h3>
				
			</div>
			<div class="cuadros">
				<h2>Discord</h2>
				<h3><p class="text_column"><strong><a href ="https://discord.com"><img src="DC.png" width="60" height="50"></a></p></h3>
				
			</div>
			<div class="cuadros">
				<h2>Gmail</h2>
				<h3><p class="text_column"><strong><a href ="https://www.google.com/intl/es/gmail/about/"><img src="GM.png" width="60" height="50"></a></p></h3>
				
			</div>
		  </div>
		</div>
	</body>
</html>

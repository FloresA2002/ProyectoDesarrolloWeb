<!DOCTYPE html>
<html>
    <head>
        <title>Uso HTML,CSS Y JS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos/MyStyle.css" rel="stylesheet" type="text/css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="main.js" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/205433e2cb.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <style>
            #header {
				margin:auto;
                                margin-left: 0px;
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
                                z-index: 3;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
        </style>
        
    </head>
    <body>
        
        <header>
            <nav>
                <section class="contenedor nav">
                    <div class="logo">
                        <img src="imagen/logo.jpg" alt="">
                    </div>
                    <div class="enlaces-header">
                        <a href="#">Inicio</a>
                        <a href="#">Inicio</a>
                        <a href="#">Inicio</a>
                        <a href="#">Inicio</a>
                        <a href="#">Inicio</a>
                    </div>
                    <div class ="hamburger">
                        <i class="fas fa-bars"></i>
                    </div>
                </section><!-- comment -->
            </nav><!-- comment -->
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
            <div class="contenedor">
                <section class="contenido-header">
                    <section class="texto-header">
                        <h1>Nuestra creatividad cuenta mucho aqui</h1>
                        <p>Lorem ipsum dolor sit amet, duis quidam quaerendum in nam. In aliquip explicari quo, eu.</p>
                        <a href="#">Learn More</a>
                    </section><!-- comment -->
                    <img src="imagen/imagen1.svg" alt=""><!-- comment -->
                </section>
            </div>
        </header>
        
        <section class="about-us" >
            <div class="contenedor1">
                <h2 class="titulo">Estamos Aprendiendo HTML y CSS para paginas web estaticas</h2><!-- comment -->
                <div class="contenedor-articulo">
                    <div class="articulo" ><!-- data-aos="zoom-in-right" -->
                        <i class="fas fa-pen-fancy" ></i>
                        <h3>Diseño Grafico</h3>
                        <p>Lorem ipsum dolor sit amet, eu pro nibh omnes iracundia, cu nam accusamus referrentur dictas.</p>
                        <a href="#">Leer mas ....</a>
                    </div>
                    <div class="articulo"  >
                        <i class="fas fa-palette"></i>
                        <h3>Diseño Web</h3>
                        <p>Lorem ipsum dolor sit amet, eu pro nibh omnes iracundia, cu nam accusamus referrentur dictas.</p>
                        <a href="#">Leer mas ....</a>
                    </div><!-- comment -->
                    <div class="articulo" >
                        <i class="fas fa-wifi"></i>
                        <h3>IDE's y Hosting</h3>
                        <p>Lorem ipsum dolor sit amet, eu pro nibh omnes iracundia, cu nam accusamus referrentur dictas.</p>
                        <a href="#">Leer mas ....</a>
                    </div>
                    <div class="articulo" >
                        <i class="fas fa-chart-pie" ></i>
                        <h3>Aprendiendo HTML</h3>
                        <p>Lorem ipsum dolor sit amet, eu pro nibh omnes iracundia, cu nam accusamus referrentur dictas.</p>
                        <a href="#">Leer mas ....</a>
                    </div>
                    <div class="articulo">
                        <i class="fas fa-comments"  ></i>
                        <h3>Aprendiendo CSS</h3>
                        <p>Lorem ipsum dolor sit amet, eu pro nibh omnes iracundia, cu nam accusamus referrentur dictas.</p>
                        <a href="#">Leer mas ....</a>
                    </div>
                    <div class="articulo" >
                        <i class="fas fa-info-circle"></i>
                        <h3>Algunas cosas mas</h3>
                        <p>Lorem ipsum dolor sit amet, eu pro nibh omnes iracundia, cu nam accusamus referrentur dictas.</p>
                        <a href="#">Leer mas ....</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="questions contenedor">
            <section class="texto-questions">
                <h1>Nuestra creatividad cuenta mucho aqui</h1>
                <p>Lorem ipsum dolor sit amet, sed ad inani evertitur, alia meis solum sea te has.</p>
                <a href="#">Leer mas...</a>
            </section>
            <img src="imagen/imagen2.svg" >
        </section>

        <section class="results">
            <div class="contenedor1 conten-results">
                <section class="numbers">
                    <div class="number" >
                        <h4>+8876</h4>
                        <p>Lorem ipsum dolor sit amet, ei nec regione tamquam, ludus mandamus facilisis mei et, pro praesent evertitur mediocritatem ne id.</p>
                    </div>
                    <div class="number" >
                        <h4>+8143</h4>
                        <p>Lorem ipsum dolor sit amet, ei nec regione tamquam, ludus mandamus facilisis mei et, pro praesent evertitur mediocritatem ne id.</p>
                    </div>
                    <div class="number" >
                        <h4>+8092</h4>
                        <p>Lorem ipsum dolor sit amet, ei nec regione tamquam, ludus mandamus facilisis mei et, pro praesent evertitur mediocritatem ne id.</p>
                    </div>
                    <div class="number" >
                        <h4>+8538</h4>
                        <p>Lorem ipsum dolor sit amet, ei nec regione tamquam, ludus mandamus facilisis mei et, pro praesent evertitur mediocritatem ne id.</p>
                    </div>
                </section>
                <section class="results-text">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                    <p>Lorem ipsum dolor sit amet, ei nec regione tamquam, ludus mandamus facilisis mei et</p>
                    <a href="#">Ingrese aqui</a>
                </section>
            </div>
        </section>

        <section class="contenedor1 services">
            <img src="imagen/imagen4.svg" alt="">
            <div class="box-skills">
                <h4><i class="far fa-check-circle"></i>Web Desing</h4>
                <h4><i class="far fa-check-circle"></i>Web development</h4><!-- <h4><i></i></h4> -->
                <h4><i class="far fa-check-circle"></i>SEO</h4><!-- comment -->
                <h4><i class="far fa-check-circle"></i>Marketing</h4><!-- comment -->
                <h4><i class="far fa-check-circle"></i>Web support</h4><!-- comment -->
            </div>
        </section>

        <footer>
            <div class="partFooter">
                <img src="imagen/logo.jpg" alt="">
            </div>
            <div class="partFooter">
                <h4>Servicios</h4>
                <a href="#">Services 1</a>
                <a href="#">Services 2</a><!-- comment -->
                <a href="#">Services 3</a>
            </div>
            <div class="partFooter">
                <h4>Acerca de</h4>
                <a href="#">About 1</a>
                <a href="#">About 2</a><!-- comment -->
                <a href="#">About 3</a>
            </div>
            <div class="partFooter">
                <h4>Redes Sociales</h4>
                <div class="social-media">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i><!-- comment -->
                    <i class="fab fa-instagram"></i><!-- comment -->
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </footer>
        
    </body>
</html>

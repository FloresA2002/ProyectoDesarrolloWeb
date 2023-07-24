
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="MyStyle.css" rel="stylesheet" type="text/css"/>
        <script src="validaciones2.js" type="text/javascript"></script>
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
        <br>
        <br>
        <form action="Formulario2.php" method="POST">
            
            <table border="0" class="fondo">
                <tbody>
                    
                    <img id="imagen" src="https://www.jairogarciarincon.com/img/clases/1325.jpg">
                    <img id="imagen2" src="https://cdn-icons-png.flaticon.com/512/919/919826.png" >
                    <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/OvhVLFQmgOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <th colspan="2" class="titulo">Registrate</th>
                    <tr>
                        <td>Nombre :</td>
                        <td><input type="text" name="nombre" value="" id="id_nombre" placeholder="Ingresa Tu Nombre" maxlength="20" pattern="^[a-zA-Z ]*$" /></td>
                    </tr>
                    <tr>
                        <td>Apellido :</td>
                        <td><input type="text" name="apellido" value="" id="id_apellido" placeholder="Ingresa Tu Apellido" maxlength="20" pattern="^[a-zA-Z ]*$" /></td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento :</td>
                        <td><input type="date" id="fecha"  name="fecha" value="" min="2000-01-01" max="<?php echo date('Y-m-d') ?>"  /></td>
                    </tr>
                    <tr>
                        <td>Edad :</td>
                        <td><input type="text" id="edad"  name="edad" value=""  placeholder="Selecciona Tu Fecha de Nacimiento" readonly/></td>
                    </tr>
                    <tr>
                        <td># Hijos :</td>
                        <td><input type="number" id="id_hijos" name="hijos" value="" placeholder="Cuantos Hijos Tiene"/></td>
                    </tr>
                    <tr>
                        <td >Genero :</td><!-- comment -->
                        <td>
                            <input type="radio" name="genero" value="Femenino" /> Femenino<br>
                            <input type="radio" name="genero" value="Masculino" /> Masculino
                        </td>
                    </tr>
                    <tr>
                        <td >Estado civil :</td>
                        <td>
                            <input type="checkbox" id="d1" name="estado" value="Soltero" onclick="uncheckEstado()" checked="true" />Soltero/a<br>
                            <input type="checkbox" id="d2" name="estado" value="Casado" onclick="uncheckEstado()"  />Casado/a<br>
                            <input type="checkbox" id="d3" name="estado" value="Divorciado" onclick="uncheckEstado()"/>Divorciado/a<br>
                        </td>
                        
                    </tr>
                    <tr>
                        <td >Cursos Realizados :</td>
                        <td>
                            <input type="checkbox" name="cursos[]" value="Java" /> Curso de Java<br>
                            <input type="checkbox" name="cursos[]" value="HTML Y CSS" /> Curso HTML y CSS<br><!-- comment -->
                            <input type="checkbox" name="cursos[]" value="BDD" /> Curso de BDD
                        </td>
                    </tr>
                    <tr>
                        <td >Nivel de Educacion :</td>
                        <td>
                            <select name="educacion" id="id_educacion">
                                <option value="">--Seleccione una Opcion--</option>
                                <option value="Primaria">Educación Primaria</option>
                                <option value="Secundaria">Educacion Secundaria</option>
                                <option value="Superioir">Educacion Superior</option>
                            </select>  
                        </td>
                    </tr>
                    <tr>
                        <td>Clave :</td>
                        <td><input type="password" id="id_clave" name="clave" placeholder="Ingresa Tu Contraseña" value="" pattern=".{6,}" /></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" id="id_mail" name="correo" placeholder="Ingresa Tu Correo" value="" /></td>
                    </tr>
                    <tr>
                        <td>Aspiracion Salarial :</td>
                        <td><input type="text" name="salario" id="id_aspiracion" value="" placeholder="Cuanto te Gustaria Ganar" pattern="[0-9,]+[^.]" onsubmit="validarDecimal(valueOf(salario))"  /></td>
                    </tr>
                    <tr>
                        <td>Direccion :</td>
                        <td><textarea name="direccion"id="id_direccion"  placeholder="Ingresa Tu Direccion" rows="4" cols="20"></textarea></td>
                    </tr>
                </tbody>
            </table>

            <br><input type="submit" value="Guardar" name="envio" onclick="verificarDatos()"/>
            
        </form>
        
    </body>
</html>
<script>
    var edad = document.querySelector('#edad');
    var limpiar = document.querySelector('#limpiar');
    var fecha = document.querySelector('#fecha');
    var anioSistema = new Date().getFullYear();

    fecha.addEventListener('change', () => {
        var fechaNacimiento = fecha.value;
        const anioNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
        var edadObtenida = anioSistema - anioNacimiento;
        edad.value = `${edadObtenida} años`;
    })

    limpiar.addEventListener('click', () => {
        form.reset();
    });
</script>
<?php
if(isset($_POST['envio'])){
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$fechaNac= $_POST['fecha'];
$edad= $_POST['edad'];
$hijos= $_REQUEST['hijos'];
$genero= $_REQUEST['genero'];
$estadoCiv= $_POST['estado'];
//$cursos= $_POST['cursos[]'];
$nivelEdu= $_REQUEST['educacion'];
$clave= $_POST['clave'];
$email= $_POST['correo'];
$salario= $_POST['salario'];
$direccion= $_POST['direccion'];
echo "<br><br>DATOS INFORMATIVOS <hr>";
echo "Nombre Ingresado: $nombre <br> Apellido ingresado: $apellido";
echo "<br>Fecha nacimiento: $fechaNac  <br>Edad: $edad años <br>";
echo "Genero: $genero  <br>Estado Civil: $estadoCiv  <br> Nivel de Educacion: $nivelEdu <br>";
echo "<br> Cursos recibidos:<br>";
foreach($_POST['cursos']as $temp){
    echo "<li>".$temp."</li>";
}
echo "<br>Contraseña: $clave  <br>Correo: $email<br>";
echo "Salario: $salario  <br>Direccion: $direccion";
}
?>
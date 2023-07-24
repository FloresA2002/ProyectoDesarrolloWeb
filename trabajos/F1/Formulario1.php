<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario 1</title>
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
        <form action="" method="POST">       
            <table border="1"> <!-- 28 filas , 7 columnas-->
                <tbody style ="background-color: #e2e3e5">
                    <tr>
                        <td class="titulo" colspan="7">ORDEN DE PEDIDO</td>
                    </tr>

                    <tr>
                        <td colspan="7"> &nbsp </td>
                    </tr>
                    <tr>
                        <td class="subtitulo" colspan="7">Datos personales</td>
                    </tr>

                    <tr>
                        <td colspan="1">Nombres</td>
                        <td colspan="6"><input type="text" name="nombre" value="" placeholder="Ingrese su Nombre" autofocus size="44" minlength="5" maxlength="10" pattern="^[a-zA-Z ]*$"
                                               oninvalid="setCustomValidity('Para el Nombre ingrese Caracteres')" oninput="setCustomValidity('')"/> </td>
                    </tr>
                    <tr>
                        <td colspan="1">Apellidos</td>
                        <td colspan="6"><input type="text" name="apellido"  value="" placeholder="Igrese el apellido" size="44" minlength="5" maxlength="20" pattern="^[a-zA-Z ]*$"
                                               oninvalid="setCustomValidity('Para el Apellido ingrese Caracteres')" oninput="setCustomValidity('')"/></td>
                    </tr>
                    <tr>
                        <td colspan="1">Cédula</td>
                        <td colspan="6"><input type="text" id="cedula" name="cedula" placeholder='Ingreso de la Cedula' pattern=".{10,}" maxlength="10" size="44"/></td>
                    </tr>
                    <tr>
                        <td colspan="1">Teléfono</td>
                        <td colspan="6"><input type="text" name="telefono" value="" placeholder="Ingrese el Telefono" size="44"
                                               pattern="\d+$" oninvalid="setCustomValidity('Ingrese numeros')" oninput="setCustomValidity('')"/></td>
                    </tr>
                    <tr>
                        <td colspan="1">Correo</td>
                        <td colspan="6"><input type="email" name="correo" value="" placeholder="Ingrese el correo Electronico" size="44"
                                               oninvalid="setCustomValidity('Ingresa un correo Valido')" oninput="setCustomValidity('')"/></td>
                    </tr>
                    <tr>
                        <td colspan="1">Fecha de nacimiento</td>
                        <td colspan="6"><input type="date" id="fecha" name="fecha" value="" min="2000-01-01" max="<?php echo date('Y-m-d') ?>" style="width:170px"/></td>
                    </tr>
                    <tr>
                        <td colspan="1">Edad</td> 
                        <td colspan="6"> <input type="text" id="edad" name="edad" value="" placeholder="Muestra la Edad" readonly /></td>
                    </tr>
                    <tr>
                        <td colspan="1">Dirección</td>
                        <td colspan="6"><textarea name="direccion" placeholder="Ingrese su Direccion" cols="42" style="resize: none" placeholder="Ingrese la direccion">
                            </textarea> </td> 
                    </tr>

                    <tr>
                        <td colspan="7">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="subtitulo"  colspan="7">Detalle del producto</td>
                    </tr>                  
                    <tr>
                        <td>Producto</td>
                        <td colspan="2"> 
                            <select name="producto" required style="width:120px">
                                <option value="">--Opciones--</option>
                                <option value="interioir">1. Pintura</option>
                                <option value="exterior">2. Pintura Exterioir</option>
                                <option value="esmalte">3. Pintura Esmalte</option>
                            </select>
                        </td>

                        <td colspan="2">Color</td>     
                <img id="espacio" style="background-color: #679ECA" src="https://raw.githubusercontent.com/NestorPlasencia/img/master/sala.png">
                <td colspan="3" style="text-align: center">  
                    <input type="color" id="favcolor" name="color" value="#679ECA" onchange ="cambiarcolor()"/>
                </td>     
                </tr>
                <tr>
                    <td>Tipo de pintura</td>
                    <td colspan="2">
                        <input type="radio" name="tipo" value="plastico" />Plastico <br>
                        <input type="radio" name="tipo" value="acrilico" checked="checked" />Acrilico <br>
                        <input type="radio" name="tipo" value="sintetico" />Sintetico <br>
                    </td>
                    <td colspan="2">Densidad</td>
                    <td colspan="2">
                        <input type="checkbox" id="d1" name="densidad[]" value="1"  onclick="uncheckDensidad()" checked="true"/>Baja<br>
                        <input type="checkbox" id="d2" name="densidad[]" value="2" onclick="uncheckDensidad()" />Media<br>
                        <input type="checkbox" id="d3" name="densidad[]" value="3" onclick="uncheckDensidad()"/>Alta<br>
                    </td>
                <tr>
                    <td>Rango</td>
                    <td colspan="2" >
                    <input type="range" name="rango" id="rango" onchange="document.getElementById('numero').value=value" style="width: 105px" min="0" max="100" step="5" />
                    <output id="numero" name="salida" for="rango">50</output>    
                      
                    </td>
                    <td colspan="2">Cantidad</td>
                    <td colspan="2">
                        <input type="number" name="cantidad" min="1" max="8" step="2"style="width: 85px"/>
                    </td>
                </tr>


                </tr>
                <tr>
                    <td colspan="1">Url página</td>
                    <td colspan="6"> <input type="url" name="urls" value="" size="44" /></td>
                </tr>

                <tr>
                    <td colspan="7">&nbsp;</td>
                </tr>
                <tr>
                    <td class="subtitulo"  colspan="7">Plan de pago</td>
                </tr>               
                <tr>
                    <td>Crédito</td>
                    <td colspan="2"> <input type="checkbox" name="credito[]" value="credito" checked="checked"/></td>                   
                    <td colspan="4">Plazo de pago</td>                    
                </tr>
                <tr>
                    <td>Contado</td>
                    <td colspan="2"> <input type="checkbox" name="credito[]" value="pago1" /></td>
                    <td>            <input type="radio" name="pago" checked="true" value="" /> 3 meses </td>     
                    <td colspan="3"><input type="radio" name="pago" value="pago2" />6 meses </td> 

                </tr>
                <tr>
                    <td>Tarjeta</td>
                    <td colspan="2"> <input type="checkbox" name="credito[]" value="tarjeta" /></td>                    
                    <td>Total</td>
                    <td colspan="3"><input type="text" name="total" value="" size="8" /> </td>
                </tr>

                <tr>
                    <td colspan="7">&nbsp;</td>
                </tr>                    
                <tr>
                    <td class="subtitulo" colspan="7">Datos de entrega</td>
                </tr>               
                <tr>
                    <td>Fecha</td>
                    <td colspan="2"><input type="date" name="fechaEntrega" value="" min="2000-01-01" max="<?php echo date('Y-m-d') ?>" /> </td>

                    <td rowspan="2">Día entrega</td>
                    <td colspan="3"> <input type="checkbox" id="e1" name="entrega" value="Martes" onclick="uncheckEntrega()"/> Martes</td>                   

                </tr>
                <tr>
                    <td>Hora</td>
                    <td colspan="2"><input type="time" name="hora" value="" min="00:00" max="24:00" step="2"/> </td>
                    <td colspan="3"> <input type="checkbox" id="e2" name="entrega" value="Jueves" onclick="uncheckEntrega()" checked="checked"/> Jueves</td>          
                </tr>
                <tr>
                    <td>Persona que le atendió</td>
                    <td colspan="2"><input type="text" name="persona" value="" size="16" placeholder="Que Pérsona le Atendio" pattern="^[a-zA-Z ]*$"/> </td>
                    <td>Contrato</td>
                    <td colspan="3"><input type="text" name="codigo" value="" size="8"  pattern="^[a-zA-Z ]*$"/> </td>
                </tr>
                <tr>
                    <td>Fecha de inscripción</td>
                    <td colspan="6"> <input type="text" name="inscripcion" value="<?php echo date('F j, Y,h:i:s a',time()) ?>"/></td>
                </tr>
                </tbody>
            </table>
            <div>
                <input type="submit" value="Guardar" name="enviar" onclick="validarCedula()"/>
                <input type="reset" value="Limpiar"/><br>
            </div>
        </form>
        <script src="validaciones.js" type="text/javascript"></script>
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
if(isset($_POST['enviar'])){
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$cedula= $_POST['cedula'];
$telefono= $_POST['telefono'];
$correo= $_REQUEST['correo'];
$edad= $_REQUEST['edad'];
$direc= $_REQUEST['direccion'];
$color= $_POST['color'];
$tipo= $_POST['tipo'];
//$cursos= $_POST['densidad[]'];
$rango= $_POST['rango'];
$cantidad= $_POST['cantidad'];
$url= $_POST['urls'];
//$cursos= $_POST['credito[]'];
$fechaEn= $_POST['fechaEntrega'];
$entrega= $_POST['entrega'];
$hora= $_POST['hora'];
$persona= $_POST['persona'];
$codigo= $_POST['codigo'];
$insc= $_POST['inscripcion'];

echo "<br> Nombre: $nombre <br>Apellido:$apellido <br>Cedula:$cedula <br>Telefono:$telefono <br>correo:$correo <br>Edad:$edad "
        . "<br>Direccion:$direc <br>Color:$color <br>Tipo:$tipo";
echo"<br>Desidad: <br>";
foreach($_POST['densidad']as $temp){
    echo "<li>".$temp."</li>";
}
echo "Rango: $rango  <br>cantidad: $cantidad <br>URL: $url";
echo"<br>Plan de Pago: <br>";
foreach($_POST['credito']as $temp){
    echo "<li>".$temp."</li>";
}
echo "Fecha Entrega: $fechaEn  <br>Entrega: $entrega <br>Hora: $hora <br>Persona que Atendio: $persona <br>Contrato: $codigo<br>Inscripcion: $insc <br>";
}
?>


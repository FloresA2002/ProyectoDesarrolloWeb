<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Solicitud</title>
        <script src="calculos.js" type="text/javascript"></script>
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
                        
            
            *{
                margin:3px;
                padding:3px;
                box-sizing: border-box;  
            }

            table.borde{
                border: black 3px solid;
                padding: 30px 50px 5px 50px; 
                margin: 30px 10px 10px 10px;
            }  
            .titulo{
                background: rgb(220,213,213);
                font-size: 20px;
            }

            .cuerpo{
                margin:auto;
                background: rgb(241,238,238);
            }

            .cerca {
                background: rgb(209 ,230 ,237);
                border: black 3px dashed;
                width:700px;
            }
            h3{
                padding-top: 50px; 
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
                        <li><a href="index.php">Prueba Practica</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <br>
    <center>
        <div class="cerca">
            <h3>Solicitud pago horas extras</h3>
            <form action="datos.php" method="POST">
                <table class="borde">
                    <tr>
                        <th><input type="checkbox" name="extras[]" value="1"/> Día completo</th>
                        <th><input type="checkbox" name="extras[]" value="0.25" checked="checked"/> Horas al 25%</th>
                        <th><input type="checkbox" name="extras[]" value="0.5"/> Horas al 50%</th>
                        <th><input type="checkbox" name="extras[]" value="1"/> Horas al 100%</th>
                    </tr>
                </table>

                <table class="cuerpo">
                    <thead class="titulo">
                        <tr>
                            <th colspan="4">Datos del solicitante</th>
                        </tr>
                    </thead>

                    <td>Nombres</td>
                    <td><input type="text" style="width:250px" name="nombre" value="" required pattern="^[a-zA-Z ]*$" placeholder="Ingrese su Nombre"/></td>
                    <td>Sexo</td>
                    <td><input type="radio" name="sexo" value="Masculino" checked="checked" required />M
                        <input type="radio" name="sexo" value="Femenino"/>F</td>
                    <tr>
                        <td>Evento Fecha</td>
                        <td class="ancho">Día<input type="number" pattern="[0-9,]+[^.]" style="width:45px" name="dia" value="" min="1" max="31" required/>
                            Mes<input type="number" style="width:50px" pattern="[0-9,]+[^.]" name="mes" value="" min="1" max="12" required/>
                            Año<input type="text" style="width:50px" pattern="[0-9,]+[^.]" name="anio" value="<?php echo date('Y') ?>" required readonly /></td>

                    </tr>
                    <tr>
                        <td>Cédula</td>
                        <td><input type="text" style="width:250px" id="cedula" name="cedula" value="" maxlength="10" required placeholder="Ingrese su Cedula"/></td>
                        <td>Teléfono</td>
                        <td><input type="text" style="width:135px" name="telefono" value="" minlength="9"  pattern="\d+$" maxlength="10" placeholder="Ingrese su Telefono" required/></td>

                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><input type="text" style="width:250px" name="direccion" value="" required placeholder="Ingrese su Direccion"/></td>

                        <td>Fecha de <br>nacimiento :</td>
                        <td><input type="date" id="fecha" name="fecha" value="" min="2000-01-01" max="<?php echo date('Y-m-d') ?>" required /></td>

                        <td><input type="hidden" name="edad" value="" id="edad"/></td>
                    </tr>


                </table>
                <br>
                <table class="cuerpo">
                    <thead class="titulo">
                        <tr>
                            <th colspan="4">Petición de horas</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>Petición a</td>
                        <td><input type="text" style="width:250px" name="peticion" value="" required pattern="^[a-zA-Z ]*$" placeholder="Ingrese la Persona de la Peticion "/></td>
                        <td>Cargo</td>
                        <td><select name="cargo" style="width:165px">
                                <option value="">-- Seleccione --</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Tecnico">Técnico</option>
                                <option value="Otro">Otro</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Pago</td>
                        <td>Horas<input type="number" step="1" style="width:40px" name="pago" value="" min="1" max="100" required/>
                            Precio
                            <input type="number" step="0.01" style="width:116px" pattern="[0-9,]+[^.]" name="precio" value="" min="1" max="100" required/></td>
                    </tr>
                    <tr>
                        <td>E-Mail</td>
                        <td><input type="email" style="width:250px" name="mail" value="" required placeholder="Ingrese su Correo"/></td>
                        <td>Aceptar</td>
                        <td align="center"><input type="checkbox" id="aceptar" name="aceptar" value=""/></td>
                    </tr>
                    <tr>
                        <td>Observación</td>
                        <td><textarea name="obs" rows="3" cols="30" required placeholder="Ingrese alguna Observacion"></textarea></td>
                    </tr>

                </table>
                <table>
                    <tr>
                        <td><input type="submit" value="Envio" name="enviar" onclick="validarCedula()"/></td>

                    </tr>                
                </table>

            </form>
        </div>
    </center>
</body>
</html>
<script>
        function validarCedula(){
            var cedula = document.getElementById("cedula").value;
            var aceptar = document.getElementById("aceptar");
        if(aceptar.checked === false){
            alert("Para Mostrar los Datos ingresados Seleccione el Item 'Aceptar'!!!");
            event.preventDefault();
        }else{
        
        array = cedula.split("");
        num = array.length;
        if (num === 10)
        {
            total = 0;
            digito = (array[9] * 1);
            for (i = 0; i < (num - 1); i++) {
                mult = 0;
                if ((i % 2) !== 0) {
                    total = total + (array[i] * 1);
                } else {
                    mult = array[i] * 2;
                    if (mult > 9)
                        total = total + (mult - 9);
                    else
                        total = total + mult;
                }
            }
            decena = total / 10;
            decena = Math.floor(decena);
            decena = (decena + 1) * 10;
            final = (decena - total);
            if ((final === 10 && digito === 0) || (final === digito)) {
            } else
            {
                alert("La cédula NO es válida!!!");
                event.preventDefault();
            }
        } else
        {
            alert("La cédula ser de de 10 dígitos exactos");
            event.preventDefault();
        }
    }
    var credito = document.getElementsByName("extras[]");
        var contador = 0;
        for (var i = 0; i < credito.length; i++) {
            if (credito[i].checked) {
                contador++;
            }
        }
        if (contador === 0) {
            alert('Selecicone Sus Horas Extras');
            event.preventDefault();
    }
    }
    </script>


<script>
    var edad = document.querySelector('#edad');
    var fecha = document.querySelector('#fecha');
    var anioSistema = new Date().getFullYear();

    fecha.addEventListener('change', () => {
        var fechaNacimiento = fecha.value;
        const anioNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
        var edadObtenida = anioSistema - anioNacimiento;
        edad.value = `${edadObtenida} años`;
    });
</script>


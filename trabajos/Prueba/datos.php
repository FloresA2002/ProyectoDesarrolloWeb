<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Formulario</title>
        <style>
            
            *{
                margin:3px;
                padding:3px;
                background-color: #cfd9ff;  
            }
            
            .titulo{
                text-align: center;
                font-size: 30px;
                border: 10px solid aquamarine;
                background-color: cornflowerblue;
            }
            .contenido{
                border: 10px solid aquamarine;
                background-color: bisque;
                text-justify: inherit;
                font-size: 20px;
                margin: 30px;
            }
            .extra{
                background-color: bisque;
                text-justify: inherit;
                font-size: 20px;
            }
            b{
                background-color: bisque;
                text-justify: inherit;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_POST['enviar'])) {
            $extras = $_POST['extras'];
            $nombre = $_POST['nombre'];
            $sexo = $_POST['sexo'];
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $anio = $_REQUEST['anio'];
            $cedula = $_REQUEST['cedula'];
            $telefono = $_POST['telefono'];
            $direccion = $_REQUEST['direccion'];
            $fecha = $_POST['fecha'];
            $edad = $_POST['edad'];
            $peticion = $_POST['peticion'];
            $cargo = $_POST['cargo'];
            $pago = $_POST['pago'];
            $precio = $_POST['precio'];
            $mail = $_POST['mail'];
            $obser = $_POST['obs'];
            $total = $pago*$precio;
            
            echo "<br><br><div class='titulo'>DATOS INFORMATIVOS</div>";
            
            echo"<div class='contenido'>";
            echo"<b>Tipo de Solicitud:</b><br><br>";
            foreach ($_POST['extras']as $temp) {
                echo "<li class='extra'>" . $temp . "</li>";
            }
            echo "<br>Nombre: $nombre <br><br> Sexo: $sexo</tr><br>";
            echo "<br>Fecha: Dia :  $dia  Mes :  $mes  Año:  $anio<td>";
            echo "<br><br>Cedula: $cedula  <br><br>Fecha de Nacimiento: $fecha <br> <br>Edad: $edad<br></td>";
            echo "<br><b>Peticion a:</b><br>";
            echo "<br>Encargado: $peticion <br> <br>Cargo: $cargo  <br> <br>Total:($pago * $precio) = $total <br><br></td>";
            echo "Correo: $mail  <br><br> Observacion: $obser <br></td>";
            echo"</div>";
            
        }
        ?>
        
    </body>
</html>

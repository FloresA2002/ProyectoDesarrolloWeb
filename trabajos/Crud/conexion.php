<?php

$conn= new mysqli("localhost","root","","bdd_imagenes");
if($conn->connect_error){
    echo "Codigo del error ".$conn->connect_errno
            ."<br> Detalle :".$conn->connect_error;
}else{
//    echo"Conexion Exitosa";
}
        
?>


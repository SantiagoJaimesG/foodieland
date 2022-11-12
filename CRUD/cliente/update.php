<?php

include("conexion.php");
$con=conectar();

$cod_contacto=$_POST['cod_contacto'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$sql="UPDATE contacto SET  nombre='$nombre',email='$email',mensaje='$mensaje' WHERE cod_contacto='$cod_contacto'";
$query=mysqli_query($con,$sql);

    if($query){
        include("cliente.php");
    }
?>
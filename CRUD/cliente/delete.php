<?php

include("conexion.php");
$con=conectar();

$cod_contacto=$_GET['id'];

$sql="DELETE FROM contacto  WHERE cod_contacto='$cod_contacto'";
$query=mysqli_query($con,$sql);

    if($query){
        include("cliente.php");
    }
?>

<?php

include("conexion.php");
$con=conectar();

$cod_galleta=$_GET['id'];

$sql="DELETE FROM galletas  WHERE cod_galleta='$cod_galleta'";
$query=mysqli_query($con,$sql);

    if($query){
        include("galletas.php");
    }
?>

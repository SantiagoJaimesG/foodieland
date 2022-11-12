<?php

include("conexion.php");
$con=conectar();

$cod_dulce=$_GET['id'];

$sql="DELETE FROM dulces  WHERE cod_dulce='$cod_dulce'";
$query=mysqli_query($con,$sql);

    if($query){
        include("dulces.php");
    }
?>

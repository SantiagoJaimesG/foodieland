<?php

include("conexion.php");
$con=conectar();

$cod_postre=$_GET['id'];

$sql="DELETE FROM postres  WHERE cod_postre='$cod_postre'";
$query=mysqli_query($con,$sql);

    if($query){
        include("postres.php");
    }
?>

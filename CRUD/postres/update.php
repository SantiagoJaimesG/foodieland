<?php

include("conexion.php");
$con=conectar();

$cod_postre=$_POST['cod_postre'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE postres SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_postre='$cod_postre'";
$query=mysqli_query($con,$sql);

    if($query){
        include("postres.php");
    }
?>
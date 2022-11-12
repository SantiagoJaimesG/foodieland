<?php

include("conexion.php");
$con=conectar();

$cod_galleta=$_POST['cod_galleta'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE galletas SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_galleta='$cod_galleta'";
$query=mysqli_query($con,$sql);

    if($query){
        include("galletas.php");
    }
?>
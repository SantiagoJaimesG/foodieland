<?php

include("conexion.php");
$con=conectar();

$cod_dulce=$_POST['cod_dulce'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE dulces SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_dulce='$cod_dulce'";
$query=mysqli_query($con,$sql);

    if($query){
        include("dulces.php");
    }
?>
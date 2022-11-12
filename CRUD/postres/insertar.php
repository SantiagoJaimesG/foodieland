<?php
include("conexion.php");
$con=conectar();

$cod_postre=$_POST['cod_postre'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO postres VALUES('$cod_postre','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    include("postres.php");
    
}else {
}
?>
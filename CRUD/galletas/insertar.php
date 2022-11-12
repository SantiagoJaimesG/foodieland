<?php
include("conexion.php");
$con=conectar();

$cod_galleta=$_POST['cod_galleta'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO galletas VALUES('$cod_galleta','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    include("galletas.php");
    
}else {
}
?>
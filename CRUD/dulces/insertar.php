<?php
include("conexion.php");
$con=conectar();

$cod_dulce=$_POST['cod_dulce'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO dulces VALUES('$cod_dulce','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    include("dulces.php");
    
}else {
}
?>
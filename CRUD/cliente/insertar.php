<?php
include("conexion.php");
$con=conectar();

$cod_contacto=$_POST['cod_contacto'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];


$sql="INSERT INTO contacto VALUES('$cod_contacto','$nombre','$email','$mensaje')";
$query= mysqli_query($con,$sql);

if($query){
    include("cliente.php");
    
}else {
}
?>
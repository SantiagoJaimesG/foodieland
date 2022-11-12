<?php
$servername = "localhost";
$username = "root";
$password = "san18";
$dbname = "proyectocrud";

$cod_contacto=$_POST["cod_contacto"];
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contacto (cod_contacto, nombre, email, mensaje) VALUES ('$cod_contacto', '$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include("contacto.html");
?>
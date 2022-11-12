<?php
function conectar(){
    $host="localhost";
    $user="id19817964_root";
    $pass="Santiago18#";

    $bd="id19817964_proyectocrud";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>

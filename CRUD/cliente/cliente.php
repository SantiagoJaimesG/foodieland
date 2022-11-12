<?php 
    $host="localhost";
    $user="id19817964_root";
    $pass="Santiago18#";

    $bd="id19817964_proyectocrud";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    $sql="SELECT *  FROM contacto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/VistaVolver1.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                <div class="volver"><a href="../crud.html"><img src="https://cdn-icons-png.flaticon.com/512/32/32170.png"></a></div>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Cliente</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_contacto" placeholder="cod contacto">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="mensaje" placeholder="Mensaje">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Mensaje</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_contacto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><?php  echo $row['mensaje']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_contacto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_contacto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
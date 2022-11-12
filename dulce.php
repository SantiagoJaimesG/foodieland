<?php
	$servername = "localhost";
	$username = "root";
	$password = "san18";
	$dbname = "proyectocrud";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dulces</title>
	<link rel="stylesheet" type="text/css" href="css/VistaCategorias2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="contenedor">
	<div class="padre1">
		<div class="hijo1"> 
			<div class="logo"><img src="img\foodieland.png"></div>
			<div class="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="contacto.html">Contactanos</a></li>
					<li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
				</ul>
			</div>
		</div>
		<div class="hijo2">
			<div class="face"><a href="https://www.facebook.com/salchipapaaaaaa/"><img src="img/fb.png"></a></div>
			<div class="twitter"><a href="https://twitter.com/Santiagoooooo17"><img src="img/twt.png"></a></div>
			<div class="insta"><a href="https://www.instagram.com/jaimes.santiago/"><img src="img/ig.png"></a></div>
		</div>
		<div class="menudes"><img src="img/menu.png"></div>
	</div>
	<hr>
	<div class="desplegable">
		<div class="x"><img src="img/x.png"></div>
		<div class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="contacto.html">Contactanos</a></li>
				<li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
			</ul>
		</div>
		<div class="hijo2">
			<div class="face"><a href="https://www.facebook.com/salchipapaaaaaa/"><img src="img/fb.png"></a></div>
			<div class="twitter"><a href="https://twitter.com/Santiagoooooo17"><img src="img/twt.png"></a></div>
			<div class="insta"><a href="https://www.instagram.com/jaimes.santiago/"><img src="img/ig.png"></a></div>
		</div>
	</div>
	<div class="padre2">
		<div class="title"><h1>Dulces</h1></div>
		<div class="productos">
			<?php
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM dulces";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
				    echo "<div class='producto'><div><h3>".$row["nombre"]."</h3></div><br><div><img src='".$row["imagen"]."'></div><br><div class='descripcion'><p>".$row["descripcion"]."</p></div><br><div><h2>$".$row["precio"]."</h2></div><br><div class='comprar'><div class='img'><img src='img/wpp.png'></div><a href='https://api.whatsapp.com/send?phone=573006154155'>Comprar</a></div><button onclick='cerrar()'>Volver</button></div>";
				  }
				} else {
				  echo "0 results";
				}
				$conn->close();
			?>
		</div>
		
	</div>
	<div class="popup">
		
	</div>

	<div class="padre3">
		<div class="arriba">
			<div class="izq">
				<div class="logo"><img src="img/foodieland.png"></div>
				<div class="text">La mejor pasteleria de la ciudad</div>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="contacto.html">Contactanos</a></li>
					<li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="derechos"><p>© 2022 Copyright. Powered by Santiago Jaimes</p></div>
	</div>

	<div class="oculto">
		<div class="arriba">
			<div class="izq">
				<div class="logo"><img src="img/foodieland.png"></div>
				<div class="text">La mejor pasteleria de la ciudad</div>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="contacto.html">Contactanos</a></li>
					<li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="derechos"><p>© 2022 Copyright. Powered by Santiago Jaimes</p></div>
	</div>
</div>

<script>
	$(".producto").click(function () {
		//traer todo el contenido
		let contenido= $(this).html();
		$(".popup").html(contenido);		
		$(".popup , .popup .descripcion , .popup button, .oculto").show();
		$(".padre2, .padre3").hide();
	});
	function cerrar() {		
		$(".popup, .oculto").hide();
		$(".padre2, .padre3").show();
	};

	$(".contenedor .padre1 .menudes").click(function(){
		$(".desplegable").fadeIn();
	});

	$(".contenedor .desplegable .x").click(function(){
		$(".desplegable").fadeOut();
	});
</script>
</body>
</html>
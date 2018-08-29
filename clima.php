
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Clima gt</title>
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>

<?php
	include "info.php";
	$con = OpenCon();
	if($con == NULL)
	{
	    echo "<h2>No se ha podido conectar PHP - MySQL, verifique sus datos.</h2><br>";
	}
	else
	{
	  #  echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";	    

		#CloseCon($con);
	}
?>

<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Clima GT </a></h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php" accesskey="1" title="">Inicio</a></li>
					<li><a href="mapa.php" accesskey="2" title="">Mapa</a></li>
					<li class="active"><a href="clima.php" accesskey="3" title="">Clima</a></li>
					<li><a href="#" accesskey="4" title="">Integrantes</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="featured-wrapper">
		<div id="featured" class="container">
			<header>Escoge una Ubicacion Para Ver sus Graficas</header>
			<form action="a.php" method="POST">  
		<div class="caja">
  			<select name="opc">
			    <option value="1">San Lucas Sacatepéquez</option>
			    <option value="2">Colonia El Bucaro</option>
			    <option value="3">Fuentes del Valle I</option>
			    <option value="4">Residencial Petapa</option>
			    <option value="5">Antigua Guatemala</option>

  			</select>
		</div>
		<br>
			<input type="submit" value="Ver Graficas" class="button">
			</form>
		</div>
	</div>
<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="fbox1">
			<header>Integrantes</header>
			<p>Dennis Alejandro Masaya Nájera <b>201503413</b><br>
			Jorge Daniel Monterroso Nowell <b>201504303</b><br>
			Josseline Suseth Godinez Garcia <b>201503841</b><br>
			Pablo Javier Blanco Calderon <b>201504242</b><br>
			Eddy Javier Sirin Hernandez <b>201503699</b><br>
			Paublo Alejandro Martínez Gómez <b>201313876</b></p>
		</div>
		<div id="fbox2">
			<header>Sensores Utilizados</header>
			<p>Sensor humedad</p>
			<p>Sensor de radiación</p>
			<p>Sensor de temperatura</p>
			<p>Sensor de presión atmosférica</p>
		</div>
	</div>
</div>
	<div id="copyright" class="container">
		<p>&copy; ClimaGT</p>
	</div>
</body>
</html>

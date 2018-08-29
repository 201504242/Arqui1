
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Clima gt</title>
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="functions.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC4gGwzp8DJ5M5xE_N7JWDMEynwnRhlOhI&callback=initialize"></script>
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
	   # echo "<h3>Conexion Exitosa PHP / MySQL</h3><hr><br>";	    
		#TEMPERATURA
		$x= avgTemp($con);
		$miarray = array();
		while ($row = mysqli_fetch_array($x,MYSQLI_BOTH)) {
        	array_push($miarray,doubleval($row["te"]),doubleval($row["Latitud"]), doubleval($row["Longitud"]));
        }
        $botonTemp = "temp(". json_encode($miarray).")";
        #UV
        $x= avgUV($con);
		$miarray = array();
		while ($row = mysqli_fetch_array($x,MYSQLI_BOTH)) {
        	array_push($miarray,doubleval($row["te"]),doubleval($row["Latitud"]), doubleval($row["Longitud"]));
        }
        $botonUV = "UV(". json_encode($miarray).")";
        #presion
        $x= avgPresion($con);
		$miarray = array();
		while ($row = mysqli_fetch_array($x,MYSQLI_BOTH)) {
        	array_push($miarray,doubleval($row["te"]),doubleval($row["Latitud"]), doubleval($row["Longitud"]));
        }
        $botonPresion = "presion(". json_encode($miarray).")";
        #humedad
        $x= avgHumedad($con);
		$miarray = array();
		while ($row = mysqli_fetch_array($x,MYSQLI_BOTH)) {
        	array_push($miarray,doubleval($row["te"]),doubleval($row["Latitud"]), doubleval($row["Longitud"]));
        }
        $botonHumedad = "humedad(". json_encode($miarray).")";
        CloseCon($con);
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
					<li class="active"><a href="mapa.php" accesskey="2" title="">Mapa</a></li>
					<li><a href="clima.php" accesskey="3" title="">Clima</a></li>
					<li><a href="#" accesskey="4" title="">Integrantes</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="banner-wrapper">
		<div id="banner" class="container">
			<table CELLPADDING ="25" border="0">
				<tr  align="center">
					<td ><b >TEMPERATURA</b></td>
					<td ><b>RADICACION UV</b></td>
					<td ><b>PRESION AT</b></td>
					<td ><b>HUMEDAD</b></td>

				</tr>
				<tr>
					<td><img src="images/temp.png" width="200" height="200" onclick="<?php echo "".$botonTemp; ?>"></td>
					<td><img src="images/radiacion.png" width="200" height="200" onclick="<?php echo "".$botonUV; ?>"></td>
					<td><img src="images/pres.png" width="200" height="200" onclick="<?php echo "".$botonPresion; ?>"></td>
					<td><img src="images/hum.png" width="200" height="200" onclick="<?php echo "".$botonHumedad; ?>"></td>
				</tr>
			</table>
			<p>Promedio por Lugar(Latitud y Longitud)</p>
			<div id="googleMap" style="width:100%;height:400px;"></div>
		</div>
	</div>

<div id="page-wrapper">
	<div id="page" class="container">
		<div id="content">
			
		</div>
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

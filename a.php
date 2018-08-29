<?php 

// MySQL database connection code
$connection = mysqli_connect("35.225.49.177","arqui","iotdatos","datos") or die("Error " . mysqli_error($connection));
//Fetch productos data
$opcion = $_POST["opc"];
settype($Latitud,"float");
settype($Longitud,"float");
switch ($opcion)
{
	case 1:		
		$Latitud = 14.6068457 ;
		$Longitud = -90.655805 ;
		break;
	case 2:		
		$Latitud = 14.5377672;
		$Longitud = -90.5656025;
		break;
	case 3:		
		$Latitud = 14.525401;
		$Longitud = -90.555021;
		break;
	case 4:		
		$Latitud = 14.534415;
		$Longitud =-90.5548459 ;
		break;
		break;
	case 5:		
		$Latitud = 14.551512 ;
		$Longitud = -90.7353591 ;
		break;
}

$sql = "select * from Clima where Latitud = ". $Latitud ." and Longitud = ". $Longitud .";";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

$numFilas = mysqli_num_rows($result);
$datos[0] = array('Hora','Temperatura');

for ($i=1; $i<($numFilas+1); $i++)
{
	mysqli_data_seek($result, $i-1);
	$row = mysqli_fetch_array($result);
    $datos[$i] = array($row["Hora"] , (int) $row["Temperatura"],);
}

$datosRad[0] = array('Hora','Radiacion');

for ($i=1; $i<($numFilas+1); $i++)
{
	mysqli_data_seek($result, $i-1);
	$row = mysqli_fetch_array($result);
    $datosRad[$i] = array($row["Hora"] , (int) $row["Radiacion"],);
}

$datosPres[0] = array('Hora','Presion');

for ($i=1; $i<($numFilas+1); $i++)
{
	mysqli_data_seek($result, $i-1);
	$row = mysqli_fetch_array($result);
    $datosPres[$i] = array($row["Hora"] , (int) $row["Presion"],);
}

$datosHum[0] = array('Hora','Humedad');

for ($i=1; $i<($numFilas+1); $i++)
{
	mysqli_data_seek($result, $i-1);
	$row = mysqli_fetch_array($result);
    $datosHum[$i] = array($row["Hora"] , (int) $row["Humedad"],);
}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Clima gt</title>
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" > </script>
	<!-- Load the AJAX API -->
	<script type="text/javascript" src="https://www.google.com/jsapi" > </script>
	<script type="text/javascript"
	src="https://www.google.com/jsapi?autoload={
	'modules':[{
	'name':'visualization',
	'version':'1',
	'packages':['corechart']
	}]
	}"></script>

<script type="text/javascript">
		google.setOnLoadCallback(drawChart);
		 
		function drawChart() {
		 
		//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
		var cargaDatos = <?php echo json_encode($datos); ?>;
		 
		var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
		 
		var options = {
		title: 'Temperatura',
		curveType: 'function',
		legend: { position: 'bottom' }
		};
		 
		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
		 
		chart.draw(datosFinales, options);
		}		 
</script>

<script type="text/javascript">
		google.setOnLoadCallback(drawChart);
		 
		function drawChart() {
		 
		//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
		var cargaDatos = <?php echo json_encode($datosRad); ?>;
		 
		var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
		 
		var options = {
		title: 'Radiacion',
		curveType: 'function',
		legend: { position: 'bottom' }
		};
		 
		var chart = new google.visualization.LineChart(document.getElementById('Radiacion'));
		 
		chart.draw(datosFinales, options);
		}		 
</script>

<script type="text/javascript">
		google.setOnLoadCallback(drawChart);
		 
		function drawChart() {
		 
		//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
		var cargaDatos = <?php echo json_encode($datosPres); ?>;
		 
		var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
		 
		var options = {
		title: 'Presion',
		curveType: 'function',
		legend: { position: 'bottom' }
		};
		 
		var chart = new google.visualization.LineChart(document.getElementById('Presion'));
		 
		chart.draw(datosFinales, options);
		}		 
</script>

<script type="text/javascript">
		google.setOnLoadCallback(drawChart);
		 
		function drawChart() {
		 
		//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
		var cargaDatos = <?php echo json_encode($datosHum); ?>;
		 
		var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
		 
		var options = {
		title: 'Humedad',
		curveType: 'function',
		legend: { position: 'bottom' }
		};
		 
		var chart = new google.visualization.LineChart(document.getElementById('Humedad'));
		 
		chart.draw(datosFinales, options);
		}		 
</script>
</head>
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

<div id="curve_chart" style="width: 1348px; height: 500px"></div>

<div id="Radiacion" style="width: 1348px; height: 500px"></div>
<div id="Presion" style="width: 1348px; height: 500px"></div>
<div id="Humedad" style="width: 1348px; height: 500px"></div>

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
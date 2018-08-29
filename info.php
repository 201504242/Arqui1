<?php
function OpenCon()
 {
	$dbhost = '35.225.49.177';
	$dbuser='arqui';
	$dbpass='iotdatos';
	$db='datos';
    $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	return $con;
}
 
function CloseCon($conn)
{
	$conn -> close();
}

function avgTemp($con)
{
	if ($result = mysqli_query($con,"SELECT Latitud,Longitud,AVG(Temperatura) as te FROM Clima GROUP BY Latitud,Longitud")) {
			#$field_cnt = mysqli_num_fields($result);

		   # printf("El resultset tiene %d campos.\n", $field_cnt);

		   # while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
		    	#print $row;
		    	#$temp = $row[1];
		    	#$temp = (string)$temp;
		    #	echo "Longitud: " . $row["Longitud"]. " - Latitud: " . $row["Latitud"] . "ot" . $row["te"];
		     #   echo "Fecha: " . $row["Fecha"]. " - Hora: " . $row["Hora"]. " -Latitud: " . $row["Latitud"];
		      # echo "Longitud: " . $row["Longitud"]. " - v: " . $row["Temperatura"]. " -Radiacion: " . $row["Radiacion"];
		       # echo "Presion: " . $row["Presion"]. " - Humedad: " . $row["Humedad"]. "<br>";
		    #}
		    return $result;
		    mysqli_free_result($result);

		} 
		else
		{
	    	echo "0 results";
		}
}

function avgUV($con)
{
	if ($result = mysqli_query($con,"SELECT Latitud,Longitud,AVG(Radiacion) as te FROM Clima GROUP BY Latitud,Longitud")) {			
		    return $result;
		    mysqli_free_result($result);
	} 
	else
	{
	  	echo "0 results";
	}
}

function avgPresion($con)
{
	if ($result = mysqli_query($con,"SELECT Latitud,Longitud,AVG(Presion) as te FROM Clima GROUP BY Latitud,Longitud")) {			
		    return $result;
		    mysqli_free_result($result);
	} 
	else
	{
	  	echo "0 results";
	}
}

function avgHumedad($con)
{
	if ($result = mysqli_query($con,"SELECT Latitud,Longitud,AVG(Humedad) as te FROM Clima GROUP BY Latitud,Longitud")) {			
		    return $result;
		    mysqli_free_result($result);
	} 
	else
	{
	  	echo "0 results";
	}
}
?>
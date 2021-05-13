<!DOCTYPE html>
<html>
<head>
	<title>mostrar</title>
</head>
<body>
<?php

include "conexion.php";
$recibe = mysqli_query($conexion,"select * from encabezado");
$recibe1 = mysqli_query($conexion,"select * from cuerpo");

while($r1=mysqli_fetch_array($recibe))
{
	echo $r1["nombreCli"];
} 

while($r2=mysqli_fetch_array($recibe1))
{
	echo $r2["precioTotal"];
}

?>
</body>
</html>
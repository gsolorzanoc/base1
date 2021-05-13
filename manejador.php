<?php

include "conexion.php";

$nc = $_POST["nomcli"];
$ni = $_POST["nitcli"];
$f = $_POST["fecha"];
$nf = $_POST["numfac"];
$sf = $_POST["serfac"];
$c = $_POST["can"];
$np = $_POST["nompro"];
$dp = $_POST["despro"];
$pu = $_POST["precioUnitario"];
$pt= $c*$pu;

mysqli_query($conexion,"INSERT INTO encabezado(nombreCli, nitCli, fecha, numFac, serieFac) values('$nc', '$ni', '$f','$nf','$sf')");
mysqli_query($conexion,"INSERT INTO cuerpo(cantidad, nombrePro, descripcionPro, precioUnitario, PrecioTotal) values('$c','$np','$dp','$pu','$pt')");

echo "datos almacenados<br>";
echo "<a href='index.php'> volver al index</a>";

?>
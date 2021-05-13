<!DOCTYPE html>
<html>
<head>
	<title>FACTURACION</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
<form action="manejador.php" method="post">
<center>
	<font face="Verdana" size="12" color="blue">FACTURACION DE PRODUCTO</font>
	<table border="0">
		<tr>
			<td>Nombre del cliente:</td>
			<td><input type="text" name="nomcli"></td>
		</tr>
		<tr>
			<td>Nit del cliente:</td>
			<td><input type="number" name="nitcli"></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type="date" name="fecha"></td>
		</tr>
		<tr>
			<td>Numero de factura:</td>
			<td><input type="number" name="numfac"></td>
		</tr>
		<tr>
			<td>Serie de factura:</td>
			<td><input type="text" name="serfac"></td>
		</tr>
	</table>
	<br>
	<table border="1">
		<tr>
			<td>Cantidad</td>
			<td>Nombre Producto</td>
			<td>Descripcion</td>
			<td>Precio Unitario</td>
		</tr>
		<tr>
			<td><input type="number" name="can"></td>
			<td><input type="text" name="nompro"></td>
			<td><input type="text" name="despro"></td>
			<td><input type="number" name="precioUnitario"></td>
		</tr>
	</table>
	<br>
	<input type="submit" name="btncompra" value="COMPRAR" class="btn btn-primary">
</center>
</form>
</body>
</html>
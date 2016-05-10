<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<form action="save.php" method="POST">
			<p>Nombre del Producto: <input type="text" name="NameProd"></p>
			<p>Cod. del Producto: <input type="number" name="CodProd"></p>
			<p>Cant. del Producto: <input type="number" name="QuantityProd"></p>
			<p>Precio U: <input type="number" name="Price"></p>
			<input type="submit" value="Guardar">
		</form>
		<form action="select.php" method="POST">
			<p>Codigo del Producto: <input type="number" name="busqueda"></p>
			<input type="submit" value="Buscar">
		</form>
	</body>
</html>
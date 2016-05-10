<?php
	$nameProd=$_POST['NameProd'];
	$codProd=$_POST['CodProd'];
	$quantityProd=$_POST['QuantityProd'];
	$priceProd=$_POST['Price'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stock";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO stock (codProd,nameProd,quantityProd,priceProd) VALUES ('$codProd', '$nameProd', '$quantityProd', '$priceProd')";

	if ($conn->query($sql) === TRUE) {
	    echo "Se guardó correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
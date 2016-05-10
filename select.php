<?php

	$servidor="localhost";
	$usuario="root";
	$pass="";
	$db="stock";

	$bus=$_POST['busqueda'];

	$link=mysql_connect($servidor,$usuario,$pass);
	mysql_select_db($db,$link);

	$sql="SELECT codProd,nameProd,quantityProd,priceProd FROM stock";

	$result=mysql_query($sql,$link);

	while($row=mysql_fetch_array($result)) {
		if( $bus == $row['codProd'] ){
			echo "<b>Codigo del Producto: </b>".$row['codProd']."<b> - Nombre del Producto: ".$row['nameProd']. "</b><b> - Precio: $".$row['priceProd']."</b> - <b>Cant: </b>".$row['quantityProd']."<br> <a href='modific.php?=<php echo '$row['codProd'];?>'>Modificar</a>";
			$modific=$row['codProd'];
		}
	}

?>
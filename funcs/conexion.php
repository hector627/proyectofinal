
<?php
	$mysqli=new mysqli("localhost","root","contraseña2","login"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if($mysqli->connect_error){
		die('error en la conexion' . $mysqli->connect_error);
	}
?>
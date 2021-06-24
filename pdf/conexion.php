<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'bitacora');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
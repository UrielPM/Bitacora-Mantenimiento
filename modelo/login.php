<?php
error_reporting(E_ALL);
require_once 'conexion.php';
$stmt = $db->prepare("SELECT id_usuario FROM usuario where correo=? and pass=? and rol='2'");
$stmt->bind_param('ss', $_POST['correo'],$_POST['pass']);
$stmt->bind_result($id);
$stmt->execute();

if ($stmt->fetch()) {
	session_start();
	$_SESSION['correo'] = $_POST['correo'];
	$_SESSION['id'] = $id;
	header('Location: ../DatosGenerales.php');
	
}
else{
	header("Location: ../index.php");
}

$stmt->close();
?>
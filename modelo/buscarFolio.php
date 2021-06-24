<?php
error_reporting(E_ALL);
require_once 'conexion.php';

session_start();
$stmt = $db->prepare("SELECT nombre, apellido_p,apellido_m,grupo,consecutivo FROM usuario where id_usuario=?");
$stmt->bind_param('i', $_SESSION['id']);
$stmt->bind_result($nombre,$apellido_p,$apellido_m,$grupo,$consecutivo);
$stmt->execute();

$arr = array();

if ($stmt->fetch()) {
	 $arr[] = array('folio' => $grupo.$consecutivo.$nombre.$apellido_p.$apellido_m);
     echo json_encode($arr) ;
}
else{
	header("Location: ../index.php");
}


$stmt->close();
?>
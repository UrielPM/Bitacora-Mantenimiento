<?php
error_reporting(E_ALL);
require_once 'conexion.php';
$obj = json_decode(file_get_contents("php://input"));

$stmt = $db->prepare("INSERT INTO datos_generales (id_datos, empresa, area, direccion, telefono, correo, fecha, marca, descripcion, no_serie, obser_tec, obser_mante) 
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('ssssssssssss', $obj->id_datos, $obj->empresa, $obj->area, $obj->direccion, $obj->telefono, $obj->correo, $obj->fecha, $obj->marca, $obj->descripcion, $obj->no_serie, $obj->obser_tec,
$obj->obser_mante);
$stmt ->execute();

session_start();
$stmt = $db-> prepare("UPDATE usuario SET consecutivo = consecutivo + 1 WHERE id_usuario = ? ");
$stmt->bind_param('i', $_SESSION['id']);
$stmt ->execute();

$stmt ->close();

echo "Registro Almacenado";
?>



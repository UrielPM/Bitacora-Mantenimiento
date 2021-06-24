<?php
error_reporting(E_ALL);
require_once 'conexion.php';

$obj = json_decode(file_get_contents("php://input"));

$stmt = $db->prepare("SELECT id_datos, fecha, marca, no_serie, descripcion, obser_mante FROM datos_generales");
$stmt->bind_result($id_datos, $fecha, $marca, $no_serie, $descripcion, $obser_mante);
$stmt->execute();
$arr = array();
while($stmt->fetch()){
    $arr[] = array('id_datos' => htmlentities($id_datos,ENT_QUOTES, "UTF-8"),
        'fecha' => htmlentities($fecha,ENT_QUOTES, "UTF-8"),
        'marca' => htmlentities($marca,ENT_QUOTES, "UTF-8"),
        'no_serie' => htmlentities($no_serie,ENT_QUOTES, "UTF-8"),
        'descripcion' => htmlentities($descripcion,ENT_QUOTES, "UTF-8"),
        'obser_mante' => htmlentities($obser_mante,ENT_QUOTES, "UTF-8"));
}
$stmt->close();
echo json_encode($arr);
?>
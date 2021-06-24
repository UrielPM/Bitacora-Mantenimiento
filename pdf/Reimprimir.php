<?php
	include 'plantilla3.php';
	require 'conexion.php';
	@session_start();
$pdf=new PDF();  
$pdf->AddPage();
$pdf->SetMargins(30, 25 , 30);


$query="SELECT id_datos, fecha, empresa, area, direccion, telefono,correo, marca, descripcion,no_serie, obser_tec, obser_mante FROM datos_generales 
where id_datos='".$_GET['folio']."'";

$resultado = $mysqli->query($query);

	while($row = $resultado->fetch_assoc()){
		$pdf->setfont('Arial', 'B', 10);

$pdf->cell(65);
$pdf->SetXY(100,55);
$pdf->Cell(-98,2,  utf8_decode($row['id_datos']), 0, 30,'C');
$pdf->Cell(130,-3,  utf8_decode($row['fecha']), 0, 30,'C');
$pdf->Cell(-60,25,  utf8_decode($row['empresa']), 0, 30,'C');
$pdf->Cell(-45,-12,  ($row['area']), 0, 30,'C');
$pdf->Cell(-55,27,  ($row['direccion']), 0, 30,'C');
$pdf->Cell(-117,-13,  ($row['telefono']), 0, 30,'C');
$pdf->Cell(-100,29,  ($row['correo']), 0, 30,'C');
$pdf->Cell(-125,-14,  ($row['marca']), 0, 30,'C');
$pdf->Cell(-35,28,  ($row['descripcion']), 0, 30,'C');
$pdf->Cell(-95,-15,  ($row['no_serie']), 0, 30,'C');
$pdf->Cell(-80,40,  ($row['obser_tec']), 0, 30,'C');
$pdf->Cell(-80,60,  ($row['obser_mante']), 0, 30,'C');


}
//@session_destroy();

$pdf->Output();
?>



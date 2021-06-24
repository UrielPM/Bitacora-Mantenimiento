<?php
ini_set('display_errors', '1');
// ob_start();
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{

		
		
	$this->SetFont('Arial','B',12);
	$this->Ln(10);
	$this->Cell(200,40,utf8_decode('REPORTE DE MANTENIMENTO'),0,0,'C');
	$this->Ln(-3);

	$this->SetFont('Arial','B',12);
	$this->Ln(10);
	$this->Cell(35,45,utf8_decode('Datos Generales'),0,0,'C');
	$this->Ln(-3);

	

	$this->SetFont('Arial','B',12);
	$this->Ln(10);
		$this->Cell(13,43,'Folio:',0,0,'C');
		$this->Cell(250,43,'Fecha:',0,0,'C');
	$this->Ln(-3);
	$this->SetFont ('Arial','',12);
	$this->Ln(20);
	$this->Cell (42,30,'Nombre de la empresa:',0,0,'C');
	$this->Ln(-3);

	$this->SetFont('Arial','',12);
	$this->Ln(10);
	$this->Cell(45,30,utf8_decode('Área a la que pertenece: '),0,0,'C');
	$this->Cell(-73,45,utf8_decode('Dirección: '),0,0,'C');
	$this->Cell(72,60,utf8_decode('Teléfono:'),0,0,'C');
	$this->Cell(-75,75,utf8_decode('Correo:'),0,0,'C');
	$this->Cell(75,90,utf8_decode('Marca:'),0,0,'C');
	$this->Cell(-65,105,utf8_decode('Descripción:'),0,0,'C');
	$this->Cell(66,118,utf8_decode('No. de Serie:'),0,0,'C');
	$this->Cell(-43,130,utf8_decode('Observaciones Técnicas:'),0,0,'C');
	$this->Cell(75,230,utf8_decode('Observaciones antes del mantenimiento:'),0,0,'C');
	$this->Cell(-80,350,utf8_decode('Nombre y Firma del Técnico:'),0,0,'C');
	$this->Cell(250,350,utf8_decode('Nombre y Firma del Cliente:'),0,0,'C');
	$this->Ln(-3);




	$this->Image('images/logo.jpg',4,4,18);
	$this->Ln(20);









			}
				
	}
	//ob_end_flush(); 
?>
<?php
include ('../entidad/conexion2.php');
include('../fpdf/fpdf.php');



$query=" select * from vacante";
$resultado=$mysqli->query($query);

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial', 'B', '12');
$pdf->SetX(10);
$pdf->Cell(40,6, 'idCargo',1,0,'c',1);
$pdf->SetX(50);
$pdf->Cell(50,6, 'idConvocatoria',1,0,'c',1);
$pdf->SetX(100);
$pdf->Cell(50,6, 'cantidad',1,0,'c',1);
$pdf->Ln();
     while($row=$resultado->fetch_assoc())
	 {
		$pdf->SetFont('Arial', '', '12');
		$pdf->SetX(10);
		$pdf->Cell(40,6, $row['idCargo'],1,0,'c',1);
		$pdf->SetX(50);
		$pdf->Cell(50,6, $row['idConvocatoria'],1,0,'c',1);
		$pdf->SetX(100);
		$pdf->Cell(50,6, $row['cantidad'],1,0,'c',1);
	 }
$pdf->Output();
?>
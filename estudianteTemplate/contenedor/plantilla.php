<?php
require ('../fpdf/fpdf.php');
include ('conexion.php');
include ('../../validar.php');

$cedula = $_SESSION['user'];



class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../assets/images/logo14.png', 5, 5, 30);
        $this->setFont('Arial','B','18');
        $this->Cell(30);
        $this->Cell(120,10, 'Solicitud de Apoyo Económico Estudaintil',0,0,'C');

        $this->Ln(20);

    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I', 8);
   
    }
}



$pdf = new PDF();

$pdf->AddPage();

$pdf->SetFont('Arial','B','12');
$pdf->Cell(70,6,'Nombre del evento:',1,0,'C',1);
$pdf->Cell(20,6,'Estudiante Solicitante:',1,0,'C',1);
$pdf->Cell(20,6,'Cédula:',1,0,'C',1);
$pdf->Cell(20,6,'Facultad:',1,0,'C',1);
$pdf->Cell(20,6,'Fecha Inicial:',1,0,'C',1);
$pdf->Cell(70,6,'Fecha Final:',1,0,'C',1);

$pdf->Output();

?>
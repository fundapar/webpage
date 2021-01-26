<?php 
	require('fpdf/fpdf.php');

class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
	    // Logo
	    $this->Image('img-pdfs/f-logo.png',10,0,33);
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    $this->Cell(80);
	    // Título
	    $this->Cell(30,10,'Recibo de Pago');
	    // Salto de línea
	    $this->Ln(20);
	}
	//Tabla Basica
	function BasicTable()
	{
	    
	        $this->Cell(40,7,"HOLA",1);
	    	$this->Ln();
	    
	    
	}
	// Pie de página
	function Footer()
	{
	    // Posición: a 1,5 cm del final
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// Creación del objeto de la clase heredada


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->BasicTable();
$pdf->Output();

	

 ?>
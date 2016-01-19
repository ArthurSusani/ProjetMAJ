<?php $this->layout('layout', ['title' => 'Reservation']) ?>

<?php $this->start('main_content') ?>

<?php
	require('C:/xampp/htdocs/ProjetMAJ/public/assets/fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Hello World !');
	$pdf->Cell(60,20,'ahahahahahaha');
	$pdf->Output();
?>

<?php $this->stop('main_content') ?>
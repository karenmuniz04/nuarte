
<?php

session_start();
if (empty($_SESSION['email'])){
    header("Location: login.php");
}

include './fpdf/fpdf.php';
include './conexao.php';

$pessoas = selectAllPessoa();

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de peças'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","B",10);

foreach ($pessoas as $pessoa){
    $pdf->SetFont('Arial', 'B', 10); 
    $pdf->Cell(35, 10, utf8_decode("Nome: "), 0, 0);
    $pdf->SetFont('Arial', '', 10); 
    $pdf->Cell(0, 10, utf8_decode($pessoa["nome_peca"]), 0, 1);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(35, 10, utf8_decode("Autor: "), 0, 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, utf8_decode($pessoa["autor"]), 0, 1);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(35, 10, utf8_decode("Diretor: "), 0, 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, utf8_decode($pessoa["diretor"]), 0, 1);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(35, 10, utf8_decode("Data: "), 0, 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, formatoData($pessoa["data_peca"]), 0, 1);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(35, 10, utf8_decode("Tema: "), 0, 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, utf8_decode($pessoa["tema"]), 0, 1);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(35, 10, utf8_decode("Resumo: "), 0, 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(0, 10, utf8_decode($pessoa["resumo"]), 0);
    
    $pdf->Ln(5);

    
    $pdf->SetLineWidth(0.2);
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->Ln(5); 
}

$pdf->Output();

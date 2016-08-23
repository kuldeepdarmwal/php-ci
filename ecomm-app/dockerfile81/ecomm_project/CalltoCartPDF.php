<?php
session_start();
require ("CartPDF.php");

// Instanciation of inherited class
$price=$_SESSION['final_price'];
$user=$_SESSION['final_username'];
$pdf = new CartPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->cell(20,20,"Dear $user");
    $pdf->Cell(40,40,"You Shopped for $price");
$pdf->Output();
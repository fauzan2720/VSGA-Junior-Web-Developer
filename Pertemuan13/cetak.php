<?php

require_once("TCPDF/tcpdf.php");
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Fauzan Abdillah');
$pdf->SetTitle('DATA ANGGOTA');
$pdf->SetSubject('DATA ANGGOTA');
$pdf->SetKeywords('DATA ANGGOTA');

$pdf->SetFont('times', '', 11, '', true);

$pdf->setPrintHeader(false);
$pdf->AddPage();

$html = file_get_contents("/storage/ssd2/068/17490068/public_html/html.php");

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output('data-anggota.pdf', 'I');

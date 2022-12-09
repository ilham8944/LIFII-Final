<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "fpdf/fpdf.php";
include '../crud/connect.php'; 


//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('L', 'mm','Letter');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,7,'List Reksadana',0,1,'C');
    $pdf->Cell(10,7,'',0,1,);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,6,'No',1,0,'C');
    $pdf->Cell(100,6,'Nama',1,0,'C');
    $pdf->Cell(100,6,'Jenis',1,0,'C');
    $pdf->Cell(23,6,'1 Tahun',1,0,'C');
    $pdf->Cell(23,6,'3 Tahun',1,1,'C');
    $pdf->SetFont('Arial','',10);
 
//koneksi ke database
// $mysqli = new mysqli("localhost","root","","reksadana");
$no = 1;
$tampil = mysqli_query($conn, "select * from rdpu");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(10,6,$no++,1,0);
    $pdf->Cell(100,6,$hasil['nama'],1,0);
    $pdf->Cell(100,6,$hasil['nama'],1,0);
    $pdf->Cell(23,6,$hasil['satuthn'],1,0); 
    $pdf->Cell(23,6,$hasil['tigathn'],1,1); 

}

// $pdf->Cell(10,6,$no,1,0, 'C');
//         $pdf->Cell(90,6,$data->nama,1,0);
//         $pdf->Cell(50,6,$data->nama,1,0);
//         $pdf->Cell(20,6,$data->satuthn,1,0);
//         $pdf->Cell(20,6,$data->tigathn,1,1);
 
$pdf->Output();


?>
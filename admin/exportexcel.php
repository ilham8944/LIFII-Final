<?php 
include '../crud/connect.php'; 

require('Spreadsheet/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// require '../excelReader/excel_reader2.php';
// require '../excelReader/SpreadsheetReader.php';

$spreadsheet = new Spreadsheet;
         
         $data = mysqli_query($conn, "select * from rdpu");
        
          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Nama')
                      ->setCellValue('C1', 'Jenis ')
                      ->setCellValue('D1', '1 Tahun')
                      ->setCellValue('E1', '3 Tahun');

          $kolom = 2;
          $no = 1;
          foreach($data as $data) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $no)
                           ->setCellValue('B' . $kolom, $data['nama'])
                           ->setCellValue('C' . $kolom, $data['jenis'])
                           ->setCellValue('D' . $kolom, $data['satuthn'])
                           ->setCellValue('E' . $kolom, $data['tigathn']);

               $kolom++;
               $no++;

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="Data Reksadana.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
?>
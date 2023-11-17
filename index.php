<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

// Isi data ke cell
$spreadsheet->getActiveSheet()
    ->setCellValue('A1', 'Hello')
    ->setCellValue('B1', 'World!');

// simpan
$writer = new Xlsx($spreadsheet);
$writer->save('phpexcel1.xlsx');

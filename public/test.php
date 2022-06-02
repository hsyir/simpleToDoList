<?php

require("../loader.php");


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');
$sheet->setCellValue('A2', 'HSY');
$sheet->setCellValue('B1', 'PHP');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
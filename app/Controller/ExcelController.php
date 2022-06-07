<?php

namespace Services\Controller;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Services\Models\ToDoList;

class ExcelController
{
    public function convertToexcel()
    {
        $list = new ToDoList();

        $result = $list->SelectFromDataBase();

       
        $counter = 3;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        foreach (range('A','B') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
         }
        $sheet->mergeCells('A1:E1');
        $spreadsheet
            ->getActiveSheet()
            ->getStyle('A1:E1')
            ->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()
            ->setARGB('black');
        $spreadsheet
            ->getActiveSheet()
            ->getStyle('A1')
            ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);


        $sheet->setCellValue("A1", "ToDoList");
        while ($row = mysqli_fetch_assoc($result)) {
            $sheet->setCellValue('A' . $counter, $row['title']);
            $counter++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save('ToDoList.xlsx');
        redirect("/");
    }
}

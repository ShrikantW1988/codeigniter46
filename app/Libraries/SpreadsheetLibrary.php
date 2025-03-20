<?php

namespace App\Libraries;

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class SpreadsheetLibrary 
{
    protected $spreadsheet;
    protected $sheet;

    public function __construct()
    {
        $this->spreadsheet = new Spreadsheet();    
        $this->sheet = $this->spreadsheet->getActiveSheet();    
    } 
    function createSpreadsheet()
    {
        return new Spreadsheet();
    } 
    function saveSpreadsheet($filePath)
    {
        $writer = new Xlsx($this->spreadsheet);
        $writer->save($filePath);
    }
    function downloadSpreadsheet($file_name)
    {
        $writer = new Xlsx($this->spreadsheet);        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($file_name).'"');
        $writer->save('php://output');
    }
    public function setCellValue($cell, $value)
    {
        $this->sheet->setCellValue($cell, $value);
        return $this;
    }
    public function setBold($range)
    {
        $style = ['font' => ['bold' => true]];
        $this->sheet->getStyle($range)->applyFromArray($style);
    }
    public function setFontSize($range,$size)
    {
        $this->sheet->getStyle($range)->getFont()->setSize($size);
    }
    public function setFontColor($range,$color)
    {
        $style = ['font' => ['color' => ['argb' => $color]]];
        $this->sheet->getStyle($range)->applyFromArray($style);
    }
    public function setFillColor($range,$color)
    {
        $style = [ 'fill' => ['fillType' => Fill::FILL_SOLID,'startColor' => ['argb' => $color]]];       
        $this->sheet->getStyle($range)->applyFromArray($style);
    }
    public function setHorizontalAlignment($range,$alignment)
    {
        if($alignment == 'center') { $alignment = Alignment::HORIZONTAL_CENTER; } 
        elseif($alignment == 'left') { $alignment = Alignment::HORIZONTAL_LEFT; } 
        elseif($alignment == 'right') { $alignment = Alignment::HORIZONTAL_RIGHT; }
        $style = [ 'alignment' => ['horizontal' => $alignment]];
        $this->sheet->getStyle($range)->applyFromArray($style);
    } 
    public function setVerticalAlignment($range,$alignment)
    {
        if($alignment == 'top') { $alignment = Alignment::VERTICAL_TOP; } 
        elseif($alignment == 'bottom') { $alignment = Alignment::VERTICAL_BOTTOM; } 
        elseif($alignment == 'center') { $alignment = Alignment::VERTICAL_CENTER; }
        elseif($alignment == 'justify') { $alignment = Alignment::VERTICAL_JUSTIFY; }

        $style = [ 'alignment' => ['vertical' => $alignment]];
        $this->sheet->getStyle($range)->applyFromArray($style);
    } 
    public function setCreator($author_name)
    {
        $properties = $this->spreadsheet->getProperties();        
        $properties->setCreator($author_name);
    }
    public function setTitle($title)
    {
        $this->sheet->setTitle($title);
    }
    public function setINR($range)
    {
        $this->sheet->getStyle($range)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
    }
    public function setBorder($range,$border_color = '5b5b5b')
    {
        $style = [
            'borders' => [
                'outline' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => $border_color],
                ],                   
            ],
        ]; 
        $this->sheet->getStyle($range)->applyFromArray($style);
    }
    public function setAutoSize($start,$end)
    {
        foreach(range($start,$end) as $col) 
        {
            $this->sheet->getColumnDimension($col)->setAutoSize(true);
        }
    }
    public function setRowHeight($row_no,$height)
    {
        $this->sheet->getRowDimension($row_no)->setRowHeight($height);
    }
    public function setColumnWidth($col,$width)
    {
        $this->sheet->getColumnDimension($col)->setWidth(50);
    }
    public function setProtection()
    {
        $this->sheet->getProtection()->setSheet(true); 
    }
    public function setLock($range,$flag = true)
    {
        if($flag)
        {
            $this->sheet->getStyle($range)->getProtection()->setLocked(Protection::PROTECTION_PROTECTED);
        }
        else
        {
            $this->sheet->getStyle($range)->getProtection()->setLocked(Protection::PROTECTION_UNPROTECTED);
        }          
    }
    public function mergeCells($range)
    {
        $this->spreadsheet->getActiveSheet()->mergeCells($range);
    }
}
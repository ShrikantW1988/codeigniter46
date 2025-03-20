<?php

namespace App\Controllers;

use App\Libraries\SpreadsheetLibrary;

//use PhpOffice\PhpSpreadsheet\Style\Fill;

class Phpspreadsheet extends BaseController
{
    public $db, $db2;

    public function __construct()
    {
        $this->db = db_connect();
        $this->db2 = new \App\Libraries\DB();
    } 
    public function index(): string
    {
        return view('welcome_message');
    }
    public function test()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        
        $lib = new SpreadsheetLibrary();
        $spreadsheet = $lib->createSpreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        //$column_style = ['fill' => array('fillType' => Fill::FILL_SOLID,'startColor' => array('argb' => 'e3e1da'))];

        //$sheet->getStyle("A1:B1")->applyFromArray($column_style);

        // Set cell values
        $sheet->setCellValue('A1', 'Full Name');
        $sheet->setCellValue('B1', 'City');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Mobile');
        $sheet->setCellValue('E1', 'Department');
        $sheet->setCellValue('F1', 'Country');
        $sheet->setCellValue('G1', 'Gander');  

        for($i=2; $i < 7;$i++)
        {
            $sheet->setCellValue('A'.$i, 'Shrikant Waghare');
            $sheet->setCellValue('B'.$i, 'Ambernath');
            $sheet->setCellValue('C'.$i, 'shrikant@gmail.com');
            $sheet->setCellValue('D'.$i, '878787878');
            $sheet->setCellValue('E'.$i, 'IT');
            $sheet->setCellValue('F'.$i, 'India');
            $sheet->setCellValue('G'.$i, 'Male');
        } 

        // Download the file

        $lib->downloadSpreadsheet($spreadsheet,'example.xlsx');   
              
    }
    public function test2()
    {
        $lib = new SpreadsheetLibrary();
        $spreadsheet = $lib->createSpreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        // Set cell values
        $sheet->setCellValue('A1', 'Hello');
        $sheet->setCellValue('B1', 'World!');
        $sheet->setCellValue('A2', 'This is PhpSpreadsheet.');

        // Save the file

        $lib->saveSpreadsheet($spreadsheet,UPLOAD_PATH.'example.xlsx');       

        echo "Excel file created successfully!";        
    } 
    public function test3()
    {        
        $sheet = new SpreadsheetLibrary();

        //$column_style = ['fill' => array('fillType' => Fill::FILL_SOLID,'startColor' => array('argb' => 'e3e1da'))];      

        $sheet->setBold("A1:J1");
        $sheet->setBold("A2:J2");
        $sheet->setFontColor("A1:J1",'ffffff');
        $sheet->setFillColor("A1:J1",'004d4d');
        $sheet->setFontColor("A2:J2",'004d4d');
        //$sheet->setFillColor("A1:G1",'ffb066');
        $sheet->setHorizontalAlignment("A1:J1",'center');
        $sheet->setHorizontalAlignment("A2:J2",'center');
        $sheet->setVerticalAlignment("A2:J2",'center');

        //$sheet->setCreator('shrikant laxman waghare');
        $sheet->setTitle('shrikant laxman waghare');

        $sheet->mergeCells('A1:J1');
        $sheet->setCellValue('A1', 'Employee Details');

        // Set cell values
        $sheet->setCellValue('A2', 'Full Name');
        $sheet->setCellValue('B2', 'City');
        $sheet->setCellValue('C2', 'Email');
        $sheet->setCellValue('D2', 'Mobile');
        $sheet->setCellValue('E2', 'Department');
        $sheet->setCellValue('F2', 'Country');
        $sheet->setCellValue('G2', 'Gander');
        $sheet->setCellValue('H2', 'Salary');
        $sheet->setCellValue('I2', 'Date Of Birth');  
        $sheet->setCellValue('J2', 'Address');  

        for($i=3; $i < 16;$i++)
        {
            $sheet->setCellValue('A'.$i, 'Shrikant Waghare');
            $sheet->setCellValue('B'.$i, 'Ambernath');
            $sheet->setCellValue('C'.$i, 'shrikant@gmail.com');
            $sheet->setCellValue('D'.$i, '878787878');
            $sheet->setCellValue('E'.$i, 'IT');
            $sheet->setCellValue('F'.$i, 'India');
            $sheet->setCellValue('G'.$i, 'Male');
            $sheet->setCellValue('H'.$i, '34000');
            $sheet->setCellValue('I'.$i, '25-09-2025');
            $sheet->setCellValue('J'.$i, 'Halycha Pada, Sai Kripa Chawl, Shiv Mandir Road, Ambernath (E)');
        }

        //$sheet->setColumnWidth('B',235); //----work only if autosize is off----

        $sheet->setINR('H2:H15');

        $sheet->setBorder('A1:J15');

        $sheet->setAutoSize('A','J');
        
        $sheet->setRowHeight(1,35);
        $sheet->setRowHeight(2,35);
        $sheet->setVerticalAlignment('A1:J1','center');
        
        $sheet->setFontSize('A2:J2',12);

        $sheet->setProtection();
        $sheet->setLock('A1:J1');
        $sheet->setLock('A2:J2');
        $sheet->setLock('A3:J15',false);        
        $sheet->downloadSpreadsheet('example.xlsx'); 
    }
}

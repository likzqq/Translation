<?php
    // Include PHPExcel
    include 'PHPExcel/Classes/PHPExcel/IOFactory.php';
    include 'PHPExcel/Classes/PHPExcel.php';
    include 'PHPExcel/Classes/PHPExcel/Reader/Excel2007.php';

    // Identify the file to read
    $file = PHPExcel_IOFactory::identify('C:/Users/Antunesfi/Desktop/UwAmp/www/php/download/'.$nameFile);
    // Create the reader
    $reader = PHPExcel_IOFactory::createReader($file);
    // Read the file
    $phpexcel = $reader->load('C:/Users/Antunesfi/Desktop/UwAmp/www/php/download/'.$nameFile);
    // Declare an array
    $array = array();
    // Get sheet from Excel
    $content = $phpexcel->getSheet(0);
    // Foreach to check all the cells
    foreach($content->getRowIterator() as $row) {
        foreach($row->getCellIterator() as $cell) {
            // Get the value of a cell and write it on the array
            $info = $cell->GetValue();
            array_push($array, $info);
        }
    }
    // Include the write file
    include 'writefile.php';


    /*if(isset($phpexcel)) {
        echo "excellent";
    }
    else {
        echo "rip";
    }












/*include_once ('PHPExcel/Classes/PHPExcel/IOFactory.php');

$PHP = PHPExcel_IOFactory::load('C:/Users/Antunesfi/Desktop/UwAmp/www/test/'.$name);


$reader = $PHPExcel_IOFactory::createReader("Excel2007");
$PHPExcel = $reader->load('C:/Users/Antunesfi/Desktop/UwAmp/www/test/'.$name);

echo $PHPExcel;














/*
include ".\php\PHPExcel\Classes\PHPExcel.php";
include ".\php\PHPExcel\Classes\PHPExcel\IOFactory.php";

$PHP = new PHPExcel();

$reader = PHPExcel_IOFactory::createReader("Excel2007");
$PHPExcel = $reader->load($name, '..\test'.$name);
$sheet = $PHPExcel->getSheet(0);
$row = $sheet->getHighestRow();
$column = $sheet->getHighestColumn();

for($for = 1; $for <= $row; $row++)
{
    $data = $sheet->rangeToArray('A'.$for.':'.$column.$row, NULL, TRUE, FALSE);
}
echo $data;
*/
?>





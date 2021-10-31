<?php
$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$r = mysqli_query($db,"SELECT * FROM `doljnost`");
$myrow = mysqli_fetch_array($r);
require_once '..\..\PHPExcel.php';
$Doljnost = $_POST['nameselect'];
$objExcel = new PHPExcel();
$objExcel->setActiveSheetIndex(0)
 ->setCellValue('B2', 'Отчет о найме')
 ->setCellValue('B3', 'Дата приказа')
 ->setCellValue('D3', 'ФИО')
 ->setCellValue('H3', 'Отдел')
 ->setCellValue('A4', '13.10.2021')
 ->setCellValue('D4', 'Дармограй Полина Михайловна')
 ->setCellValue('H4', 'Отдел разработки')
  ->setCellValue('A5', '18.10.2021')
  ->setCellValue('D5', 'Дармограй Полина Михайловна')
  ->setCellValue('H5', 'Бухгалтерия');


$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel5');

$objWriter->save('naim.xls');


	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
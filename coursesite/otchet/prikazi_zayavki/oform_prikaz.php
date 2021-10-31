<?php

require_once '..\..\PHPExcel.php';
$Doljnost = $_POST['nameselect'];
$objExcel = new PHPExcel();
$objExcel->setActiveSheetIndex(0)
 ->setCellValue('B1', 'ПРИКАЗ')
 ->setCellValue('B2', '(распоряжение)')
 ->setCellValue('B3', 'о приеме работника на работу')
 ->setCellValue('B5', 'Принять на работу')
 ->setCellValue('A7', 'Дармограй Полина Михайловна')
 ->setCellValue('A8', 'в ООО Гиперион')
 ->setCellValue('A9', 'на должность Бухгалтер-стажер')
 ->setCellValue('A11', 'с окладом 10000 рублей');


$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel5');

$objWriter->save('PrikazTest.xls');


$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"insert into prikazi(DatePrikaza, Id_Zayavki, Prikaz) values ('2021-10-18','18', 'PrikazTest.xsl') ");

	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
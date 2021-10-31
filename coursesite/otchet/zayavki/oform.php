<?php

require_once '..\..\PHPExcel.php';
$Doljnost = $_POST['nameselect'];
$objExcel = new PHPExcel();
$objExcel->setActiveSheetIndex(0)
 ->setCellValue('F1', 'Генеральному директору')
 ->setCellValue('F2', 'ООО Гиперион')
 ->setCellValue('F3', 'Джеку К. С.')
 ->setCellValue('C5', 'Заявление')
 ->setCellValue('A7', 'Прошу принять меня на постоянную работу в качестве Бухгалтер-стажер с испытательным сроком и окладом в 10000 рублей.')
 ->setCellValue('F9', 'Дармограй Полина Михайловна');


$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel5');

$objWriter->save('ZayavkaTest.xls');


$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"insert into zayavki(Id_TipZayavki, Zayavka, Status, Id_Sotrudnik) values ('1','ZayavkaTest.xls', '-', '19') ");

	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_guest.php'>";
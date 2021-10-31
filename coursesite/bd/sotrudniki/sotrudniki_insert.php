<?php

$FIO = $_POST['FIO'];
$DateOfBirth = $_POST['DateOfBirth'];
$Obrazovanie = $_POST['Obrazovanie'];
$nomer_telephona = $_POST['nomer_telephona'];
$Id_Doljnost = $_POST['Id_Doljnost'];
$Id_prikaz = $_POST['Id_prikaz'];
$Id_otdel = $_POST['Id_otdel'];


$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"insert into sotrudniki(FIO, DateOfBirth, Obrazovanie, Nomer_telephona)
values ('$FIO','$DateOfBirth','$Obrazovanie','$nomer_telephona') ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
}
?>
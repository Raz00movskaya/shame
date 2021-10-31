<?php

$Id_Sotrudnik = $_POST['Id_Sotrudnik'];
$FIO = $_POST['FIO'];
$DateOfBirth=$_POST['DateOfBirth'];
$Obrazovanie=$_POST['Obrazovanie'];
$nomer_telephona=$_POST['nomer_telephona'];

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"Update sotrudniki set FIO = '$FIO', DateOfBirth = '$DateOfBirth', Obrazovanie = '$Obrazovanie', nomer_telephona = '$nomer_telephona' where Id_Sotrudnik = '$Id_Sotrudnik' ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=sotrudniki.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=sotrudniki.php'>";
}
?>
<?php


$TipZayavki = $_POST['TipZayavki'];



$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"insert into tipi_zayavok(TipZayavki) values ('$TipZayavki') ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
}
?>
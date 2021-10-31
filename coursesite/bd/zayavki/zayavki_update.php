<?php


$TipZayavki = $_POST['TipZayavki'];
$id_TipZayavki = $_POST['id_TipZayavki'];

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"Update tipi_zayavok set TipZayavki = '$TipZayavki' where id_TipZayavki = '$id_TipZayavki' ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=tipi_zayavok.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=tipi_zayavok.php'>";
}
?>
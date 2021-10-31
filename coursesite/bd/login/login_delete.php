<?php
$doljnost = $_POST['Doljnost'];
$id_doljnost=$_POST['id_doljnost'];
$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"DELETE FROM `doljnost` WHERE `Id_doljnost` = $id_doljnost; DELETE FROM `sotrudniki` WHERE `Id_doljnost` = $id_doljnost;");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=doljnost.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=doljnost.php'>";
}
?>
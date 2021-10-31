<?php
$Id_Otdel = $_POST['Id_Otdel'];
$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"DELETE FROM `doljnost` WHERE `Id_Otdel` = '$Id_Otdel'; DELETE FROM `otdeli` WHERE `Id_Otdel` = '$Id_Otdel';");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=otdeli.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=otdeli.php'>";
}
?>
<?php

$Id_otdel = $_POST['Id_otdel'];
$otdel = $_POST['otdel'];

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"Update otdeli set otdel = '$otdel' where Id_otdel = '$Id_otdel' ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=otdeli.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=otdeli.php'>";
}
?>
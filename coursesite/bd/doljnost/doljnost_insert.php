<?php

$doljnost = $_POST['doljnost'];
$oklad = $_POST['oklad'];
$open = $_POST['open'];


$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"insert into doljnost(doljnost, oklad, open_vacancy) values ('$doljnost','$oklad','$open') ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=../../main_admin.php'>";
}
?>
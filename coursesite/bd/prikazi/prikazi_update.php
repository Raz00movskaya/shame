<?php

$id_prikaz = $_POST['id_prikaz'];
$datepr = $_POST['datepr'];

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"Update prikazi set dateprikaza = '$datepr' where id_prikaz = '$id_prikaz' ");
if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=prikazi.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=prikazi.php'>";
}
?>
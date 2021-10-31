<?php


$Login = $_POST['Login'];
$Status = $_POST['Status'];
$Sotrudnik = $_POST['Sotrudnik'];
$Id_Login = $_POST['Id_Login'];

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$ir = mysqli_query($db,"Update login set Login = '$Login' where Id_Login = '$Id_Login';
Update login set Status = '$Status' where Id_Login = '$Id_Login';
Update sotrudniki set FIO = '$Sotrudnik' where Id_Login = '$Id_Login' ; ");

if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=login.php'>";
}	
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=login.php'>";
}
?>
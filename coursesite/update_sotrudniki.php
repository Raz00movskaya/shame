<?php

$nameselect = $_SESSION['nameselect'];
$Login = $_SESSION['login'];

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$res = $db->query("SELECT MAX(`Id_Login`) FROM login");
$row = $res->fetch_row();
$count = $row[0];

$ir = mysqli_query($db,"Update `sotrudniki` set `Id_Doljnost` = 3  WHERE `Id_Login` =  '$count'");

if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=main_guest.php'>";
}
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=main_guest.php'>";
}
?>
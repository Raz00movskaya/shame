<?php
include('connect.php');
session_start();
?>


<?php
$Login=$_POST['Login'];
$Password=md5($_POST['Password']);
$FIO = $_POST['FIO'];
$Obrazovanie = $_POST['Obrazovanie'];
$Nomer_telephona = $_POST['Nomer_telephona'];
$DateOfBirth = $_POST['DateOfBirth'];
$originalDate = str_replace('.', '-', "$DateOfBirth");
$date = date("Y-m-d", strtotime($originalDate));
$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");

$ir = mysqli_query($db,"INSERT into login(Login, Password, Status) values ('$Login','$Password', 'guest');");
$res = $db->query("SELECT MAX(`Id_Login`) FROM login");
$row = $res->fetch_row();
$count = $row[0];



$ire = mysqli_query($db,"INSERT INTO `sotrudniki`(`FIO`, `Obrazovanie`, `Nomer_telephona`, `DateOfBirth`, `Id_Login`) VALUES('$FIO','$Obrazovanie','$Nomer_telephona','$date','$count');");

if ($ir == 'true')
{
	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=index.php'>";

}
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=registration.php'>";
}
?>
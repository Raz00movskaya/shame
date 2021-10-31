<?php
include('connect.php');
session_start();
?>

<?php
$Login=$_POST['Login'];
$Password=md5($_POST['Password']);
$db = mysqli_connect("localhost","root","root","course_site_database");
$query = mysqli_query($db,"SELECT login, password, status from login where login='$Login'");
$array = mysqli_fetch_array($query);
$user = $array['Login'];
if ($array['password'] == $Password && $array['login'] == $Login && $array['status'] == 'admin'){

	echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=main_admin.php'>";
	$_SESSION['login']=$Login;
}
else if ($array['password'] == $Password && $array['login'] == $Login && $array['status'] == 'guest') {
    echo "<script>alert('Successfully')</script><meta http-equiv = 'refresh' CONTENT = '0; url=main_guest.php'>";
	$_SESSION['login']=$Login;

}
else {
	echo "<script>alert('Error')</script><meta http-equiv = 'refresh' CONTENT = '0; url=index.php'>";
}
?>
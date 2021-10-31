<?php
session_start();

require_once 'PHPExcel.php';


?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>



<style>
body{background:url(https://bootstraptema.ru/images/bg/bg-1.png)}

#main {
 background-color: #f2f2f2;
 padding: 20px;
-webkit-border-radius: 4px;
 -moz-border-radius: 4px;
 -ms-border-radius: 4px;
 -o-border-radius: 4px;
 border-radius: 4px;
 border-bottom: 4px solid #ddd;
}
#real-estates-detail #author img {
 -webkit-border-radius: 100%;
 -moz-border-radius: 100%;
 -ms-border-radius: 100%;
 -o-border-radius: 100%;
 border-radius: 100%;
 border: 5px solid #ecf0f1;
 margin-bottom: 10px;
}
#real-estates-detail .sosmed-author i.fa {
 width: 30px;
 height: 30px;
 border: 2px solid #bdc3c7;
 color: #bdc3c7;
 padding-top: 6px;
 margin-top: 10px;
}
.panel-default .panel-heading {
 background-color: #fff;
}
#real-estates-detail .slides li img {
 height: 450px;
}
</style>
</head>
<body>
<div class="container">
<div id="main">



 <div class="panel">
 <div class="panel-body">
 <ul id="myTab" class="nav nav-pills">
 <li class="active"><a href="#detail" data-toggle="tab">О пользователе</a></li>
 <li class=""><a href="#contact" data-toggle="tab">Подать заявку</a></li>
 <li class=""><a href="destroy.php">Выход</a></li>
 </ul>
 <div id="myTabContent" class="tab-content">
<hr>
 <div class="tab-pane fade active in" id="detail">
 <?php

$Login = $_SESSION['login'];
$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$r = mysqli_query($db,"SELECT * FROM `login`, `sotrudniki` WHERE
login.Id_Login = sotrudniki.Id_Login AND login.Login = '$Login'");
$myrow = mysqli_fetch_array($r);


 echo "<h4>Информация профиля</h4>";
 echo "<table class='table table-th-block'>";
 echo "<tbody>";
 echo "<tr><td class='active'>Имя:</td><td>$myrow[FIO]</td></tr>";
 echo "<tr><td class='active'>Образование:</td><td>$myrow[Obrazovanie]</td></tr>";
 echo "<tr><td class='active'>Контактный номер:</td><td>$myrow[Nomer_telephona]</td></tr>";
 echo "<tr><td class='active'>Дата рождения:</td><td>$myrow[DateOfBirth]</td></tr>";


 ?>
 </tbody>
 </table>
 </div>
 <div class="tab-pane fade" id="contact">
 <p></p>
 <form role="form">
 <div class="form-group">
 <label>Выберите желаемую должность:</label>
 <?php
$q = mysqli_query($db,"SELECT * FROM Doljnost where (Open_Vacancy>0)");
$qe = mysqli_fetch_array($q);




echo "<form method='post' action='update_sotrudniki.php'>";
echo"<select name='nameselect'> ";
  do{
  Echo "<option value='$qe[Doljnost]'>$qe[Doljnost]</option>";
  }
  while ($qe = mysqli_fetch_array($q));
echo"    </select>";

echo"</form>";


 ?>
 </div>
 <div class="form-group">
 <a data-original-title="" title="" href="otchet/zayavki/oform.php">Отправить</a>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>

</div><!-- /.main -->
</div><!-- /.container -->
</body>
</html>
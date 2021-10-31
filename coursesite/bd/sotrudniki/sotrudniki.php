<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
<div class="container">
<?php
Echo "<table class='table table-light table-striped'>";
Echo "<thead>";
Echo "<tr class='table-light'>";
Echo "<th scope='col' class='table-light'>ФИО</th>";
Echo "<th scope='col' class='table-light'> Дата рождения</th>";
Echo "<th scope='col' class='table-light'>Образование</th>";
Echo "<th scope='col' class='table-light'>Номер телефона</th>";
Echo "<th scope='col' class='table-light'>Изменить</th>";
Echo "<th scope='col' class='table-light'>Удалить</th>";
Echo "</tr>";
Echo "</thead>";

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$r = mysqli_query($db,"Select * from sotrudniki");
$myrow = mysqli_fetch_array($r);

do{
Echo "<tr>";	
Echo "<form action='sotrudniki_update.php' method='POST' name='form'>";

Echo "<td><input size=35 class='form-control' name='FIO' type='text' value='$myrow[FIO]'/></td>";
Echo "<td><input size=6 class='form-control' name='DateOfBirth' type='text' value='$myrow[DateOfBirth]'/></td>";
Echo "<td><input size=6 class='form-control' name='Obrazovanie' type='text' value='$myrow[Obrazovanie]'/></td>";
Echo "<td><input size=6 class='form-control' name='nomer_telephona' type='text' value='$myrow[Nomer_telephona]'/></td>";
Echo "<td>
<input name='Id_Sotrudnik' type='checkbox' value='$myrow[Id_Sotrudnik]'/>
<input type='submit' class='btn btn-warning' value='Update'/></td></form>";
Echo "<td>
<form action='sotrudniki_delete.php' method='POST' name='form'>
<input name='Id_Sotrudnik' type='checkbox' value='$myrow[Id_Sotrudnik]'/>
<input type='submit' class='btn btn-danger' name='submit' value='Remove'/>
</form>

</td>";	

Echo "</tr>";
}
while ($myrow = mysqli_fetch_array($r));
Echo "</table>";
?>
</div>


<center><iframe name="iframeBootstrap" frameborder=0 width = "1200px" height = "700px"></iframe></center> 

   
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    A:link {
        text-decoration: none;
        color: black;/* Убирает подчеркивание для ссылок */
       }
    A:visited {
        text-decoration: none;
        color: black;
       }
    A:active {
        text-decoration: none;
        color: black;
       }
    A:hover {
        text-decoration: none; /* Делает ссылку подчеркнутой при наведении на нее курсора */
        color: black; /* Цвет ссылки */
       }


    </style>
</head>

<body>
<div class="container">
<?php
Echo "<table table class='table table-light table-striped'>";
Echo "<tr>";
Echo "<th>Тип заявки</th>";

Echo "<th>Статус</th>";
Echo "<th>Заявка подана:</th>";
Echo "<th></th>";
Echo "<th>Изменить</th>";
Echo "<th>Удалить</th>";
Echo "</tr>";

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$r = mysqli_query($db,"SELECT * FROM `tipi_zayavok`, `zayavki`, `sotrudniki` WHERE
zayavki.Id_TipZayavki = tipi_zayavok.Id_TipZayavki AND
zayavki.Id_Sotrudnik = sotrudniki.Id_Sotrudnik");
$myrow = mysqli_fetch_array($r);

do{
Echo "<tr>";	
Echo "<form action='zayavki_update.php' method='POST' name='form'>";
Echo "<td><input size=20 class='form-control' name='TipZayavki' type='text' value='$myrow[TipZayavki]'/></td>";

Echo "<td><input size=20 class='form-control' name='Status' type='text' value='$myrow[Status]'/></td>";
Echo "<td><input size=30 class='form-control' name='Sotrudnik' type='text' value='$myrow[FIO]'/></td>";
Echo "<td><a href='../../otchet/prikazi_zayavki/oform_prikaz.php'>Сформировать приказ</a></td>";
Echo "<td>
<input name='Id_Zayavka' type='checkbox' value='$myrow[Id_Zayavka]'/>
<input type='submit' class='btn btn-warning' value='Update'/></td></form>";
Echo "<td>
<form action='zayavki_delete.php' method='POST' name='form'>
<input name='Id_Zayavka' type='checkbox' value='$myrow[Id_Zayavka]'/>
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
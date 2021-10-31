<?php
session_start();
?>
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
Echo "<table table class='table table-light table-striped'>";
Echo "<tr>";
Echo "<th>Тип заявки</th>";

Echo "<th>Изменить</th>";
Echo "<th>Удалить</th>";
Echo "</tr>";

$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$r = mysqli_query($db,"SELECT * FROM `tipi_zayavok`");
$myrow = mysqli_fetch_array($r);

do{
Echo "<tr>";	
Echo "<form action='tipi_zayavok_update.php' method='POST' name='form'>";
Echo "<td><input size=50 class='form-control' name='TipZayavki' type='text' value='$myrow[TipZayavki]'/></td>";

Echo "<td>
<input name='id_TipZayavki' type='checkbox' value='$myrow[Id_TipZayavki]'/>
<input type='submit' class='btn btn-warning' value='Update'/></td></form>";
Echo "<td>
<form action='tipi_zayavok_delete.php' method='POST' name='form'>
<input name='id_TipZayavki' type='checkbox' value='$myrow[Id_TipZayavki]'/>
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
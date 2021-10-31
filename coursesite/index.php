<?php
session_start();

require_once 'PHPExcel.php';

$objExcel = new PHPExcel();
$objExcel->setActiveSheetIndex(0);

$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel5');

$objWriter->save('ZayavkaTest.xls');


?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title></title>
    <style>
    A:link {
        text-decoration: none;
        color: white;/* Убирает подчеркивание для ссылок */
       }
    A:visited {
        text-decoration: none;
        color: white;
       }
    A:active {
        text-decoration: none;
        color: white;
       }
    A:hover {
        text-decoration: none; /* Делает ссылку подчеркнутой при наведении на нее курсора */
        color: white; /* Цвет ссылки */
       }


    </style>
</head>
<body>


<header class="p-3 bg-black text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
       <h2>Hyperion</h2>
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary"></a></li>
          <li><a href="#" class="nav-link px-2 text-white"></a></li>
          <li><a href="#" class="nav-link px-2 text-white"></a></li>
          <li><a href="#" class="nav-link px-2 text-white"></a></li>
          <li><a href="#" class="nav-link px-2 text-white"></a></li>
        </ul>


        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2"><a href="login.php" class="td-none">Login</a></button>
          <button type="button" class="btn btn-warning"><a href="registration.php" class="td-none">Registration</a></button>
        </div>
      </div>
    </div>
  </header>

<?php
Echo "<table table class='table table-light table-striped'>";
Echo "<tr>";
Echo "<th>Должность</th>";
Echo "<th>Оклад</th>";
Echo "<th></th>";
Echo "</tr>";
$db = mysqli_connect("localhost","root","root","course_site_database");
mysqli_query($db,"set names utf8");
$r = mysqli_query($db,"SELECT * FROM Doljnost where (Open_Vacancy>0)");
$myrow = mysqli_fetch_array($r);
do{
Echo "<tr>";
Echo "<td><input size=50 class='form-control' name='doljnost' type='text' value='$myrow[Doljnost]' disabled></td>";
Echo "<td><input size=50 class='form-control' name='oklad' type='text' value='$myrow[Oklad]' disabled></td>";
Echo "<td>Зарегистрируйтесь чтобы подать заявку</td>";
Echo "</tr>";
}
while ($myrow = mysqli_fetch_array($r));
Echo "</table>";
?>


<div class="modal" id="mymodal">
	<div class="modal_content">
		<button id="close_modal_window">&times;</button>
		<p>Подача заявки</p>
		<form method="POST" action="otchet/zayavki/oform.php">
			<div><p>ФИО</p><input type="text" name="FIO"></div>
			<div><p>Образование</p><input type="text" name="Obrazovanie"></div>
			<div><p>Контактный номер</p><input type="text" name="Nomer_telephona"></div>
			<div><p>Дата рождения</p><input type="text" name="DateOfBirth"></div>
			<div><input type='submit' value='Отправить'></div>
		</form>
	</div>
</div>
<iframe name="fr" frameborder=1 width = "100%" height = "500px"></iframe>







<br>
<br>
<br>
<br>
<br>


<footer class="footer mt-auto py-3 bg-black">
  <div class="container">
    <span class="text-muted"></span>
  </div>
</footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script type="text/javascript">
var modal  = document.getElementById("mymodal");



var btn  = document.getElementById("btn_modal_window");



var close  = document.getElementById("close_modal_window");


btn.onclick = function () {
	modal.style.display = "block";
}




close.onclick = function () {
	modal.style.display = "none";
}



window.onclick = function(event) {
	if(event.target == modal){
		modal.style.display = "none";
	}
}


</script>
</body>
</html>



<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">


 <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        overflow: auto;
    }

    .modal_content {
        margin: 100px auto;
        background-color:  black;
        font-family: 'Commissioner', sans-serif;
        color: white;
        padding: 20px;
        width: 300px;
        z-index: 99999;
    }

    input.modal{
        margin: 100px auto;
        background-color:  #234f75;
        font-family: 'Commissioner', sans-serif;
        color: white;
        padding: 20px;
        width: 500px;
        z-index: 99999;
    }

    #close_modal_window {
        color: #234f75;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }

    button#close_modal_window {
        color: #234f75;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }

    #close_modal_window1 {
        color: #000;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }
    #close_modal_window2 {
        color: #000;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }
    #close_modal_window3 {
        color: #000;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }
    #close_modal_window4 {
        color: #000;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }
    #close_modal_window5 {
        color: #000;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }
    #close_modal_window6 {
        color: #000;
        float: right;
        font-size: 30px;
        cursor: pointer;
    }


</style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Таблицы
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="bd/login/login.php" target="iframeBootstrap">Аккаунты</a></li>
            <li><a class="dropdown-item" href="bd/zayavki/zayavki.php" target="iframeBootstrap">Заявки</a></li>
              <li><a class="dropdown-item" href="bd/prikazi/prikazi.php" target="iframeBootstrap">Приказы</a></li>
                <li><a class="dropdown-item" href="bd/sotrudniki/sotrudniki.php" target="iframeBootstrap">Сотрудники</a></li>
          <li><a class="dropdown-item" href="bd/doljnost/doljnost.php" target="iframeBootstrap">Должности</a></li>
          <li><a class="dropdown-item" href="bd/otdeli/otdeli.php" target="iframeBootstrap">Отделы</a></li>


<li><a class="dropdown-item" href="bd/tipi_zayavok/tipi_zayavok.php" target="iframeBootstrap">Типы заявок</a></li>


          </ul>
        </li>
       <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Добавление
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <li><a class="dropdown-item" target="fr" id="btn_modal_window">Должности</a></li>
                 <li><a class="dropdown-item" target="fr1" id="btn_modal_window1">Отделы</a></li>
<li><a class="dropdown-item" target="fr4" id="btn_modal_window4">Типы заявок</a></li>

                 </ul>
               </li>
             <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Формирование отчетов
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item"  >О найме по отделам</a></li>
                               <li><a class="dropdown-item" target="fr" id="btn_modal_window">О увольнении по отделам</a></li>
                               <li><a class="dropdown-item" target="fr" id="btn_modal_window">О отпусках по отделам</a></li>
                               </ul>
                            </li>
               <li><a class="nav-link active" aria-current="page" href="destroy.php">Выход</a></li>
      </ul>

    </div>
  </div>
</nav>


















<table align="center">
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<td>
<center><iframe name="iframeBootstrap" frameborder=0 width = "1500px" height = "900px"></iframe></center>
</td>
</table>


<div class="modal" id="mymodal">
	<div class="modal_content">
		<button id="close_modal_window">&times;</button>
		<p>Новая запись</p>
		<form method="POST" action="bd/doljnost/doljnost_insert.php">
			<div><p>Должность</p><input type="text" name="doljnost"></div>
			<div><p>Оклад</p><input type="text" name="oklad"></div><br/>
			<div><input type="submit"></div>
		</form>
	</div>
</div>
<iframe name="fr" frameborder=1 width = "100%" height = "500px"></iframe>


<div class="modal" id="mymodal1">
	<div class="modal_content">
		<button id="close_modal_window1">&times;</button>
		<p>Новая запись</p>
		<form method="POST" action="bd/otdeli/otdeli_insert.php">
			<div><p>Отдел</p><input type="text" name="otdel"></div><br/>
			<div><input type="submit" ></div>
		</form>
	</div>
</div>
<iframe name="fr1" frameborder=1 width = "100%" height = "500px" hidden="true"></iframe>


<div class="modal" id="mymodal4">
	<div class="modal_content">
		<button id="close_modal_window4">&times;</button>
		<p>Новая запись</p>
		<form method="POST" action="bd/tipi_zayavok/tipi_zayavok_insert.php">
      <div><p>Тип заявки</p><input type="text" name="TipZayavki"></div>

			<div><input type="submit" ></div>
		</form>
	</div>
</div>
<iframe name="fr4" frameborder=1 width = "100%" height = "500px"></iframe>

<footer class="footer mt-auto py-3 bg-black">
  <div class="container">
    <span class="text-muted">5469 2000 1823 8005 - дайте деняк</span>
  </div>
</footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script type="text/javascript">
var modal  = document.getElementById("mymodal");
var modal1 = document.getElementById("mymodal1");

var modal4 = document.getElementById("mymodal4");


var btn  = document.getElementById("btn_modal_window");
var btn1 = document.getElementById("btn_modal_window1");

var btn4 = document.getElementById("btn_modal_window4");


var close  = document.getElementById("close_modal_window");
var close1 = document.getElementById("close_modal_window1");

var close4 = document.getElementById("close_modal_window4");

btn.onclick = function () {
	modal.style.display = "block";
}
btn1.onclick = function () {
	modal1.style.display = "block";
}

btn4.onclick = function () {
	modal4.style.display = "block";
}



close.onclick = function () {
	modal.style.display = "none";
}
close1.onclick = function () {
	modal1.style.display = "none";
}

close4.onclick = function () {
	modal4.style.display = "none";
}


window.onclick = function(event) {
	if(event.target == modal){
		modal.style.display = "none";
	}
}
window.onclick = function(event) {
	if(event.target == modal1){
		modal1.style.display = "none";
	}
}

window.onclick = function(event) {
	if(event.target == modal4){
		modal4.style.display = "none";
	}
}

</script>




</body>
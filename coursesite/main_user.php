<?php
 session_start();
 ?>

 <!doctype html>
 <html lang="en">
 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

     <title></title>

 </head>
 <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container-fluid">
<a class="navbar-brand" href="destroy.php">Выход</a>
</div>
</nav>


<br>

<center><h2>Добро пожаловать, <?php
echo $_SESSION['login']
 ?>
!
</h2></center>


<br>
<center><h3>Уведомления:</h3></center>
<br>

<center>
<div class="card-group">
  <div class="card" >
   <center> <img src="css/btd.jpg" class="card-img-top" alt="..." style="max-width: 415px ;"></center>
    <div class="card-body">
      <h5 class="card-title">Дни рождения</h5>
      <p class="card-text">У Name Lastname сегодня день рождения! Не забудьте поздравить, весь день на кухне можно будет заказать пиццу и фрукты.</p>

    </div>
  </div>
  <div class="card">
    <img src="css/corp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Корпоратив</h5>
      <p class="card-text">10.10.21, 20:00 - Клуб Амстердам</p>

    </div>
  </div>
  <div class="card">
    <center><img src="css/unnamed.jpg" class="card-img-top" alt="..." style="max-width: 590px ;"></center>
    <div class="card-body">
      <h5 class="card-title">Кинопоказ</h5>
      <p class="card-text">Закрытый кинопоказ 08.10.21 в Центральном парке!  </p>

    </div>
  </div>
</div>
</center>

<br>
<center><h3>Новый корпус:</h3></center>
<br>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/1.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Здание нового корпуса</h5>
        <p>Hyperion теперь открыт более чем в 10 странах!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="css/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Кухня</h5>
        <p>С должной новой кухней наша команда станет еще продуктивнее, а проекты успешнее! Наслаждайтесь.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="css/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Офисы</h5>
        <p>Надеемся что комфортабельные офисы смотивируют вас на новые свершения!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<br>
<center><h3>Оставьте свою заявку:</h3></center>
<br>

<center>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" class="btn btn-danger">Подать заявление о увольнении</button>
          <button type="button" class="btn btn-warning">Подать заявление об отпуске</button>
          <button type="button" class="btn btn-success">Другое</button>
        </div></center>

     <br>
     <br>
       <br>
       <center><h3>Удачного дня!</h3></center>
       <br>


<footer class="footer mt-auto py-3 bg-black">
  <div class="container">
    <span class="text-muted">5469 2000 1823 8005 - дайте деняк</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 </body>
 </html>
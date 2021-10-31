<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<form method="POST" action="save_registration.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Login</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Login">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
  </div>
			<div class="mb-3"><p>ФИО</p><input type="text" name="FIO" class="form-control"></div>
			<div class="mb-3"><p>Образование</p><input type="text" name="Obrazovanie" class="form-control"></div>
			<div class="mb-3"><p>Контактный номер</p><input type="text" name="Nomer_telephona" class="form-control"></div>
			<div class="mb-3"><p>Дата рождения</p><input type="text" name="DateOfBirth" class="form-control"></div>
			<button type="submit" class="btn btn-warning">Create account</button>
</form>





</body>
</html>
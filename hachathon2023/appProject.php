<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1>Заявка проекта</h1>
<form action="insertApp.php" method="post">
  <div class="form-group">
    <label>Название</label>
    <div class="form-row">
      <input type="text" name="name_project">
     </div>
  </div>
  <div class="form-group">
    <label>Категория</label>
    <input type="text" class="form-control" name="category">
  </div>
  <div class="form-group">
    <label>Описание</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="form-group">
    <label>Подробнее</label>
    <input type="text" class="form-control" name="more">
  </div>
  <!--
  <div class="form-group">
    <label>Напишите свой id</label>
    <input type="text" class="form-control" name="user_id">
  </div>
  -->
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
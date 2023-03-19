
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<!--
<h1>Комментарии</h1>
<form action="insertTickets.php" method="GET">
  <div class="form-group">
    <label>ФИО</label>
    <div class="form-row">
      <input type="text" name="name">
     </div>
  </div>
  <div class="form-group">
    <label>Оставить ваши впечатлении</label>
    <input type="text" class="form-control" name="text_memory">
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
-->
<?php
    $connect=mysqli_connect("127.0.0.1","root","","test");
    $select='SELECT * FROM tickets';
    $query=mysqli_query($connect,$select);
    $row = $query->num_rows;
    if(isset($_SESSION['user']['name'])) {?>

    
    for ($i=0; $i <$row ; $i++) { ?>
      <?php $res=$query->fetch_assoc(); ?>
      <h2><?php echo $res["name_events"]; ?></h2>
      <p><?php echo $res["price"]; ?></p>
      <p><?php echo $res["info"]; ?></p>
     } ?>
      
<?php } ?>

          

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<a href="applicationTeam.php">Пост о поиске специалистов</a>
	<a href="applicationInvestor.php">Пост о поиске инвесторов</a>
	<a href="applicationStartup.php">Пост о поиске стартапов</a>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

-->
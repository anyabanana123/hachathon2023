<?php   
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>SОБО</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
</head>
<body>

    <form method="POST" action="cheking_auto.php" class="ui-form" style="margin-top: 130px">
       <h3>Авторизоваться</h3>
          <div class="form-row">
             <input name="email" type="email" id="email" required autocomplete="off"><label for="email">Email</label>
          </div>
          <div class="form-row">
            <input name="password" type="password" id="password" required autocomplete="off"><label for="password">Пароль</label>
          </div>
          <p><input type="submit" value="Войти"></p>
          <div class="row mt-3">
            <p class="text-secondary">Нет учетной записи?</p>
            <a class="mt-2 ml-2" href="regist.php">Зарегистрируйтесь!</a>
          </div>  
          <p class="masthead-subheading font-weight-light mb-0"><?php echo $_GET['error'];?></p>
    </form>

</body>
</html>
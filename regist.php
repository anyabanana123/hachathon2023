<!DOCTYPE html>
<html>
<head>
  <title>SОБО</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">
</head>
<body>

    <form method="POST" action="cheking_regist.php" class="ui-form" style="margin-top: 130px">
       <h3>Регистрация</h3>
          <div class="form-row">
             <input type="text" id="email" name="email"  required autocomplete="off"><label for="email">Email</label>
          </div>
          <div class="form-row">
             <input type="text" id="familia" name="familia" required autocomplete="off"><label for="email">Фамилия</label>
          </div>
          <div class="form-row">
             <input type="text" id="name" name="name" required autocomplete="off"><label for="email">Имя</label>
          </div>
          <div class="form-row">
             <input type="text" id="otchestvo" name="otchestvo" required autocomplete="off"><label for="email">Отчество</label>
          </div>
          <div class="form-row">
            <input type="password" id="password" name="password" required autocomplete="off"><label for="password">Пароль</label>
          </div>
          <div id="success"></div>
            <div class="form-group ml-4">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Добавить пользователя</button>
            </div>
            <p class="masthead-subheading font-weight-light mb-0"><?php echo $_GET['error'];?></p>
    </form>

</body>
</html>
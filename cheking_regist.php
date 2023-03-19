<?php
require_once 'connect.php';
$query =mysqli_query($connect, 'SELECT * FROM users WHERE email="'. $_POST['email'] .'"');
$result = $query->fetch_assoc();
if ($query->num_rows == 0){
		$mysqli_insert = mysqli_query($connect, "INSERT INTO users (email, familia, name, otchestvo, password) VALUES ('". $_POST['email'] ."','". $_POST['familia'] ."','". $_POST['name'] ."','". $_POST['otchestvo'] ."','". $_POST['password'] ."')");
		header('location: index.php');
	}else{ header( 'location: regist.php?error=Такой+пользователь+уже+есть');}
?>
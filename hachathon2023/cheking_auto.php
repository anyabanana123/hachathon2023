<?php
session_start();
require_once 'connect.php';

$email=$_POST['email'];
$password=$_POST['password'];

$query =mysqli_query($connect, 'SELECT * FROM users WHERE email="'. $email .'" AND password="'. $password .'"');
$result = $query->fetch_assoc();
if ($query->num_rows == 0){
		header("location: auto.php?error=нет+такого+пользователя+или+вы+ошиблись+с+адресом+или+паролем");
	}
else{ 
	$_SESSION['user'] =[
	"id" => $result['id'],
	"name" => $result['name'],
	"admin"=> $result['admin'],
	];
	header( 'location: index.php');
}

?>
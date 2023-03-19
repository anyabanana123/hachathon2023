<?php 
session_start();
require_once 'connect.php';
$text_query= "INSERT INTO tickets(name_events, price, info,user_id) VALUES ('{$_GET['name_events']}', '{$_GET['price']}', '{$_GET['info']}', '{$_GET['user_id']}') ";

$query = "SELECT * FROM `users`
    INNER JOIN `projects` tickets.user_id = user.id";


mysqli_query($connect, $text_query);
alert('Вы успешно совершили покупку!')
header('location: account.php');

 ?>
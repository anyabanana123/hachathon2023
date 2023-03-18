<?php 
session_start();
require_once 'connect.php';
$text_query= "INSERT INTO projects(name_project, category, description, more, user_id) VALUES ('{$_POST['name_project']}', '{$_POST['category']}', '{$_POST['description']}', '{$_POST['more']}', '{$_POST['user_id']}') ";

$query = "SELECT * FROM `users`
    INNER JOIN `projects` WHERE projects.user_id = user.id";


mysqli_query($connect, $text_query);
header('location: index.php');

 ?>
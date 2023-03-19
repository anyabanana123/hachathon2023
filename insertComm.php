<?php 
session_start();
require_once 'connect.php';
$text_query= "INSERT INTO comments(name, text_memory) VALUES ('{$_GET['name']}', '{$_GET['text_memory']}') ";

mysqli_query($connect, $text_query);
header('location: commProject.php');

 ?>
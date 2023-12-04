<?php 
 require_once('db.php');
$author = $_POST['author'];
$email = $_POST['email'];
$text = $_POST['text'];



$sql = "INSERT INTO `users` (author, email, text) VALUES ('$author', '$email' , '$text')";

$conn -> query($sql);
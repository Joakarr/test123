<?php
//$connect = mysqli_connect('localhost','root','', 'registerUser');
 require_once('db.php');
$title = $_POST['title'];
$type = $_POST['type'];
$description = $_POST['description'];
$text = $_POST['text'];




$sql = "INSERT INTO `news` (title, type, description, text) VALUES ('$title', '$type','$description' , '$text')";

$conn -> query($sql);
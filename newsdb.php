<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection failed!". mysqli_connect_error());

}else{
    "Успех";
    require_once('news.php');
}
?>
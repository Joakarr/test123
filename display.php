<!DOCTYPE html>
<html>
<head>
<title>Результат</title>
<meta charset="utf-8" />
</head>
<?php
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
echo "$name * $surname =" . ($name * $surname);
?>
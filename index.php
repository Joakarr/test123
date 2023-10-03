<!DOCTYPE html>
<html>
<head>
<title>Ввод данных</title>
<meta charset="utf-8" />
</head>
<body>

<h2>Введите цифры:</h2>
<form action="display.php" method="POST">
<p>Введите первое число: <input type="text" name="firstname" /></p>
<p>Введите второе число: <input type="text" name="lastname" /></p>
<input type="submit" value="Ответ">

<?php
for ($i = 1; $i < 10; $i++)
{
    echo "<tr>";
    for ($j = 1; $j < 10; $j++)
    {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>

</body>
</html>
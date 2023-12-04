<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости - HELIOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="header-logo">
            <img src="img/logo.png" alt="" height="50px">
            <h1>HELIOS</h1>
        </div>
        <div class="header-navbar">
            <div class="header-link"><a href="index.php">Главная</a></div>
            <div class="header-link"><a href="music.php">Музыка</a></div>
            <div class="header-link"><a href="news.php">Новости</a></div>
            <div class="header-link"><a href="contacts.php">Контакты</a></div>
            <div class="header-link"><a href="addnews.php">Добавить</a></div>
        </div>
    </header>
    <div class="line"></div>


<form action="add.php" method="post">
    <div class="contacts-container">
        <h1>Добавить новость</h1>
        <p>Укажите название, описание и текст</p>
        <div class="input">
            <input type="text" name="title" placeholder="Заголовок (Название)"></input>
            <input type="text" name="type" placeholder="Релиз (Новый, сингл, альбом)"></input>
            <input type="text" name="description"  placeholder="Описание (Дата)"></input>

        </div>
        <div class="message"><input type="text" name="text"placeholder="Текст"></input></div>


        <button type="submit">Добавить</button>

    </div>


</form>



    <footer>
        <div class="footer-navbar">
            <div class="footer-link"><a href="">Договор</a></div>
            <div class="footer-link"><a href="">Оферты</a></div>
            <div class="footer-link"><a href="">Политика конфиденциальности</a></div>
        </div>
        <div class="copyright"><a href="#">@HELIOS 2023</a></div>
    </footer>
    
</body>
</html>
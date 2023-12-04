<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сотрудничество - HELIOS</title>
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

    <form action="register.php" method="post">
    <div class="contacts-container">
        <h1>По вопросам сотрудничества</h1>
        <p>Укажите ваше имя и Email. Мы вышлем ответ как можно быстрее</p>
        <div class="input">
            <input type="text" name="author" placeholder="Имя"></input>
            <input type="text" name="email"  placeholder="Email"></input>

        </div>
        <div class="message"><input type="text" name="text "placeholder="Ваше сообщение"></input></div>
        <div class="check">
        <input type="checkbox" name="text" id="">Нажимая на кнопку, вы соглашаетесь с <a href="#">условиями обработки персональных данных</a>
        </div>

        <button type="submit">Отправить</button>

    </div>


    </form>

    <div class="line"></div>
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
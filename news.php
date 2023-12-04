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

<?php
require_once('newsdb.php');
?>


    <?php
    $products = mysqli_query($conn, "SELECT * FROM `news`");
    $products = mysqli_fetch_all($products);
    foreach ($products as $product){
    ?>

        <div class="news-container">
            <img src="img/album2.jpg" alt="" height="400px">
            <div class="news-container-description">
                <h1><?= $product[1] ?> <p><?= $product[2] ?></p></h1>
                <p><?= $product[3] ?></p>
                <p><?= $product[4] ?></p>
                <button>
                    <a href="https://vk.com/artist/helios_mty5mdi5mzi3na">
                        <img src="img/VK Музыка.png" height="24px" alt="">
                        <p>Слушать в VK Музыка</p>
                    </a>
                </button>
                <button>
                    <a href="https://vk.com/artist/helios_mty5mdi5mzi3na">
                        <img src="img/Apple music.png" height="24px" alt="">
                        <p>MUSIC</p>
                    </a>
                </button>
            </div>
        </div>

        <div class="line"></div>

        <?php
    }
    ?>


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
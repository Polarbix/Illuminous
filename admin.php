<?php
session_start();
$conn = new mysqli('localhost','root','','illuminous');
$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($res);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favlogo.ico">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <div class="menu">
                    <img src="assets/img/logo.svg" alt="" width="100">
                    <div>
                        <a href="index.php">Главная</a>
                        <a href="#">Фильмы</a>
                        <a href="#">Сериалы</a>
                        <a href="#">Мультфильмы</a>
                    </div>
                </div>
                <a href=<?php if(empty($_SESSION['auth'])){echo '"registration.php"';} if(!empty($_SESSION['auth'])){echo '"account.php"';}?>><img src="assets/img/auth.png" alt="" width="20"></a>
            </nav>
        </header>
        <main>
            <div class="profile-name">
                <h2><?php echo $user["login"]; ?></h2>
                <form action="exit.php">
                    <button>Выйти</button>
                </form>
            </div>
            <section>
                <div class="profile-tabs">
                    <div>
                        <img src="assets/img/add.png" alt="" width="50">
                        <h2>Добавить фильм</h2>
                    </div>
                    <div>
                        <img src="assets/img/add1.png" alt="" width="50">
                        <h2>Категории</h2>
                    </div>
                    <a href="favorites.php">
                        <div>
                            <img src="assets/img/heart.png" alt="">
                            <h2>Подписчики</h2>
                        </div>
                    </a>
                    <a href="user_subs.php">
                    <div>
                        <img src="assets/img/subs.png" alt="">
                        <h2>Подписки</h2>
                    </div></a>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-content">
                <div>
                    <h2>Iluminous</h2>
                    <a href="#">О нас</a>
                    <a href="#">Блог</a>
                    <a href="#">Вакансии</a>
                    <a href="#">Акции</a>
                </div>
                <div>
                    <h2>Помощь</h2>
                    <a href="#">Вопросы и ответы</a>
                    <a href="#">Список устройств</a>
                    <a href="#">Дистрибьютерам</a>
                    <a href="#">Контакты</a>
                </div>
                <div>
                    <h2>Поддержка</h2>
                    <p>Мы всегда готовы вам помочь.<br>Наши операторы онлайн 24/7</p>
                    <div class="contacts">
                        <img src="assets/img/phone.png" alt="">
                        <img src="assets/img/email.png" alt="">
                        <img src="assets/img/telegram.png" alt="">
                    </div>
                    <button>Написать в чате</button>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
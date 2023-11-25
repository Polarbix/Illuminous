<?php
session_start();
$conn = new mysqli('localhost','root','','illuminous');
$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($res);
$sql = "SELECT * FROM films WHERE id IN (".implode(",", array_keys($_SESSION["cart"])). ")";
$result = $conn->query($sql);
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
                <button>Редактировать профиль</button>
                <form action="exit.php">
                    <button>Выйти</button>
                </form>
            </div>
            <section>
                <div class="profile-tabs">
                    <div>
                        <img src="assets/img/cart.png" alt="">
                        <h2>Покупки</h2>
                    </div>
                    <div>
                        <img src="assets/img/history.png" alt="">
                        <h2>История</h2>
                    </div>
                    <a href="favorites.php">
                        <div>
                            <img src="assets/img/heart.png" alt="">
                            <h2>Избранное</h2>
                        </div>
                    </a>
                    <div>
                        <img src="assets/img/subs.png" alt="">
                        <h2>Мои подписки</h2>
                    </div>
                </div>
            </section>
            <section>
                <div class="favorites">
                    <h2>Избранное</h2>
                    <div class="favorites-items">
                        <?php if (empty($_SESSION["cart"])) { echo ' <p>пусто(</p> ';}
                            ?>
                        <?php if($result = $conn -> query($sql)){
                            while ($row = $result->fetch_assoc()) { ?>
                        <div>
                            <span class="rate"><?php echo $row["rate"]; ?></span>
                            <img src="assets/img/<?php echo $row["image"]; ?>" alt="">
                            <h2><?php echo $row["title"]; ?></h2>
                            <p><?php echo $row["year_created"]; ?></p>
                            <form action="remove_from_favorites.php" method="post">
                                <input type="hidden" name="film_id" value="<?php echo $row["id"]; ?>">
                                <button type="submit">Удалить</button>
                            </form>
                        </div>
                        <?php } } ?>
                    </div>
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
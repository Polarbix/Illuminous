<?php
session_start();
$conn = new mysqli('localhost','root','','illuminous');
$sql = "SELECT * FROM subscriptions";
$result = $conn->query($sql);
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
    <title>Подписки</title>
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
            <section>
                <form action="payment.php" method="post" class="sub-form">
                    <h2>Выберите подписку</h2>
                    <div class="grid">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                        <label class="card">
                            <input type="hidden" value="<?php echo $row["id"];?>" name="sub_id">
                            <input name="plan" class="radio" type="radio">
                            <span class="plan-details">
                                <span class="plan-type"><?php echo $row["title"]; ?></span>
                                <p><?php echo $row["description"]; ?></p>
                                <span class="plan-cost"><?php echo $row["price"]; ?> ₽</span>
                                <div>
                                    <span></span>
                                    <p>Нет ограничений</p>
                                </div>
                                <div>
                                    <span></span>
                                    <p>Никакой рекламы</p>
                                </div>
                                <div>
                                    <span></span>
                                    <p>10 ТВ каналов</p>
                                </div>
                            </span>
                        </label>
                        <?php } ?>
                    </div>
                    <h2>Введите данные карты</h2>
                    <div class="input-wrap">
                        <input type="hidden" name="user_id" value="<?php $user["id"]; ?>">
                        <p id="msg-surname" class="msgp">Введите корректные данные</p>
                        <input type="text" placeholder="Фамилия" required id="lastName" name="surname">
                        <p id="msg-name" class="msgp">Введите корректные данные</p>
                        <input type="text" placeholder="Имя" required id="firstName" name="name">
                        <p id="msg" class="msgp">Введите корректный номер карты</p>
                        <input type="text" placeholder="Номер карты" id="bank-card-input" required maxlength="19" name="card_number">
                        <div class="subs-form_card">
                            <div>
                                <p id="msg-date" class="msgp">Дата недействительна</p>
                                <input type="text" placeholder="Действует до " required id="date" name="card_date">
                            </div>
                            <div>
                                <p id="msg-code" class="msgp">Код должен содержать толко цифры</p>
                                <input type="text" placeholder="Cvv код" required maxlength="3" id="cvvCode" name="cvv">
                            </div>
                        </div>
                        <button type="submit">Оплатить</button>
                    </div>
                </form>
                <script src="assets/js/input.js"></script>
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
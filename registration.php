<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
            <div class="main">
                <div class="f-container a-container" id="a-container">
                  <form class="form" id="a-form" method="post" action="save_user.php">
                    <h2 class="form_title title">Создать аккаунт</h2>
                    <div class="login">
                        <div><img src="assets/img/google.png" alt=""></div>
                        <div><img src="assets/img/vk.png" alt=""></div>
                        <div><img src="assets/img/in.png" alt=""></div>
                    </div>
                    <p class="form-text">или введите email для регистрации</p>
                    <p id="msg-login" class="p">Логин должен содержать толко латинницу</p>
                    <input class="form__input" type="text" placeholder="Логин" name="login" id="loginValid">
                    <p id="msg-email" class="p">Неккоректно введен email</p>
                    <input class="form__input" type="email" placeholder="E-mail" name="email" id="emailValid">
                    <p id="msg-password" class="p">Слишком короткий пароль</p>
                    <input class="form__input" type="password" placeholder="Пароль" name="password" id="passValid" minlength="5">
                    <button class="form__button button" type="submit">Зарегистрироваться</button>
                  </form>
                </div>
                <div class="f-container b-container" id="b-container">
                  <form class="form" id="b-form" method="post" action="test_user.php">
                    <h2 class="form_title title">Войти</h2>
                    <div class="login">
                        <div><img src="assets/img/google.png" alt=""></div>
                        <div><img src="assets/img/vk.png" alt=""></div>
                        <div><img src="assets/img/in.png" alt=""></div>
                    </div>
                    <p class="form-text">Забыли пароль?</p>
                    <input class="form__input" type="text" placeholder="Логин" name="login">
                    <input class="form__input" type="password" placeholder="Пароль" name="password">
                    <button class="form__button button" type="submit">Войти</button>
                  </form>
                </div>
                <div class="switch" id="switch-cnt">
                  <div class="switch__circle"></div>
                  <div class="switch__circle switch__circle--t"></div>
                  <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title">Добро пожаловать!</h2>
                    <p class="switch__description description">Зарегистрируйтесь, чтобы<br>получить доступ ко всем преимуществам<br>нашей платформы. Уже есть аккаунт?</p>
                    <button class="switch__button button switch-btn">Войти</button>
                  </div>
                  <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title">С возвращением!</h2>
                    <p class="switch__description description">Войдите, чтобы<br>получить доступ ко всем преимуществам<br>нашей платформы. Нет аккаунта?</p>
                    <button class="switch__button button switch-btn">Зарегистрироваться</button>
                  </div>
                </div>
            </div>
        </main>
        <script src="assets/js/form.js"></script>
        <script src="assets/js/validation.js"></script>
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
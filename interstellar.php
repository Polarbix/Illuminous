<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерстеллар</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="assets/img/favlogo.ico">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header">
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
            <div class="header-content">
                <img src="assets/img/interstellar.png" alt="">
                <div class="film-info">
                    <h2>Интерстеллар</h2>
                    <div class="film-info1">
                        <p>2014</p>
                        <p>168м</p>
                        <p>18+</p>
                        <p>США</p>
                        <p>Драма</p>
                        <p>Фантастика</p>
                        <p>Приключения</p>
                    </div>
                    <p>Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину...</p>
                    <div class="btns">
                        <?php if($_SESSION['role']=='user'){echo'
                        <button>Смотреть по подписке<img src="assets/img/play.png" alt=""></button>';}?>
                        <button>В избранное<img src="assets/img/bookmark.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section>
                <h2 class="video-title">Смотреть онлайн</h2>
                <?php if($_SESSION['role']=='sub'){echo'
                <video class="video" controls="controls" poster="assets/img/int.webp">
                    <source src="assets/video/interstellar.mp4">
                </video>';}?>
            </section>
            <section>
                <div class="trailers">
                    <h2>Трейлеры</h2>
                    <div class="trailers-content">
                        <div>
                            <iframe src="https://www.youtube.com/embed/m2vijtILDuk?si=YrJ-GRAa4ll8yhwT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        <div><iframe src="https://www.youtube.com/embed/LY19rHKAaAg?si=-BKpHrAXGWc2IhP_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        <div>
                            <iframe src="https://www.youtube.com/embed/3WzHXI5HizQ?si=RfQYIkk7AIkkX0ps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    </div>
                </div>
            </section>
            <section>
                <div class="carousel-text2">
                    <h2>Актеры и создатели</h2>
                </div>
                <div class="carousel2">
                    <div class="carousel-inner2">
                        <div class="carousel-item2">
                            <div>
                                <img src="assets/img/actor1.svg" alt="">
                                <div>
                                    <h2>Мэттью Макконахи</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor2.svg" alt="">
                                <div>
                                    <h2>Джессика Честейн</h2>
                                    <p>Актриса</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor3.svg" alt="">
                                <div>
                                    <h2>Энн Хэтэуэй</h2>
                                    <p>Актриса</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor4.svg" alt="">
                                <div>
                                    <h2>Маккензи Фой</h2>
                                    <p>Актриса</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item2">
                            <div>
                                <img src="assets/img/actor5.png" alt="">
                                <div>
                                    <h2>Тимоти Хэл</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor6.png" alt="">
                                <div>
                                    <h2>Мэттью Пейдж</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor7.png" alt="">
                                <div>
                                    <h2>Кристофер Нолан</h2>
                                    <p>Сценарист</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor8.png" alt="">
                                <div>
                                    <h2>Джонатан Нолан</h2>
                                    <p>Режиссёр</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item2">
                            <div>
                                <img src="assets/img/actor9.png" alt="">
                                <div>
                                    <h2>Лиа Кейрнс</h2>
                                    <p>Актриса</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor10.png" alt="">
                                <div>
                                    <h2>Уэс Бентли</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor11.png" alt="">
                                <div>
                                    <h2>Коллетт Вулф</h2>
                                    <p>Актриса</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor12.png" alt="">
                                <div>
                                    <h2>Дэвид Ойелоуо</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-controls2">
                        <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                        <span class="next"><img src="assets/img/next.svg" alt=""></span>
                    </div>
                    <div class="carousel-indicators2"></div>
                </div>
                <script src="assets/js/slider.js"></script>
            </section>
            <section>
                <div class="review">
                    <h2>Отзывы</h2>
                    <div class="review-item">
                        <img src="assets/img/prev.svg" alt="">
                        <div>
                            <h2>Екатерина</h2>
                            <p>Не имею привычки пересматривать фильмы,но...</p>
                            <i>02.04.23</i>
                        </div>
                        <div>
                            <h2>Екатерина</h2>
                            <p>Не имею привычки пересматривать фильмы,но...</p>
                            <i>02.04.23</i>
                        </div>
                        <div>
                            <h2>Екатерина</h2>
                            <p>Не имею привычки пересматривать фильмы,но...</p>
                            <i>02.04.23</i>
                        </div>
                        <img src="assets/img/next.svg" alt="">
                    </div>
                </div>
            </section>
            <section>
                <h2 class="title">Рецензии</h2>
                <div class="container">
                    <div class="swiper" style="perspective: 300px;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-active">
                                <i>Екатерина</i>
                                <h2>Теория всего</h2>
                                <p>Как же трудно, наверное, не сломаться под непомерным весом угрожающих амбиций, особенно когда речь идёт о 'самом ожидаемом фильме года' - именно так и никак иначе нарекли последнюю работу Кристофера Нолана в киноманской среде. Пользы от этой...</p>
                                <i>02.02.23</i>
                            </div>
                            <div class="swiper-slide swiper-slide-active">
                                <i>Петр</i>
                                <h2>Спасение нашего мира в их руках</h2>
                                <p>Рано или поздно наша Земля столкнётся с серьезными катаклизмами, которые будет совсем непросто преодолеть. Уже сейчас лучшие учёные планеты думают над тем, как спасти нас от падения метеорита или резкого изменения климата. Задумался...</p>
                                <i>10.04.23</i>
                            </div>
                            <div class="swiper-slide swiper-slide-active">
                                <i>Николай</i>
                                <h2>Изнанка пространства-времени</h2>
                                <p>Шёл 2014-й год. Это тот самый год, в котором кино стало менять вектор своего смыслового ориентирования. Сериал большой киновселенной правит кинотеатральным прокатом, а комиксы, даже развлекательные, пытаются в интересный нарратив...</p>
                                <i>22.06.23</i>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>
            <section>
                <div class="frames">
                    <h2>Кадры из фильма</h2>
                    <div class="frames-content">
                        <img src="assets/img/frame1.png" alt="">
                        <div>
                            <div>
                                <img src="assets/img/frame2.png" alt="">
                                <img src="assets/img/frame3.png" alt="">
                            </div>
                            <div>
                                <img src="assets/img/frame4.png" alt="">
                                <img src="assets/img/frame5.png" alt="">
                            </div>
                            <div>
                                <img src="assets/img/frame6.png" alt="">
                                <img src="assets/img/frame7.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="assets/js/review.js"></script>
            <section>
                <div class="list">
                    <h2>Похожие фильмы</h2>
                    <div class="list-content">
                        <div>
                            <img src="assets/img/transcendence.png" alt="">
                            <h2>Превосходство</h2>
                            <p>2014</p>
                        </div>
                        <div>
                            <img src="assets/img/blade.png" alt="">
                            <h2>Бегущий по лезвию</h2>
                            <p>2017</p>
                        </div>
                        <div>
                            <img src="assets/img/oblivion.png" alt="">
                            <h2>Обливион</h2>
                            <p>2013</p>
                        </div>
                        <div>
                            <img src="assets/img/moon.png" alt="">
                            <h2>Человек на Луне</h2>
                            <p>2018</p>
                        </div>
                        <img src="assets/img/next.svg" alt="">
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
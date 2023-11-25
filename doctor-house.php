<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доктор Хаус</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="assets/img/favlogo.ico">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header header1">
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
                <img src="assets/img/doctorh-poster.png" alt="">
                <div class="film-info">
                    <h2>Доктор Хаус</h2>
                    <div class="film-info1">
                        <p>2004</p>
                        <p>43м</p>
                        <p>16+</p>
                        <p>США</p>
                        <p>Драма</p>
                        <p>Детектив</p>
                    </div>
                    <p>Культовый сериал о рабочих буднях клинической больницы Принстон-Плейнсборо в штате Нью-Джерси. На протяжении своего существования у сериала вышло восемь сезонов</p>
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
                <video class="video" controls="controls" poster="assets/img/dh.jpg">
                    <source src="assets/video/interstellar.mp4">
                </video>';}?>
                <p class="series">1-1. Пилот</p>
            </section>
            <section>
                <div class="trailers">
                    <h2>Трейлеры</h2>
                    <div class="trailers-content">
                        <div><iframe src="https://www.youtube.com/embed/MczMB8nU1sY?si=4_vwW4l5TXgUQeZ9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        <div><iframe src="https://www.youtube.com/embed/GSgua-jsn-Q?si=W0Dy41JqB6f16Nps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        <div><iframe src="https://www.youtube.com/embed/zpiFx_6dSBM?si=xTE7HIgv7hrW9yWv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    </div>
                </div>
            </section>
            <section>
                <div class="tab-wrapper">
                    <div class="tab">
                        <button class="tablinks" onclick="openSeason(event, 'first')" id="defaultOpen">1 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'sec')">2 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'third')">3 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'London')">4 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'Paris')">5 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'Tokyo')">6 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'London')">1 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'Paris')">7 сезон</button>
                        <button class="tablinks" onclick="openSeason(event, 'Tokyo')">8 сезон</button>
                    </div>
                    <div class="carousel4 tabcontent" id="first">
                        <div class="carousel-inner4">
                            <div class="carousel-item4">
                                <div>
                                    <img src="assets/img/season1.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>1. Пилот</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep2.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>2. Отцовство</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep3.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>3. Бритва Оккама</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep4.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>4. Материнство</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep5.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>5. Будь ты проклят</p>
                                </div>
                            </div>
                            <div class="carousel-item4">
                                <div>
                                    <img src="assets/img/ep6.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>6. Метод Сократа</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep7.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>7. Верность</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep8.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>8. Яд</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep9.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>9. Отказ от реанимации</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep10.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>10. Истории</p>
                                </div>
                            </div>
                            <div class="carousel-item4">
                                <div>
                                    <img src="assets/img/ep11.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>11. Детоксикация</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep12.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>12. Спортивная медицина</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep13.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>13. Проклятый</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep14.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>14. Контроль</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep15.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>15. Законы мафии</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-controls4">
                            <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                            <span class="next"><img src="assets/img/next.svg" alt=""></span>
                        </div>
                        <div class="carousel-indicators4"></div>
                    </div>
                    <script src="assets/js/slider.js"></script>
                    <div class="carousel4 tabcontent" id="sec">
                        <div class="carousel-inner4">
                            <div class="carousel-item4">
                                <div>
                                    <img src="assets/img/ep11.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>1. Смирение</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep12.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>2. Аутопсия</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep13.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>3. Шалтай-Болтай</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep14.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>4. Туберкулез</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep15.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>5. Папенькин сынок</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-controls4">
                            <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                            <span class="next"><img src="assets/img/next.svg" alt=""></span>
                        </div>
                        <div class="carousel-indicators4"></div>
                    </div>
                    <div class="carousel4 tabcontent" id="third">
                        <div class="carousel-inner4">
                            <div class="carousel-item4">
                                <div>
                                    <img src="assets/img/ep16.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>1. Смысл</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep17.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>2. Каин и Авель</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep18.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>3. Информированное...</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep19.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>4. Линии на песке</p>
                                </div>
                                <div>
                                    <img src="assets/img/ep20.png" alt="">
                                    <button><img src="assets/img/play1.png" alt=""></button>
                                    <p>5. Сойти с ума от любви</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-controls4">
                            <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                            <span class="next"><img src="assets/img/next.svg" alt=""></span>
                        </div>
                        <div class="carousel-indicators4"></div>
                    </div>
                </div>
                <script src="assets/js/tabs.js"></script>
            </section>
            <section>
                <div class="carousel-text2">
                    <h2>Актеры и создатели</h2>
                </div>
                <div class="carousel2">
                    <div class="carousel-inner2">
                        <div class="carousel-item2">
                            <div>
                                <img src="assets/img/actor13.png" alt="">
                                <div>
                                    <h2>Хью Лори</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor14.png" alt="">
                                <div>
                                    <h2>Шон Леонард</h2>
                                    <p>Актёр</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor15.png" alt="">
                                <div>
                                    <h2>Лиза Эдельштейн</h2>
                                    <p>Актриса</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/actor16.png" alt="">
                                <div>
                                    <h2>Джесси Спенсер</h2>
                                    <p>Режиссёр</p>
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
            </section>
            <section>
                <div class="review">
                    <h2>Отзывы</h2>
                    <div class="review-item">
                        <img src="assets/img/prev.svg" alt="">
                        <div>
                            <h2>Екатерина</h2>
                            <p>Сериал - просто бомба. Очень насыщенный.</p>
                            <i>02.04.23</i>
                        </div>
                        <div>
                            <h2>Максим</h2>
                            <p>Лучший сериал всех времен. Без вариантов!</p>
                            <i>22.05.23</i>
                        </div>
                        <div>
                            <h2>Иван</h2>
                            <p>Сериал в который можно влюбиться.</p>
                            <i>01.06.23</i>
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
                                <h2>Что остаётся?</h2>
                                <p>Если Вы когда-нибудь хотели быть врачом, мечтаете об этом сейчас, учитесь на врача или уже работаете им, то этот сериал для Вас. Если Вам нравятся сериалы по типу "Шерлок Холмс", "Острые козырьки", "Доктор Кто" и...</p>
                                <i>02.02.23</i>
                            </div>
                            <div class="swiper-slide swiper-slide-active">
                                <i>Петр</i>
                                <h2>Гений или безумец?</h2>
                                <p>Сериал Доктор Хаус, один из тех сериалов, который можно смело пересмотреть. Да и как можно устоять перед обаянием Хью Лори? Из сезона в сезон, мы наблюдаем за острым умом Грегори Хауса, как он выстраивая логические цепочки спасает жизни, держит в...</p>
                                <i>10.04.23</i>
                            </div>
                            <div class="swiper-slide swiper-slide-active">
                                <i>Николай</i>
                                <h2>Строго обязательно к просмотру</h2>
                                <p>Родившись и выросши в современных реалиях, мы, как индустриальные люди, все чаще принимает очень важную и серьезную профессию для себя, как должное. И все больше в весьма щекотливых ситуациях уповаем и благодарим Бога, который...</p>
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
                        <img src="assets/img/frame8.png" alt="">
                        <div>
                            <div>
                                <img src="assets/img/frame9.png" alt="">
                                <img src="assets/img/frame10.png" alt="">
                            </div>
                            <div>
                                <img src="assets/img/frame11.png" alt="">
                                <img src="assets/img/frame12.png" alt="">
                            </div>
                            <div>
                                <img src="assets/img/frame13.png" alt="">
                                <img src="assets/img/frame14.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="assets/js/review.js"></script>
            <section>
                <div class="list">
                    <h2>Похожие сериалы</h2>
                    <div class="list-content">
                        <div>
                            <img src="assets/img/rec5.png" alt="">
                            <h2>Шерлок</h2>
                            <p>2010</p>
                        </div>
                        <div>
                            <img src="assets/img/rec6.png" alt="">
                            <h2>Доктор Кто</h2>
                            <p>1963</p>
                        </div>
                        <div>
                            <img src="assets/img/rec7.png" alt="">
                            <h2>Хороший доктор</h2>
                            <p>2017</p>
                        </div>
                        <div>
                            <img src="assets/img/rec8.png" alt="">
                            <h2>Гримм</h2>
                            <p>2011</p>
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
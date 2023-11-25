<?php
session_start();
$conn = new mysqli('localhost','root','','illuminous');//подключение базы данных
$sql = "SELECT * FROM films";
$result = $conn->query($sql);
$gnr = "SELECT * FROM genres";
$result2 = $conn->query($gnr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Онлайн кинотеатр Illuminous</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="assets/img/favlogo.ico">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function showResult(str){
            if (str.length==0){
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.background="transparent";
                return;
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if (this.readyState==4 && this.status==200){
                    document.getElementById("livesearch").innerHTML=this.responseText;
                    document.getElementById("livesearch").style.background="#1A1A1A";
                }
            }
            xmlhttp.open("GET","livesearch.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <div class="wrapper"><!--общий контейнер-->
        <header>
            <nav>
                <div class="menu"><!--нав меню-->
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
            <div class="css-slider-wrapper">
                <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
                <input type="radio" name="slider" class="slide-radio2" id="slider_2">
                <input type="radio" name="slider" class="slide-radio3" id="slider_3">
                <div class="slider-pagination">
                    <label for="slider_1" class="page1"></label>
                    <label for="slider_2" class="page2"></label>
                    <label for="slider_3" class="page3"></label>
                </div>
                <div class="slider slide-1">
                    <div class="slider-content">
                        <div>
                            <div>
                                <div class="line"></div>
                                <h4>Выбор Illuminous</h4>
                            </div>
                            <h2>Джокер</h2>
                            <p>Готэм. Комик Артур Флек живет с больной матерью, которая с детства учит его «ходить с улыбкой». Пытаясь нести в мир хорошее и дарить людям радость, Артур сталкивается с человеческой жестокостью</p>
                            <button type="button" name="button">Смотреть <img src="assets/img/play.png" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="slider slide-2">
                    <div class="slider-content">
                        <div>
                            <div>
                                <div class="line"></div>
                                <h4>Выбор Illuminous</h4>
                            </div>
                            <h2>Аватар</h2>
                            <p>Бывший морпех Джейк Салли прикован к инвалидному креслу. Несмотря на немощное тело, Джейк в душе по-прежнему остается воином</p>
                            <button type="button" name="button">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="slider slide-3">
                    <div class="slider-content">
                        <div>
                            <div>
                                <div class="line"></div>
                                <h4>Выбор Illuminous</h4>
                            </div>
                            <h2>Бегущий по лезвию 2049</h2>
                            <p>В недалеком будущем мир населен людьми и репликантами, созданными выполнять самую тяжелую работу. Работа офицера полиции Кей — держать репликантов под контролем в условиях нарастающего напряжения</p>
                            <button type="button" name="button">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="search">
                    <div class="carousel-text">
                        <h2>Поиск по сайту</h2>
                        <p>На нашем сайте вы найдете подходящие вам фильмы и сериалы</p>
                    </div>                    
                </div>
                <form>
                    <div class="search-form">
                        <input type="text" onkeyup="showResult(this.value)" placeholder="Поиск...">
                        <img src="assets/img/search.png" alt="">
                    </div>
                    <div id="livesearch"></div>
                </form>
            </section>
            <section>
                <div class="carousel-text">
                    <h2>Смотрите фильмы, которые вам нравятся</h2>
                    <p>На нашем сайте собрано огромное количество фильмов и сериалов на любой вкус</p>
                </div>
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <?php while ($row1 = $result2->fetch_assoc()) { if($row1["id"]<4) { ?>
                            <div>
                                <img src="assets/img/<?php echo $row1["image"]; ?>" alt="">
                                <div>
                                    <h2><?php echo $row1["title"]; ?></h2>
                                    <p>120k+ фильмов</p>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="assets/img/genre4.png" alt="">
                                <div>
                                    <h2>История</h2>
                                    <p>50k+ фильмов</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/genre5.png" alt="">
                                <div>
                                    <h2>Мюзиклы</h2>
                                    <p>30k+ фильмов</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/genre6.png" alt="">
                                <div>
                                    <h2>Комедия</h2>
                                    <p>32k+ фильмов</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="assets/img/genre7.png" alt="">
                                <div>
                                    <h2>Фентези</h2>
                                    <p>65k+ фильмов</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/genre8.png" alt="">
                                <div>
                                    <h2>Триллер</h2>
                                    <p>79k+ фильмов</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/img/genre9.png" alt="">
                                <div>
                                    <h2>Спорт</h2>
                                    <p>30k+ фильмов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                        <span class="next"><img src="assets/img/next.svg" alt=""></span>
                    </div>
                    <div class="carousel-indicators"></div>
                </div>
                <script src="assets/js/slider.js"></script>
            </section>
            <section>
                <div class="tab-wrapper">
                    <div class="tab">
                        <button class="tablinks" onclick="openSeason(event, 'first')" id="defaultOpen">Новинки</button>
                        <button class="tablinks" onclick="openSeason(event, 'sec')">Популярное</button>
                        <button class="tablinks" onclick="openSeason(event, 'third')">Смотрят сейчас</button>
                        <button class="tablinks" onclick="openSeason(event, 'first')">Рекомендации</button>
                        <button class="tablinks" onclick="openSeason(event, 'sec')">Топ 10</button>
                        <button class="tablinks" onclick="openSeason(event, 'third')">Скоро на Illuminous</button>
                    </div>
                    <div class="carousel carousel1 tabcontent" id="first">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <?php while ($row = $result->fetch_assoc()) {
                                    if($row["id"]<5) { ?>
                                <div>
                                    <span class="rate"><?php echo $row["rate"]; ?></span>
                                    <img src="assets/img/<?php echo $row["image"]; ?>" alt="">
                                    <div>
                                        <h2><?php echo $row["title"]; ?></h2>
                                        <p><?php echo $row["year_created"]; ?></p>
                                    </div>
                                    <form action="add_to_favorites.php" method="post">
                                        <input type="hidden" name="film_id" value="<?php echo $row["id"]; ?>">
                                        <?php if(!empty($_SESSION['auth'])){echo '<button class="favs" type="submit">В избранное<img src="assets/img/bookmark.svg" alt=""></button>';} ?>
                                    </form>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                        <div class="carousel-controls">
                            <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                            <span class="next"><img src="assets/img/next.svg" alt=""></span>
                        </div>
                        <div class="carousel-indicators"></div>
                    </div>
                    <div class="carousel carousel1 tabcontent" id="sec">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div>
                                    <span class="rate">8.0</span>
                                    <img src="assets/img/ironman.png" alt="">
                                    <div>
                                        <h2>Железный человек</h2>
                                        <p>2008</p>
                                    </div>
                                </div>
                                <div>
                                    <span class="rate">7.8</span>
                                    <img src="assets/img/therewillbeblood.png" alt="">
                                    <div>
                                        <h2>Нефть</h2>
                                        <p>2007</p>
                                    </div>
                                </div>
                                <div>
                                    <span class="rate">8.6</span>
                                    <img src="assets/img/gentlemen.png" alt="">
                                    <div>
                                        <h2>Джентльмены</h2>
                                        <p>2019</p>
                                    </div>
                                </div>
                                <div>
                                    <span class="rate">8.8</span>
                                    <img src="assets/img/intouchables.png" alt="">
                                    <div>
                                        <h2>1+1</h2>
                                        <p>2011</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-controls">
                            <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                            <span class="next"><img src="assets/img/next.svg" alt=""></span>
                        </div>
                        <div class="carousel-indicators"></div>
                    </div>
                    <div class="carousel carousel1 tabcontent" id="third">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div>
                                    <span class="rate">9.1</span>
                                    <img src="assets/img/shawshank.png" alt="">
                                    <div>
                                        <h2>Побег из Шоушенка</h2>
                                        <p>1994</p>
                                    </div>
                                </div>
                                <div>
                                    <span class="rate">8.8</span>
                                    <img src="assets/img/list.png" alt="">
                                    <div>
                                        <h2>Список Шиндлера</h2>
                                        <p>1993</p>
                                    </div>
                                </div>
                                <div>
                                    <span class="rate">8.7</span>
                                    <img src="assets/img/thedarkknight.png" alt="">
                                    <div>
                                        <h2>Темный рыцарь</h2>
                                        <p>2008</p>
                                    </div>
                                </div>
                                <div>
                                    <span class="rate">8.4</span>
                                    <img src="assets/img/green.png" alt="">
                                    <div>
                                        <h2>Зеленая книга</h2>
                                        <p>2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-controls">
                            <span class="prev"><img src="assets/img/prev.svg" alt=""></span>
                            <span class="next"><img src="assets/img/next.svg" alt=""></span>
                        </div>
                        <div class="carousel-indicators"></div>
                    </div>
                <script src="assets/js/tabs.js"></script>
            </section>
            <section>
                <div class="container mt-4">
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide" style="display: flex; align-items: center;">
                                <div class="blog-slider__img"><img src="assets/img/rec1.jpg" alt=""></div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">
                                        <h2>Интерстеллар</h2>
                                        <p>2014</p>
                                    </div>
                                    <div class="blog-slider-genres">
                                        <p>Драма</p>
                                        <p>Фантастика</p>
                                        <p>Приключения</p>
                                        <p>16+</p>
                                    </div>
                                    <p>Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных...</p>
                                    <form action="interstellar.php">
                                        <button>Смотреть</button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-slider__item swiper-slide" style="display: flex; align-items: center;">
                                <div class="blog-slider__img"><img src="assets/img/rec4.png" alt=""></div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">
                                        <h2>Доктор Хаус</h2>
                                        <p>2004</p>
                                    </div>
                                    <div class="blog-slider-genres">
                                        <p>Детектив</p>
                                        <p>Драма</p>
                                        <p>16+</p>
                                    </div>
                                    <p>Сериал рассказывает о команде врачей, которые должны правильно поставить диагноз пациенту и спасти его. Возглавляет команду доктор Грегори...</p>
                                    <form action="doctor-house.php">
                                        <button>Смотреть</button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-slider__item swiper-slide" style="display: flex; align-items: center;">
                                <div class="blog-slider__img"><img src="assets/img/rec3.png" alt=""></div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">
                                        <h2>Остров проклятых</h2>
                                        <p>2009</p>
                                    </div>
                                    <div class="blog-slider-genres">
                                        <p>Триллер</p>
                                        <p>Детектив</p>
                                        <p>Драма</p>
                                        <p>18+</p>
                                    </div>
                                    <p>Два американских судебных пристава отправляются на один из островов в штате Массачусетс, чтобы расследовать исчезновение пациентки клиники...</p>
                                    <form action="#">
                                        <button>Смотреть</button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-slider__item swiper-slide" style="display: flex; align-items: center;">
                                <div class="blog-slider__img"><img src="assets/img/rec2.png" alt=""></div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">
                                        <h2>Аркейн</h2>
                                        <p>2021</p>
                                    </div>
                                    <div class="blog-slider-genres">
                                        <p>Боевик</p>
                                        <p>Фантастика</p>
                                        <p>Фэнтези</p>
                                        <p>16+</p>
                                    </div>
                                    <p>История разворачивается в утопическом краю Пилтовер и жестоком подземном мире Заун и рассказывает о становлении двух легендарных чемпионов...</p>
                                    <form action="#">
                                        <button>Смотреть</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
                <script src="assets/js/vert-slider.js"></script>
            </section>
            <section class="section">
                <div class="text">
                    <h3>Illuminous+</h3>
                    <h2>Фильмы и сериалы по подписке Illuminous+</h2>
                    <p>Бесплатно до конца года</p>
                </div>
                <div class="icons">
                    <div class="icons-items">
                        <div>
                            <img src="assets/img/icon1.png" alt="">
                            <p>Одна подписка для всей семьи или друзей</p>
                        </div>
                        <div>
                            <img src="assets/img/icon2.png" alt="">
                            <p>Максимальное качество</p>
                        </div>
                        <div>
                            <img src="assets/img/icon3.png" alt="">
                            <p>Просмотр офлайн</p>
                        </div>
                    </div>
                    <div class="icons-items">
                        <div>
                            <img src="assets/img/icon4.png" alt="">
                            <p>Никакой рекламы</p>
                        </div>
                        <div>
                            <img src="assets/img/icon5.png" alt="">
                            <p>Каждый день найдётся, что посмотреть</p>
                        </div>
                        <div>
                            <img src="assets/img/icon6.png" alt="">
                            <p>Можно отключить в любой момент</p>
                        </div>
                    </div>
                </div>
                <button>Попробовать бесплатно</button>
            </section>
            <section>
                <div class="subs">
                    <h2>Выберите подписку которая подходит Вам</h2>
                    <p>Мы представляем три варианта подписки, которые подойдут вам по ценеи потребностям</p>
                    <div class="subs-content">
                        <div>
                            <h2>Easy Illuminous</h2>
                            <p>Для мобильного приложения. Может смотреть 1 человек</p>
                            <h3>99 ₽/мес</h3>
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
                            <form action=<?php if(empty($_SESSION['auth'])){echo '"registration.php"';} if(!empty($_SESSION['auth'])){echo '"subs.php"';}?>>
                                <button>Попробовать</button>
                            </form>
                        </div>
                        <div>
                            <h2>Easy Illuminous</h2>
                            <p>Для мобильного приложения. Может смотреть 1 человек</p>
                            <h3>99 ₽/мес</h3>
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
                            <form action="subs.php">
                                <button>Попробовать</button>
                            </form>
                        </div>
                        <div>
                            <h2>Easy Illuminous</h2>
                            <p>Для мобильного приложения. Может смотреть 1 человек</p>
                            <h3>99 ₽/мес</h3>
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
                            <form action="subs.php">
                                <button>Попробовать</button>
                            </form>
                        </div>
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
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СНТ Ветеран</title>
    <meta name="title" content="ТСН СНТ Ветеран">
    <meta name="description" content="Сайт ТСН СНТ Ветеран">
    <link rel="icon" href="http://localhost:3000//favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/normalize.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/css/style.min.css ">
    <?php 
        wp_head();
    ?>

</head>

<body>
    <section class="promo">
        <div class="container ">
            <header>
                <div class="promo__header">
                    <h1 class="promo__header_title">ТСН СНТ “ВЕТЕРАН”</h1>
                    <h3 class="promo__header_adress">188640, Ленинградская область, Всеволожский район, Куйвозовское поселение, массив "Грузино",
                        <br>ТСН СНТ "Ветеран"</h3>
                </div>
                <nav>
                    <ul class="menu ">
                        <li class="menu_item"><a href="#" class="menu_link">Главная</a></li>
                        <li class="menu_item"><a href="#" class="menu_link">Телефоны SOS</a></li>
                        <li class="menu_item"><a href="#" class="menu_link">Документы</a></li>
                        <li class="menu_item"><a href="#" class="menu_link">Новости</a></li>
                        <li class="menu_item"><a href="#" class="menu_link">Контакты</a></li>
                    </ul>
                </nav>
                <div class="hamburger ">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </header>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="wrapper">
                <div class="left">
                    <div class="plan">
                        <h2 class="subtitle ">План садоводства</h2>
                        <img src=" " alt=" " class="plan__snt ">
                    </div>
                    <div class="ads">
                        <h2 class="subtitle">Объявления</h2>
                        <div class="ads__items ">
                            <div class="row1">
                                <div class="ads__items_old_1 ">
                                    <img src="<?php echo bloginfo('template_url');?>/assets/img/ads/1.png" alt="new" class="1"> .
                                    <div class="text">
                                        <h1 class="ads__items_item_title ">Новое расписание маршруток</h1>
                                        <p class="ads__items_item_descr ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, alias expedita illo, illum repellendus, vitae corrupti totam magnam animi eum perferendis odit mollitia. Est culpa amet dolorum nulla voluptatum quod!</p>
                                    </div>
                                </div>
                                <div class=" ads__items_old_2 ">
                                    <img src="<?php echo bloginfo('template_url');?>/assets/img/ads/1.png" alt="new" class="1"> .
                                    <div class="text">
                                        <h1 class="ads__items_item_title ">Новое расписание маршруток</h1>
                                        <p class="ads__items_item_descr ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, alias expedita illo, illum repellendus, vitae corrupti totam magnam animi eum perferendis odit mollitia. Est culpa amet dolorum nulla voluptatum quod!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="ads__items_new ">
                                    <img src="<?php echo bloginfo('template_url');?>/assets/img/ads/1.png" alt="new" class="1"> .
                                    <div class="text">
                                        <h1 class="ads__items_item_title ">Новое расписание маршруток</h1>
                                        <p class="ads__items_item_descr ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, alias expedita illo, illum repellendus, vitae corrupti totam magnam animi eum perferendis odit mollitia. Est culpa amet dolorum nulla voluptatum quod!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row3">
                                <div class="ads__items_old_3 ">
                                    <img src="<?php echo bloginfo('template_url');?>/assets/img/ads/1.png" alt="new" class="1"> .
                                    <div class="text">
                                        <h1 class="ads__items_item_title ">Новое расписание маршруток</h1>
                                        <p class="ads__items_item_descr ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, alias expedita illo, illum repellendus, vitae corrupti totam magnam animi eum perferendis odit mollitia. Est culpa amet dolorum nulla voluptatum quod!</p>
                                    </div>
                                </div>
                                <div class="ads__items_old_4 ">
                                    <img src="<?php echo bloginfo('template_url');?>/assets/img/ads/1.png" alt="new" class="1"> .
                                    <div class="text">
                                        <h1 class="ads__items_item_title ">Новое расписание маршруток</h1>
                                        <p class="ads__items_item_descr ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, alias expedita illo, illum repellendus, vitae corrupti totam magnam animi eum perferendis odit mollitia. Est culpa amet dolorum nulla voluptatum quod!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news ">
                        <h2 class="subtitle ">Новости</h2>
                        <div class="news__wrapper">
                            <div class="news__wrapper__items">
                                <a href="#"><img src=" <?php echo bloginfo('template_url');?>/assets/img/news/1.jpg " alt="news_img " class="news__wrapper__items_img "></a>
                                <div class="news__wrapper__items_content ">
                                    <h3 class="news_title ">
                                        <a href="# ">Подача показаний 25 числа</a>
                                    </h3>
                                    <p class=" news_descr ">В этом году мы переходим на снятие показаний электричества
                                        <a href="# ">строго 25 числа</a>
                                    </p>
                                    <time datetime="2022-01-10 ">10 января 2022</time>
                                </div>
                            </div>
                            <div class="news__wrapper__items">
                                <a href="#"><img src=" <?php echo bloginfo('template_url');?>/assets/img/news/1.jpg " alt="news_img " class="news__wrapper__items_img "></a>
                                <div class="news__wrapper__items_content ">
                                    <h3 class="news_title ">
                                        <a href="# ">Подача показаний 25 числа</a>
                                    </h3>
                                    <p class=" news_descr ">В этом году мы переходим на снятие показаний электричества
                                        <a href="# ">строго 25 числа</a>
                                    </p>
                                    <time datetime="2022-01-10 ">10 января 2022</time>
                                </div>
                            </div>
                            <div class="news__wrapper__items">
                                <a href="#"><img src=" <?php echo bloginfo('template_url');?>/assets/img/news/1.jpg " alt="news_img " class="news__wrapper__items_img "></a>
                                <div class="news__wrapper__items_content ">
                                    <h3 class="news_title ">
                                        <a href="# ">Подача показаний 25 числа</a>
                                    </h3>
                                    <p class=" news_descr ">В этом году мы переходим на снятие показаний электричества
                                        <a href="# ">строго 25 числа</a>
                                    </p>
                                    <time datetime="2022-01-10 ">10 января 2022</time>
                                </div>
                            </div>
                            <h2>Другие <a href="# ">новости</a></h2>
                            <!-- <div id="NewsTicker ">
                                <div id="NewsVertical ">
                                    <ul id="TickerVertical ">
                                        <li>
                                            <img style="width: 130px; height: 130px " src="<?php echo bloginfo('template_url');?>/assets/img/news/1.jpg " border="0 " class="NewsImg " />
                                            <span class="NewsTitle "><a href="https://pribylwm.ru/raskrutka-i-seo ">Раскрутка и SEO</a> 
                                            </span> Здесь Вы узнаете все о том, как сделать SEO продвижение и раскрутку своего сайта или блога бесплатно!
                                            <span class="NewsFooter "><strong>Опубликовано 25 мая</strong> - 324 комментария</span> </li>
                                        <li>
                                            <img src="pic/N0002.png " border="0 " class="NewsImg " />
                                            <span class="NewsTitle ">
                                                <a href="https://pribylwm.ru/vidy-zarabotka ">Виды заработка в интернете</a>
                                            </span> Информация по видам и способам заработка в интернете на своем ресурсе. Программы, сервисы и всевозможные фишки, которые Вы болше ни где не сможете найти!
                                            <span class="NewsFooter "><strong>Опубликовано 22 мая</strong> - 265 комментария</span> </li>
                                        <li>
                                            <img src="pic/N0003.png " border="0 " class="NewsImg " />
                                            <span class="NewsTitle ">
                                          <a href="https://pribylwm.ru/web ">Все для новичка</a>            </span> Вы новичок в интернете? И не знаете с чего начать? Вы попали по адресу! Здесь Вы узнаете о том,
                                            как создать свой сайт бесплатно и начать зарабатывать!<span class="NewsFooter "><strong>Опубликовано 18 мая</strong> - 342 комментария</span> </li>
                                        <li>
                                            <img src="pic/N0004.png " border="0 " class="NewsImg " />
                                            <span class="NewsTitle "><a href="https://pribylwm.ru/blogovedenie ">Все о блоговедении... </a></span> Интересные и полезные новости о создании сайта здесь! Ничните свой интернет-бизнес с нуля! Узнайте как все
                                            правильно сделать свой сайт прибыльным!<span class="NewsFooter "><strong>Опубликовано 18 мая</strong> - 342 комментария</span> </li>
                                    </ul>
                                </div>
                                <h2>Другие <a href="https://pribylwm.ru/poleznye-programmy ">новости</a></h2>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="sidebar ">
                    <aside>
                        <button>Войти<br> в личный кабинет</button>
                        <div class="requisites ">
                            <p>
                                ИНН 4703012303
                                <br>ОГРН103700554481<br> КПП 4703012303 <br>Председатель <br>Долгих Ольга Ивановна
                                <br>тел.: +7 965 15 59 15 <br>с 17 октября 2021<br> Садоводство основано 1968 году. </p>
                        </div>
                        <div class="feedback ">
                            <h2 class="feedback__title ">Обратная<br> связь</h2>
                            <form class="feedback__form " action="# ">
                                <div class="feedback__input ">
                                    <input name="name " required placeholder="Ваше имя " type="text ">
                                </div>
                                <div class="feedback__input ">
                                    <input name="email " required placeholder="Ваш E-mail " type="email ">
                                </div>
                                <div class="feedback__textarea ">
                                    <textarea name="text " required placeholder="Ваше сообщение " id="text "></textarea>
                                </div>
                                <div class="feedback__triggers ">
                                    <button class="feedback__btn btn ">Отправить</button>
                                    <div class="feedback__policy ">
                                        <input id="checkbox " required type="checkbox ">
                                        <span>Я согласен(а) с <a href="/policy.html ">политикой конфиденциальности</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="documents ">
                            <h2 class="ducuments__title ">Документы</h2>
                            <div class="documents__list ">
                                <ul>
                                    <li>Устав</li>
                                </ul>
                            </div>
                        </div>
                        <div class="whatsapp ">
                            <h2 class="whatsapp__title "><span>Наша группа в<br></span>WhatsApp</h2>
                            <div class="whatsapp__qr ">
                                <a href="# "></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container ">
            <div class="footer__wrapper ">
                <nav>
                    <ul class="footer__menu ">
                        <li><a class="footer__menu_link " href="# ">Главная</a></li>
                        <li><a class="footer__menu_link " href="# ">Телефоны SOS</a></li>
                        <li><a class="footer__menu_link " href="# ">Документы</a></li>
                        <li><a class="footer__menu_link " href="# ">Новости</a></li>
                        <li><a class="footer__menu_link " href="# ">Контакты</a></li>
                    </ul>
                </nav>
                <div class="footer__managment ">
                    <h3 class="footer__managment_title ">Члены правления:</h3>
                    <ul>
                        <li>37 уч. Долгих Ольга Ивановна +7(965) 016-59-15 enjoy4info@gmail.com - Председатель</li>
                        <li>28 уч. Бируля Александр Иванович +7(921) 966-80-75 сhesnokova77@gmail.com</li>
                        <li>12 уч. Никитин Константин Евгеньевич +7(950) 033-11-11 actrit@gmail.com</li>
                        <li>21 уч. Сергеев Дмитрий +7(911) 117-62-51 sergeev-dmitrii@list.ru</li>
                        <li>40 уч. Козлова Алла Евгеньевна +7(981) 123-27-61 allakozlov@yandex.ru</li>
                        <li>66 уч. Жаворонков Артём Алексеевич +7(911) 200-22-33 3442266@gmail.com</li>
                        <li>98 уч. Минаев Дмитрий Евгеньевич +7(911) 155-64-10 d-minaev@yandex.ru</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js "></script>
    <!-- <script language="javascript " type="text/javascript ">
        var Ticker = new Class({
            setOptions: function(options) {
                this.options = Object.extend({
                    speed: 5000,
                    delay: 5000,
                    direction: 'vertical',
                    onComplete: Class.empty,
                    onStart: Class.empty
                }, options || {});
            },
            initialize: function(el, options) {
                this.setOptions(options);
                this.el = $(el);
                this.items = this.el.getElements('li');
                var w = 0;
                var h = 0;
                if (this.options.direction.toLowerCase() == 'horizontal') {
                    h = this.el.getSize().size.y;
                    this.items.each(function(li, index) {
                        w += li.getSize().size.x;
                    });
                } else {
                    w = this.el.getSize().size.x;
                    this.items.each(function(li, index) {
                        h += li.getSize().size.y;
                    });
                }
                this.el.setStyles({
                    position: 'absolute',
                    top: 0,
                    left: 0,
                    width: w,
                    height: h
                });
                this.fx = new Fx.Styles(this.el, {
                    duration: this.options.speed,
                    onComplete: function() {
                        var i = (this.current == 0) ? this.items.length : this.current;
                        this.items[i - 1].injectInside(this.el);
                        this.el.setStyles({
                            left: 0,
                            top: 0
                        });
                    }.bind(this)
                });
                this.current = 0;
                this.next();
            },
            next: function() {
                this.current++;
                if (this.current >= this.items.length) this.current = 0;
                var pos = this.items[this.current];
                this.fx.start({
                    top: -pos.offsetTop,
                    left: -pos.offsetLeft
                });
                this.next.bind(this).delay(this.options.delay + this.options.speed);
            }
        });
        var hor = new Ticker('TickerVertical', {
            speed: 1000,
            delay: 4000,
            direction: 'horizontal'
        });
    </script> -->
</body>

</html>
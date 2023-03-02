<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="static/css/index.css" rel="stylesheet">
    <title>Coffee Store</title>
    <link rel="icon" href="static/images/coffee.png">
</head>
<body>
<header>
    <?php include 'blocks/header.php' ?>
</header>

<div class="scroller">
    <section class="greetings">
        <div class="content">
            <img class="me" src="static/images/me.png">
            <div class="right">
                <div>
                    <h1>Кирилл Романюк <span class="small-text" id="typing"></span></h1>
                </div>
                <div class="center-align">
                    <p>Студент 1 курса ВГУ ФКН ИСИТ, 18 лет</p>
                    <p>Город Воронеж</p>
                </div>
                <div class="right-align">
                    <a class="button" href = "mailto: r0manovic1@yandex.ru">Contact Me</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about-me">
        <div class="content">
            <h2>Обо мне</h2>
            <p>
                Кроме программирования, я люблю рисовать и читать, моими любимыми жанрами являются философия и психология. Я довольно спокойный,
                усердный и усидчивый. В напряженных ситуациях стараюсь сохранять спокойствие и не поддаваться панике. Могу взять на себя роль лидера.
                Честно и с ответственностью выполняю поставленные задачи, стараясь произвести максимум впечатления от каждого завершенного проекта.
            </p>
            <p class="even">
                Мое знакомство с программированием произошло в 2019 году, когда я решил поступить в открывшуюся точку Яндекс Лицея в моей школе.
                Спустя два года обучения в лицее и окончании его с отличием, я был знаком с такими библиотеками как: <span>PyQT5</span>, <span>Pygame</span>,
                <span>Flask</span>, а так же умел создавать ботов для VK, Telegram и Discord.
            </p>
            <p>
                Затем я решил ознакомиться с Web-разработкой и начать изучать <span>Javascript</span>. Спустя некоторое время обучения Frontend разработке
                я решил опробовать Backend на JS, поэтому изучил <span>Node.js</span> и <span>Express.js</span>.
            </p>
            <p class="even">
                Затем я поступил на курс <span>"Web-разработка на Django"</span> от Лицея++ академии Яндекса, в котором я познакомился с <span>Django</span>.
                Кроме полученных знаний, я получил опыт работы в команде, так как заключительный проект я делал не один. Идея проекта была частично придумана нашим
                ментором, этот проект представляет собой чат с использованием <span><a href="https://github.com/Goddo-ro/django-websocket-chat">Django Web-сокетов</a>></span>.
            </p>
            <p>
                Этим летом заместитель главы цифровизации образования в Липецкой области связался со мной и предложил присоединиться к разрабатываемому ими проекту
                в качестве Frontend разработчика. Данный проект представляет собой "макет" для сайтов всех школ Липецкой области. Используя этот макет,
                школы могут иметь свои сайты, не нанимая сторонних разработчиков. Ссылка на репозиторий Frontend части проекта:
                <span><a href="https://github.com/Goddo-ro/schools-website">Schools Website.</a></span>
            </p>
            <p class="even">
                В данный момент я продвигаюсь в изучении Frontend разработки, изучая <span>React</span>. В связи с моим обучением в вузе это делать затруднительно, но я стараюсь
                прикладывать усилия и развиваться в качестве Frontend разработчика. В данный момент мною разрабатывается данный вебсайт:
                <span><a href="https://github.com/Goddo-ro/AnimeKAR">AnimeKAR</a></span>
            </p>
        </div>
    </section>
    <section class="project">
        <div class="content">
            <h2>О проекте:</h2>
            <p>
                Мой проект представляет собой простой кофе магазин, реализующий в
                себе регистрацию и логин пользователя. Со стороны админа (админ
                задается напрямую в базе данных с соответственным полем) есть возможность
                добавления, изменения и удаления товара. Обычный пользователь может добавлять товар
                в корзину, удалять его и изменять кол-во товара в самой корзине. После нажатия
                на кнопку "Оплатить" корзина отчищается.
            </p>
            <div class="wrapper">
                <div>
                    <h4>
                        Функционал моего проекта:
                    </h4>
                    <ul>
                        <li>Логин и регистрация пользователя.</li>
                        <li>Функционал со стороны админа:
                            <ol>
                                <li>Добавление товара</li>
                                <li>Редактирование товара</li>
                                <li>Удаление товара</li>
                                <li>Просмотр всех пользователей</li>
                                <li>Удаление пользователя</li>
                            </ol>
                        </li>
                        <li>Работа с товаром со стороны пользователя:
                            <ol>
                                <li>Просмотр товаров</li>
                                <li>Добавление товаров в корзину</li>
                                <li>"Покупка" товаров</li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>Технологии, используемые в моем проекте:</h4>
                    <ul>
                        <li>HTML & CSS</li>
                        <li>Javascript:
                            <ol>
                                <li>Работа с cookie</li>
                                <li>Работа с localstorage</li>
                                <li>Взаимодействие с элементами DOM дерева</li>
                            </ol>
                        </li>
                        <li>PHP
                        </li>
                        <li>MySQL:
                            <ol>
                                <li>Работа с данными пользователей</li>
                                <li>Работа с данными товаров</li>
                                <li>Работа с данными корзин</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="content">
            <div class="social">
                <a href="https://t.me/goddo_ra"><img src="static/images/telegram.png" alt="telegram"></a>
                <a href="https://vk.com/id325432771"><img src="static/images/vk.png" alt="vk"></a>
                <a href="https://github.com/Goddo-ro"><img src="static/images/github.png" alt="github"></a>
            </div>
            <div class="remove-container">
                <img class="remove-image" src="static/images/remove.png" />
                <span class="remove-text">Удалить cookie</span>
            </div>
        </div>
    </footer>

    <script src="static/js/scroll_cookie.js" type="module"></script>
    <script src="static/js/cookie.js" type="module"></script>
    <script src="static/js/typing.js"></script>
    <script src="static/js/remove_text_animation.js" type="module"></script>
</div>
</body>
</html>
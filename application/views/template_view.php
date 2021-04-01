<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Главная</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="/images/freednet.png">
                </div>
                <nav class="menu">
                    <ul class="nav-menu">
                        <li><a href="/">ГЛАВНАЯ</a></li>
                        <li><a href="/services">УСЛУГИ</a></li>
                        <li><a href="/portfolio">ПОРТФОЛИО</a></li>
                        <li><a href="/contacts">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="content">
                <?php
                    include 'application/views/'.$content_view;
                ?>
            </div>
            <div class="footer">
                <div class="contacts">
                    <h3>НАШИ КОНТАКТЫ</h3>
                    <p>
                        Тел. +79179786399<br>
                        email: sergeykozlov25@mail.ru
                    </p>
                </div>
                <div class="company">
                    <h3>О uCoz</h3>
                    <p><img src="/images/maxresdefault.jpg" align="left">uCoz - это бесплатная система управления сайтом и хостинг для сайтов, созданных с её использованием. Модули uCoz могут использоваться как в единой связке для создания полнофункционального сайта, так и по отдельности, например в качестве блог-платформы, веб-форума и др. На данный момент в системе создано более 700 тысяч сайтов.</p>
                </div>
            </div>
        </div>
    </body>
</html>
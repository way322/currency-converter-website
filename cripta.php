<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/front/style.css">
    <link rel="stylesheet" href="/front/reset.css">
    <link rel="stylesheet" href='/front/cripta.css'>

</head>

<body>
    <div class="HH-container">
        <header class="shapka">
            <a href="index.php" class="logo-heder link"><img src="/img/logo.svg" class="logo-img-heder"></a>
            <ul class="heder-menu-ul">
                <li class="header__menu-item">
                    <a href="index.php" class="header__menu-item-link link">Конвертор валют</a>
                </li>
                <li class="header__menu-item">
                    <a href="map.php" class="header__menu-item-link link">Карта банков</a>
                </li>
            </ul>
            <div class="register link">
                <a href="reg.php " class="heder-reg">Зарегистрироваться</a>
                <a href="reg.php " class="heder-reg-svg"><img src="img/key.svg"> </a>
            </div>
        </header>
        <div class="create-line"></div>
    </div>
    <div class="create-line"></div>
    <section class="section-Workspace  ">
        <div class="contener-flex">
            <div class="contener-cripta">
                <div class="crypto-container" id="crypto-container"></div>
                <div class="contaner-information">
                    <p class="cripta-this">Криптовалюта — это цифровая валюта, которая не имеет физического выражения и не контролируется
                        государством. Она работает на блокчейне. Это технология, которая распределяет данные об операциях среди
                        всех участников сети. Криптовалюту можно покупать, продавать, использовать для инвестирования, хранения
                        денег или оплаты товаров и услуг. Но цену большинства криптовалют невозможно предсказать — всё зависит
                        от спроса и внешних факторов.</p>
                    <div class="img-flex">
                        <img src="img/images1.svg" alt="" class="img img-many">
                        <img src="img/images2.svg" alt="" class="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="podval contener-flex">
            <dialog class="dialog" id="some-dialog-id-1">
                <h2 class="dialog__title">https://t.me/program</h2>
                <button class="dialog__button button-orange" type="button" onclick="window['some-dialog-id-1'].close()">
                    закрыть
                </button>
            </dialog>
            <dialog class="dialog" id="some-dialog-id-2">
                <h2 class="dialog__title">program.gmail</h2>

                <button class="dialog__button button-orange" type="button" onclick="window['some-dialog-id-2'].close()">
                    закрыть
                </button>
            </dialog>
            <dialog class="dialog" id="some-dialog-id-3">
                <h2 class="dialog__title">+79154336573</h2>

                <button class="dialog__button button-orange" type="button" onclick="window['some-dialog-id-3'].close()">
                    закрыть
                </button>
            </dialog>
                <div class="text-div">
                    <p class="footer-text text-cookie">Мы используем файлы cookie для того, чтобы предоставить пользователям больше возможностей при посещении сайта
                        Bastard.ru.</p>
                    <p class="footer-text ">© 2009–2024, ООО «Бастард.ру». При использовании материалов гиперссылка на Bastard.ru обязательна. ИНН 7710718303,
                        ОГРН 1087746642774. 109544, г. Москва, Д.пушкина ул.Колотушкина д.12</p>
                </div>
                <div class="technical-support">
                    <h3 class="footer-otvet">Ответим на ваши вопросы</h3>
                    <ul class="pomosh-ul">
                        <li class="pomoshi-li"><button onclick="window['some-dialog-id-1'].show() " class="pomoshi-li"><img src="img/telega.svg"></button></li>
                        <li class="pomoshi-li"><button onclick="window['some-dialog-id-2'].show() " class="pomoshi-li"><img src="img/mail.svg" alt=""></button></li>
                        <li class="pomoshi-li"><button onclick="window['some-dialog-id-3'].show() " class="pomoshi-li"><img src="img/telefon.svg" alt=""></button></li>
                    </ul>
                    <p class="pomosh">Служба заботы о клиентах
                        8 233 234 43 54
                        Ежедневно с 9:00 до 21:00 по МСК</p>

                </div>
            </footer>
    <script src="script/app.js"></script>
</body>

</html>
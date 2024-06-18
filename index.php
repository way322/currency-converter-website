<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/front/style.css">
    <link rel="stylesheet" href="/front/reset.css">
    <link rel="stylesheet" href="/front/index.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="HH-container">
        <header class="shapka">
            <a href="index.php" class="logo-heder"><img src="/img/logo.svg"></a>
            <ul>
                <li class="header__menu-item">
                    <a href="cripta.php" class="header__menu-item-link link">Курсы криптовалют</a>
                </li>
                <li class="header__menu-item">
                    <a href="map.php" class="header__menu-item-link link">Карта банков</a>
                </li>
            </ul>
            <div class="register">
                <a href="reg.php" class="heder-reg">Зарегистрироваться</a>
                <a href="reg.php" class="heder-reg-svg"><img src="img/key.svg"> </a>
            </div>
        </header>
        <div class="create-line"></div>
    </div>
    <section class="section-Workspace section-convertor">
        <div class="contener-flex">
            <h1 class="h1-convertor">Конвертер валют</h1>
            <div class="convertor-flex">
                <div class="container-valit">
                    <h2 class="h2-convertor">У меня есть</h2>
                    <input type="number" id="input" class="input-convertor convertor-input" />
                    <select name="strani" id="input-currency" class="input-convertor convertor-select">
                        <option value="RUB">RUB — Рубли</option>
                        <option value="USD">USD — Доллар США</option>
                        <option value="EUR">EUR — Евро</option>
                        <option value="GBP">GBP — Фунт стерлингов</option>
                        <option value="AUD">AUD - Австралийский доллар</option>
                        <option value="AZN">AZN - Азербайджанский манат</option>
                        <option value="AMD">AMD - Армянских драмов</option>
                        <option value="BYN">BYN - Белорусский рубль</option>
                        <option value="BGN">BGN - Болгарский лев</option>
                        <option value="BRL">BRL - Бразильский реал</option>
                        <option value="HUF">HUF - Венгерских форинтов</option>
                        <option value="VND">VND - Вьетнамских донгов</option>
                        <option value="HKD">HKD - Гонконгский доллар</option>
                        <option value="GEL">GEL - Грузинский лари</option>
                        <option value="DKK">DKK - Датская крона</option>
                        <option value="AED">AED - Дирхам ОАЭ</option>
                        <option value="EGP">EGP - Египетских фунтов</option>
                        <option value="INR">INR - Индийских рупий</option>
                        <option value="IDR">IDR - Индонезийских рупий</option>
                        <option value="KZT">KZT - Казахстанских тенге</option>
                        <option value="CAD">CAD - Канадский доллар</option>
                        <option value="QAR">QAR - Катарский риал</option>
                        <option value="KGS">KGS - Киргизских сомов</option>
                        <option value="CNY">CNY - Китайский юань</option>
                        <option value="MDL">MDL - Молдавских леев</option>
                        <option value="NZD">NZD - Новозеландский доллар</option>
                        <option value="NOK">NOK - Норвежских крон</option>
                        <option value="PLN">PLN - Польский злотый</option>
                        <option value="RON">RON - Румынский лей</option>
                        <option value="XDR">XDR - СДР</option>
                        <option value="SGD">SGD - Сингапурский доллар</option>
                        <option value="TJS">TJS - Таджикских сомони</option>
                        <option value="THB">THB - Таиландских батов</option>
                        <option value="TRY">TRY - Турецких лир</option>
                        <option value="TMT">TMT - Новый туркменский манат</option>
                        <option value="UZS">UZS - Узбекских сумов</option>
                        <option value="UAH">UAH - Украинских гривен</option>
                        <option value="CZK">CZK - Чешских крон</option>
                        <option value="SEK">SEK - Шведских крон</option>
                        <option value="CHF">CHF - Швейцарский франк</option>
                        <option value="RSD">RSD - Сербских динаров</option>
                        <option value="ZAR">ZAR - Южноафриканских рэндов</option>
                        <option value="KRW">KRW - Вон Республики Корея</option>
                        <option value="JPY">JPY - Японских иен</option>
                    </select>
                </div>



                <button id="reverseButton" class="button-revers"><img src="img/strelki.svg"></button>


                <div class="container-valit">
                    <h2 class="h2-convertor">Получаю</h2>
                    <input type="number" id="result" readonly class="input-convertor convertor-input" />
                    <select name="strani" id="output-currency" class="input-convertor convertor-select">
                        <option value="RUB">RUB — Рубли</option>
                        <option value="USD">USD — Доллар США</option>
                        <option value="EUR">EUR — Евро</option>
                        <option value="GBP">GBP — Фунт стерлингов</option>
                        <option value="AUD">AUD - Австралийский доллар</option>
                        <option value="AZN">AZN - Азербайджанский манат</option>
                        <option value="AMD">AMD - Армянских драмов</option>
                        <option value="BYN">BYN - Белорусский рубль</option>
                        <option value="BGN">BGN - Болгарский лев</option>
                        <option value="BRL">BRL - Бразильский реал</option>
                        <option value="HUF">HUF - Венгерских форинтов</option>
                        <option value="VND">VND - Вьетнамских донгов</option>
                        <option value="HKD">HKD - Гонконгский доллар</option>
                        <option value="GEL">GEL - Грузинский лари</option>
                        <option value="DKK">DKK - Датская крона</option>
                        <option value="AED">AED - Дирхам ОАЭ</option>
                        <option value="EGP">EGP - Египетских фунтов</option>
                        <option value="INR">INR - Индийских рупий</option>
                        <option value="IDR">IDR - Индонезийских рупий</option>
                        <option value="KZT">KZT - Казахстанских тенге</option>
                        <option value="CAD">CAD - Канадский доллар</option>
                        <option value="QAR">QAR - Катарский риал</option>
                        <option value="KGS">KGS - Киргизских сомов</option>
                        <option value="CNY">CNY - Китайский юань</option>
                        <option value="MDL">MDL - Молдавских леев</option>
                        <option value="NZD">NZD - Новозеландский доллар</option>
                        <option value="NOK">NOK - Норвежских крон</option>
                        <option value="PLN">PLN - Польский злотый</option>
                        <option value="RON">RON - Румынский лей</option>
                        <option value="XDR">XDR - СДР</option>
                        <option value="SGD">SGD - Сингапурский доллар</option>
                        <option value="TJS">TJS - Таджикских сомони</option>
                        <option value="THB">THB - Таиландских батов</option>
                        <option value="TRY">TRY - Турецких лир</option>
                        <option value="TMT">TMT - Новый туркменский манат</option>
                        <option value="UZS">UZS - Узбекских сумов</option>
                        <option value="UAH">UAH - Украинских гривен</option>
                        <option value="CZK">CZK - Чешских крон</option>
                        <option value="SEK">SEK - Шведских крон</option>
                        <option value="CHF">CHF - Швейцарский франк</option>
                        <option value="RSD">RSD - Сербских динаров</option>
                        <option value="ZAR">ZAR - Южноафриканских рэндов</option>
                        <option value="KRW">KRW - Вон Республики Корея</option>
                        <option value="JPY">JPY - Японских иен</option>
                    </select>
                </div>
            </div>
            <div class="grafik">
                <h2 class="grafik-rub">График изменения курса доллара к рублю</h2>
                <canvas id="dayChart" width="770" height="220"></canvas>
                <canvas id="monthChart" width="0" height="100%"></canvas>
                <canvas id="yearChart" width="0" height="100%"></canvas>
            </div>
        </div>
    </section>
    <footer class="podval contener-flex">
        <div class="text-div">
            <p class="footer-text text-cookie">Мы используем файлы cookie для того, чтобы предоставить пользователям больше возможностей при посещении сайта
                Bastard.ru.</p>
            <p class="footer-text text-info">© 2009–2024, ООО «Бастард.ру». При использовании материалов гиперссылка на Bastard.ru обязательна. ИНН 7710718303,
                ОГРН 1087746642774. 109544, г. Москва, Д.пушкина ул.Колотушкина д.12</p>
        </div>
        <div class="technical-support">
            <h3 class="footer-otvet">Ответим на ваши вопросы</h3>
            <ul>
                <li><a href=""><img src="img/telega.svg"></a></li>
                <li><a href=""><img src="img/mail.svg" alt=""></a></li>
                <li><a href=""><img src="img/telefon.svg" alt=""></a></li>
            </ul>
            <p>Служба заботы о клиентах
                8 233 234 43 54
                Ежедневно с 9:00 до 21:00 по МСК</p>
        </div>
    </footer>
    <script src="script/converter.js">

    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/front/reg.css">
    <link rel="stylesheet" href="/front/reset.css">
</head>

<body>
    <section class="section-Workspace ">
        <div class="contener-flex">
            <div class="conreiner2">
                <div class="contaner-reg container-vhod">
                    <a href="index.php"><img src="img/logo.svg" alt="" width="200px"></a>
                    <p>Вход</p>

                    <form class="register-flex vhod-flex" action="login.php" method="post">
                        <input class="registe" type="text" placeholder="login" name="login">
                        <input class="registe" type="text" placeholder="password" name="pass">
                        <div class="registr-buton_footer">
                            <button class="registe-button vhod-button" type="submit">Войти</button>
                            <a class="alternative-registr" href="reg.php">зарегистрироватся</a>
                        </div>
                    </form>

                </div>
            </div>

            <footer class="podval">
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
                        <li class="pomoshi-li"><button onclick="window['some-dialog-id-1'].show() " class="pomoshi-li"><img src="img/telega.svg" alt="" class="telega"></button></li>
                        <li class="pomoshi-li"><button onclick="window['some-dialog-id-2'].show() " class="pomoshi-li"><img src="img/mail.svg" alt="" class="mail"></button></li>
                        <li class="pomoshi-li"><button onclick="window['some-dialog-id-3'].show() " class="pomoshi-li"><img src="img/telefon.svg" alt="" class="nymber"></button></li>
                    </ul>
                    <p class="pomosh">Служба заботы о клиентах
                        8 233 234 43 54
                        Ежедневно с 9:00 до 21:00 по МСК</p>

                </div>
            </footer>
        </div>
        </div>
    </section>
</body>

</html>
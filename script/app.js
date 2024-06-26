// Начало выполнения скрипта после загрузки DOM
document.addEventListener("DOMContentLoaded", function() {
    // Получить API ключ
    const apiKey = '{your_API_KEY_goes_here}';
    // Формирование URL для запроса данных о топ-10 криптовалютах
    const url = `https://min-api.cryptocompare.com/data/top/totalvolfull?limit=10&tsym=RUB&api_key=${apiKey}`;

    // Отправка запроса на сервер
    fetch(url)
        // Получение ответа и преобразование его в JSON формат
        .then(response => response.json())
        // Обработка полученных данных
        .then(data => displayCryptoData(data.Data))
        // Обработка ошибок
        .catch(error => console.error('Error fetching the data:', error));
        // Функция для вывода данных о криптовалютах на страницу
        function displayCryptoData(cryptoData) {
             // Находим контейнер, в который будем добавлять данные
            const container = document.getElementById('crypto-container');
            // Перебор всех полученных криптовалют
            cryptoData.forEach(crypto => {
                // Получение данных о криптовалюте
                const price = crypto.DISPLAY?.RUB?.PRICE;
                // Проверяем, есть ли цена
                if (price) {
                    // Создание элемента для криптовалюты
                    const cryptoElement = document.createElement('div');
                    cryptoElement.classList.add('crypto');
        
                    const name = crypto.CoinInfo.FullName;
                    const symbol = crypto.CoinInfo.Name;
                    const volume24h = crypto.DISPLAY.RUB.VOLUME24HOURTO;
                     // Вывод данных о криптовалюте и разделе их
                    cryptoElement.innerHTML = `
                        <h3 class="crypto-text">
                            <span class="crypto-name">${name} =</span>
                            <span class="crypto-price">${price.replace(/(₽)\s*(.*)/, '$2 $1')}</span>
                        </h3>
                    `;
                    // Добавление элемента с данными в контейнер
                    container.appendChild(cryptoElement);
                }
            });
        }
});
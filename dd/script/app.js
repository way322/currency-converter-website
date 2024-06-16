document.addEventListener("DOMContentLoaded", function() {
    const apiKey = '{your_API_KEY_goes_here}';
    const url = `https://min-api.cryptocompare.com/data/top/totalvolfull?limit=10&tsym=RUB&api_key=${apiKey}`;

    fetch(url)
        .then(response => response.json())
        .then(data => displayCryptoData(data.Data))
        .catch(error => console.error('Error fetching the data:', error));

    function displayCryptoData(cryptoData) {
        const container = document.getElementById('crypto-container');
        cryptoData.forEach(crypto => {
            const price = crypto.DISPLAY?.RUB?.PRICE;
            // Проверяем, есть ли цена
            if (price) {
                const cryptoElement = document.createElement('div');
                cryptoElement.classList.add('crypto');

                const name = crypto.CoinInfo.FullName;
                const symbol = crypto.CoinInfo.Name;
                const volume24h = crypto.DISPLAY.RUB.VOLUME24HOURTO;

                cryptoElement.innerHTML = `
                    <h3>${name} (${symbol})</h3>
                    <p><strong>Price:</strong> ${price}</p>
                    <p><strong>24h Volume:</strong> ${volume24h}</p>
                `;

                container.appendChild(cryptoElement);
            }
        });
    }
});
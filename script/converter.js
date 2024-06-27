// Объявление переменных и элементов DOM
// rates - объект для хранения курсов валют
// input - элемент ввода суммы для конвертации
// result - элемент вывода результата конвертации
// inputCurrency - элемент выбора валюты для конвертации
// outputCurrency - элемент выбора валюты для вывода конвертированной суммы
// reverseButton - кнопка для обмена выбранных валют
// dayChartCtx - контекст для отображения дневного графика
// monthChartCtx - контекст для отображения месячного графика
// yearChartCtx - контекст для отображения годового графика

const rates = {};
const input = document.querySelector('#input');
const result = document.querySelector('#result');
const inputCurrency = document.querySelector('#input-currency');
const outputCurrency = document.querySelector('#output-currency');
const reverseButton = document.querySelector('#reverseButton');
const dayChartCtx = document.getElementById('dayChart').getContext('2d');
const monthChartCtx = document.getElementById('monthChart').getContext('2d');
const yearChartCtx = document.getElementById('yearChart').getContext('2d');
const API_KEY = 'YOUR_API_KEY'; 
// Асинхронная функция для получения курсов валют
async function getCurrencies() {
    // Получаем данные с сервера
    const response = await fetch('https://www.cbr-xml-daily.ru/daily_json.js');
    const data = await response.json();

    rates.RUB = 1; // Добавляем рубль с фиксированным курсом 1
    rates.USD = data.Valute.USD.Value;
    rates.EUR = data.Valute.EUR.Value;
    rates.GBP = data.Valute.GBP.Value;
    rates.AUD = data.Valute.AUD.Value;
    rates.AZN = data.Valute.AZN.Value;
    rates.AMD = data.Valute.AMD.Value;
    rates.BYN = data.Valute.BYN.Value;
    rates.BGN = data.Valute.BGN.Value;
    rates.BRL = data.Valute.BRL.Value;
    rates.HUF = 100 / data.Valute.HUF.Value;
    rates.VND = data.Valute.VND.Value / 10000;
    rates.HKD = data.Valute.HKD.Value;
    rates.GEL = data.Valute.GEL.Value;
    rates.DKK = data.Valute.DKK.Value;
    rates.AED = data.Valute.AED.Value;
    rates.EGP = data.Valute.EGP.Value / 10;
    rates.INR = data.Valute.INR.Value / 10;
    rates.IDR = data.Valute.IDR.Value / 10000;
    rates.KZT = 100 / data.Valute.KZT.Value;
    rates.CAD = data.Valute.CAD.Value;
    rates.QAR = data.Valute.QAR.Value;
    rates.KGS = data.Valute.KGS.Value / 10;
    rates.CNY = data.Valute.CNY.Value;
    rates.MDL = data.Valute.MDL.Value / 10;
    rates.NZD = data.Valute.NZD.Value;
    rates.NOK = data.Valute.NOK.Value / 10;
    rates.PLN = data.Valute.PLN.Value;
    rates.RON = data.Valute.RON.Value;
    rates.XDR = data.Valute.XDR.Value;
    rates.SGD = data.Valute.SGD.Value;
    rates.TJS = data.Valute.TJS.Value / 10;
    rates.THB = data.Valute.THB.Value / 10;
    rates.TRY = data.Valute.TRY.Value / 10;
    rates.TMT = data.Valute.TMT.Value;
    rates.UZS = data.Valute.UZS.Value / 10000;
    rates.UAH = data.Valute.UAH.Value / 10;
    rates.CZK = data.Valute.CZK.Value / 10;
    rates.SEK = data.Valute.SEK.Value / 10;
    rates.CHF = data.Valute.CHF.Value;
    rates.RSD = data.Valute.RSD.Value / 100;
    rates.ZAR = data.Valute.ZAR.Value / 10;
    rates.KRW = data.Valute.KRW.Value / 1000;
    rates.JPY = data.Valute.JPY.Value / 100;
    console.log(rates);

    // Построение графиков
    buildCharts();
}

// график
async function fetchHistoricalData(startDate, endDate, baseCurrency, targetCurrency) {
    const response = await fetch(`https://api.exchangerate.host/timeseries?start_date=${startDate}&end_date=${endDate}&base=${baseCurrency}&symbols=${targetCurrency}`);
    const data = await response.json();
    return data.rates;
}
// Функция для построения графиков
function buildCharts() {
    const labels = Object.keys(rates);
    const values = Object.values(rates);

    new Chart(dayChartCtx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Day Exchange Rates',
                data: values,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    fetchHistoricalData('2023-05-04', '2023-06-04', 'USD', 'RUB').then(data => {
        const monthLabels = Object.keys(data);
        const monthValues = Object.values(data).map(rate => rates.RUB / rate.RUB);

        new Chart(monthChartCtx, {
            type: 'line',
            data: {
                labels: monthLabels,
                datasets: [{
                    label: 'Month Exchange Rates',
                    data: monthValues,
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });


    fetchHistoricalData('2023-06-04', '2024-06-04', 'USD', 'RUB').then(data => {
        const yearLabels = Object.keys(data);
        const yearValues = Object.values(data).map(rate => rates.RUB / rate.RUB);

        new Chart(yearChartCtx, {
            type: 'line',
            data: {
                labels: yearLabels,
                datasets: [{
                    label: 'Year Exchange Rates',
                    data: yearValues,
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
}
// Вызываем функцию для получения курсов валют
getCurrencies();
// Обработчик для кнопки разворота валют
reverseButton.addEventListener('click', function () {
    const temp = inputCurrency.value;
    inputCurrency.value = outputCurrency.value;
    outputCurrency.value = temp;

    convert();
});
// Функция для конвертации валюты
// Получает введенную сумму, выбранные валюты для конвертации и выводит результат
// Получение суммы, выбранных валют и проверка на ввод числа
// Конвертация суммы в выбранные валюты
// Отображение результата конвертации с округлением до двух знаков после запятой
function convert() {
    const amount = parseFloat(input.value);
    const fromCurrency = inputCurrency.value;
    const toCurrency = outputCurrency.value;

    if (isNaN(amount)) {
        result.value = "";
        return;
    }

    const convertedAmount = (amount * rates[fromCurrency]) / rates[toCurrency];
    result.value = convertedAmount.toFixed(2);
}
// Добавление слушателей событий для ввода, выбора валют и смены валюты
input.addEventListener('input', convert);
inputCurrency.addEventListener('change', convert);
outputCurrency.addEventListener('change', convert);
$(document).ready(function() {
    // Array de ciudades
    var cities = [
        { name: 'Guadalajara', id: 'guadalajara' },
        { name: 'Ciudad de México', id: 'mexico-city' },
        { name: 'Nueva York', id: 'new-york' },
        { name: 'París', id: 'paris' },
        { name: 'Londres', id: 'london' },
        { name: 'Sidney', id: 'sydney' },
        { name: 'Tokio', id: 'tokyo' },
        { name: 'Berlín', id: 'berlin' }
    ];

    // Obtener el clima para cada ciudad
    cities.forEach(function(city) {
        $.ajax({
            url: 'https://api.openweathermap.org/data/2.5/weather',
            data: {
                q: city.name,
                appid: '20d163efa10960556e2b314489b7c1ff',
                units: 'metric'
            },
            success: function(response) {
                // Procesar la respuesta y mostrar los datos del clima
                var weatherData = response.weather[0];
                var temperature = response.main.temp;
                var description = weatherData.description;
                var iconCode = weatherData.icon;
                var date = new Date(response.dt * 1000);
                var pressure = response.main.pressure;

                var weatherHTML = '<h3>' + city.name + '</h3>';
                weatherHTML += '<p class="temperature">Temperatura: ' + temperature + '°C</p>';
                weatherHTML += '<img class="weather-icon" src="https://openweathermap.org/img/wn/' + iconCode + '.png" alt="Weather Icon">';
                weatherHTML += '<p class="description hidden">Descripción: ' + description + '</p>';
                weatherHTML += '<p class="description hidden">Fecha: ' + date.toLocaleDateString() + '</p>';
                weatherHTML += '<p class="description hidden">Hora: ' + date.toLocaleTimeString() + '</p>';
                weatherHTML += '<p class="description hidden">Presión atmosférica: ' + pressure + '</p>';
        

                $('#weather-data-' + city.id).html(weatherHTML);
            },
            error: function() {
                $('#weather-data-' + city.id).html('<p>Error al obtener los datos del clima</p>');
            }
        });
    });

    // Mostrar/ocultar elementos adicionales al hacer clic en el botón
    $('.show-button').click(function() {
        var card = $(this).parent();
        card.find('.description').toggleClass('hidden');
    });
});
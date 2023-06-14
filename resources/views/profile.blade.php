<!DOCTYPE html>
<html>
<head>
    <title>Mi perfil</title>
    <link rel="stylesheet" type="text/css" href="css/stylesp.css">
</head>
<body>
    <nav>
        <h1 class="navbar-title">Hola {{ $username }}, ¡Bienvenido!</h1>
    </nav>
    <div class="content">
        <h2 class="welcome-message"></h2>
    </div>

    <div class="card">
        <h2>Datos del clima - Guadalajara</h2>
        <div id="weather-data-guadalajara">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - Ciudad de México</h2>
        <div id="weather-data-mexico-city">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - Nueva York</h2>
        <div id="weather-data-new-york">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - París</h2>
        <div id="weather-data-paris">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - Londres</h2>
        <div id="weather-data-london">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - Sidney</h2>
        <div id="weather-data-sydney">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - Tokio</h2>
        <div id="weather-data-tokyo">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <div class="card">
        <h2>Datos del clima - Berlín</h2>
        <div id="weather-data-berlin">
            <p>Cargando...</p>
        </div>
        <button class="show-button">Mostrar más</button>
    </div>

    <!-- Aquí puedes agregar tus scripts JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="username">Nombre de usuario:</label>
                <input type="text" name="username" id="username" maxlength="40" required>
                @error('username')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>

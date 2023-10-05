<!DOCTYPE html>
<html>
<head>
    <title>Inicio Sesión</title>
</head>
<body>
    <h1>Inicio Sesión</h1>

    <form method="POST">
        @csrf

        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Acceder</button>
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Recuperación Contraseña</title>
</head>
<body>
    <h1>Recuperación Contraseña</h1>

    <form method="POST">
        @csrf

        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
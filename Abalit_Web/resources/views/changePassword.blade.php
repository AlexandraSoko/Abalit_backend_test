<!DOCTYPE html>
<html>
<head>
    <title>Cambio contraseña</title>
</head>
<body>
    <h1>Cambio contraseña</h1>

    <form method="POST">
        @csrf

        <div>
            <label for="password">Contraseña Actual:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password">Contraseña Nueva:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password">Repetir Contraseña Nueva:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Cambiar</button>
        </div>
    </form>
</body>
</html>
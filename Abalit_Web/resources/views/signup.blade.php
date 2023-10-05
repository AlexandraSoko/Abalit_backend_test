<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>

    <form method="POST">
        @csrf

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>
</html>
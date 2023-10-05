<!DOCTYPE html>
<html>
<head>
    <title>Edición Usiario</title>
</head>
<body>
    <h1>Edición Usiario</h1>

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
            <label for="phone">Teléfono:</label>
            <input type="phone" name="phone" id="phone" required>
        </div>

        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>
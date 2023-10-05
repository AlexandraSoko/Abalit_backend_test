<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
</head>
<body>
    <h1>Página Inicial</h1>

    <form method="POST">
        @csrf

        <div>
            <button type="submit">Carrito</button>
        </div>

        <div>
            <button type="submit">Lista de deseos</button>
        </div>

        <div>
            <button type="submit">Perfil</button>
        </div>
    </form>
</body>
</html>
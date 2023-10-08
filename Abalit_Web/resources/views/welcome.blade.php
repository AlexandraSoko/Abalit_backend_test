<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <!-- Font Awesome enlace de la web FOND AWSOME CND -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Font de OSWALD-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap" rel="stylesheet">

    <!--CSS, donde se llama a la carpeta de CSS -->
    <link rel="stylesheet" href="../css/app.css">
   </head>
   
</head>
<body>
    <header>
        <h1>Bienvenida </h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Carrito</a></li>
            <li><a href="#">Búsqueda</a></li>
        </ul>
    </nav>
    
    <div>
        <!-- Contenido de la tienda de ropa -->
        <h2>Últimas Ofertas</h2>
        <p>¡Descubre nuestras increíbles ofertas en ropa para hombres, mujeres y niños!</p>
    </div>
</body>
</html>
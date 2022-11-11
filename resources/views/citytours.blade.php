<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>City Tours</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        

    </head>
    <body>
                <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"> CITY TOURS </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">OPCIONES</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="http://localhost:90/Trabajofinal/resources/views/lugares.blade.php">Lugares a donde Viajar</a></li>
                    <li><a class="dropdown-item" href="http://localhost:90/Trabajofinal/resources/views/hoteles.blade.php">Hoteles</a></li>
                    <li><a class="dropdown-item" href="http://localhost:90/Trabajofinal/resources/views/contactos.blade.php">Contactos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="http://localhost:90/Trabajofinal/resources/views/tusplanes.blade.php">Has tu planes ahora!</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/watch?v=9vgm-9kde5E">VIDEO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:90/Trabajofinal/resources/views/comentarios.blade.php">COMENTARIOS</a>
                </li>
                </ul>
    <header>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2019/06/26/000596116W.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://www.travelgoodies.nl/wp-content/uploads/2019/12/Reisroute-Peru-HF-V3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://cnnespanol.cnn.com/wp-content/uploads/2022/07/CNN-Peru%CC%81.jpg?quality=100&strip=info" class="d-block w-100" alt="...">
            </div>
        </div>
        </div>
    </header>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

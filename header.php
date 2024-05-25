<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
    <div class="header">
        <div class="centrar">
            <img class="imgHeka" src="IMG/ImgHeká.png" alt="">
        </div>
        
        <!--botones para cambiar el idioma de la pagina   -->
        <!-- <ul class="no-translate">
            <li><button onclick="translatePage('en')">Inglés</button></li>
            <li><button onclick="translatePage('es')">Español</button></li>
        </ul> -->

    </div>

    <hr class="hr1">
    <table class="tabla">
        <tr>
            <th><a class="menu" href="index.php">TIENDA</a></th>
            <th><a class="menu" href="nosotros.php">NOSOTROS</a></th>
            <th><a class="menu" href="LOGIN/login.php">INICIAR SESIÓN</a></th>
            <th><a class="menu" href="climaAPI.php">API de clima</a></th>
        </tr>
    </table>

    <!-- Agregamos el link de de la API para la traduccion -->
    <script src="JS/Api-traductor.js"> </script>
</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>

<body>

    <?php include "../traductor.php"; ?>
    
    <div class="header">
        <div class="centrar">
            <img class="imgHeka" src="../IMG/ImgHeká.png">
        </div>
    </div>

    <hr class="hr1">
    <table class="tabla">
        <tr>
            <th><a class="menu" href="../index.php">TIENDA</a></th>
            <th><a class="menu" href="../nosotros.php">NOSOTROS</a></th>
            <th><a class="menu" href="LOGIN/login.php">INICIAR SESIÓN</a></th>
        </tr>
    </table><br><br>

    <div class="login">
        <form action="autentificarLogin.php" method="POST">
            <label class="loginlabels" for="username">Username:</label> <br><br>
            <input type="text" name="username" id="username" required class="cajas">
            <br><br>
            <label class="loginlabels" for="password">Password:</label> <br><br>
            <input type="password" name="password" id="password" required class="cajas">
            <br><br>
            <button class="btn1" type="submit" class="btn2">Login</button>
        </form>
    </div><br><br>


    <div class="redes">
        <h1 class="h1">Contáctanos</h1><br>
        <div class="centrar">
            <a href="https://www.facebook.com/Hekadesign90" target="_blank"> <img class="imgRedes"
                    src="../IMG/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/hekadesign90/tagged/" target="_blank"> <img class="imgRedes"
                    src="../IMG/instagram.png" alt=""></a>
            <a href="https://www.google.com.mx/maps/place/Albaz+shoes/@21.0108558,-89.6099221,20.16z/data=!4m6!3m5!1s0x8f56775f606442db:0x5d917fd8c70dec40!8m2!3d21.0107952!4d-89.6097682!16s%2Fg%2F11qgfxxx0l?entry=ttu"
                target="_blank"> <img class="imgRedes" src="../IMG/Ubicacion.png" alt=""></a>
        </div>

    </div>

    <script src="../JS/Api-traductor.js"></script>
</body>

</html>
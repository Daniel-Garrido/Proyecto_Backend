<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heká Design</title>

    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
   
    <?php include "traductor.php"; ?>
       

    <?php include "header.php"; ?> <br><br>

    <p class="principal">&wscr;&escr;&lscr;&cscr;&oscr;&mscr;&escr;</p>


    <!-- Mostrar productos de la base de datos -->

    <div class="productos no-translate">
        <?php 
        require "LOGIN/conexion.php";
        $todos_datos = "SELECT * from productos order by id ASC";
        $resultado = mysqli_query($conectar, $todos_datos);
        
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $productId = $fila["id"];
            $productPrice = $fila["Precio"];
            ?>
            <div class="contenedorfoto no-translate">
                <img class="imagentienda no-translate" src="LOGIN/<?php echo $fila["ruta"]; ?>"><br><br>
                <span class="spantienda no-translate"><?php echo $fila["Nombre"]; ?></span><br>
                <span class="spantienda no-translate"><?php echo "$" . $fila["Precio"]; ?></span><br><br>
                
                <!-- Incluir el botÃģn de PayPal -->
                <?php 
                include 'config.php';
                include 'paypalCheckout.php'; 
                ?>
            </div>
            <?php
        }
        ?>
    </div><br><br>

    <?php include "footer.php"; ?>

    <!-- Agregamos el link de de la API para la traduccion -->
    <script src="JS/Api-traductor.js"> </script>
    <!-- Agregamos el link de de la API para la traduccion -->
    <!-- <script src="JS/Api-traductor.js"> </script> -->

</body>

</html>
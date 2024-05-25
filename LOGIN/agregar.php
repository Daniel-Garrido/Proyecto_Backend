<html lang="en">
<?php 
include "seguridad.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>

<body>
        <div class="header">
            <div class="centrar">
                <img class="imgHeka"
                    src="https://scontent.fmid2-1.fna.fbcdn.net/v/t39.30808-1/278915286_450348333447927_827587688054686502_n.jpg?stp=dst-jpg_s200x200&_nc_cat=109&ccb=1-7&_nc_sid=c6021c&_nc_eui2=AeHOli_HZfYsD9d0y1jQN7nwzzTjl9SqBCbPNOOX1KoEJg48M2nCy8-RynD7TQzXdNZqgmK3Ge5TUKKryS0tJuKr&_nc_ohc=zrg_U-NX7bwAX9yxkVi&_nc_ht=scontent.fmid2-1.fna&oh=00_AfCTf6Fcjq9gaQBks2G4OeARNYWQN1CNJW8Mmu6DQ0UQaw&oe=6483A495"
                    alt="">


            </div>

           

        </div>
 <hr class="hr1">
        <table class="tabla">
            <tr>
                <th><a class="menu" href="administrador.php">TIENDA</a></th>
                <th><a class="menu" href="cerrarSesion.php">CERRAR SESIÓN</a></th>
            </tr>
        </table><br>


        <div class="ancho">

            <h1 class="h1">AGREGAR PRODUCTO</h1>

            <div class="form">
                <form action="guardar.php" method="POST" enctype="multipart/form-data">
                    <label for="" class="labels">Nombre del prodcuto:</label>
                    <input class="inputs" type="text" name="Nombre" id="Nombre"><br>

                    <label for="" class="labels">Precio:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$</label>
                    <input class="inputs" type="number" name="Precio" id="Precio"><br>

                    <label for="" class="labels">Talla:</label>
                    <select class="inputs" id="Talla" name="Talla">
                        <option value="">Escoge una opción</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select><br>

                    <label for="" class="labels">Color:</label>
                    <input class="inputs" type="text" name="Color" id="Color"><br>

                    <p><label for="" class="labels">Subir Imagen:</label>
                        <input type="file" name="Imagen" id="Imagen" placeholder="Imagen">
                    </p> <br>
                    
                    <button type="submit" class="btn">Guardar</button>
                    <button type="reset" class="btn2">Borrar datos</button></div>
                </form>
            </div>


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
    
</body>

</html>
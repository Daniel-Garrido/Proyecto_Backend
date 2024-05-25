<html lang="en">
<?php 
include "seguridad.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
 <hr class="hr1" >
        <table class="tabla">
        <tr>
        <th><a class="menu" href="administrador.php">TIENDA</a></th>
        <th><a class="menu" href="agregar.php">AGREGAR</a></th>
        <th><a class="menu" href="cerrarSesion.php">CERRAR SESIÓN</a></th>
        </tr>
    </table><br><br>

    <h1 class="h1">ADMINISTRAR PRODUCTOS</h1>

    <?php
    require "conexion.php";

    $todos_datos = "SELECT * from productos order by id ASC";

    $resultado = mysqli_query($conectar, $todos_datos);
    ?>

    <table class="tabladatos">
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre del producto</th>
            <th>Precio</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>

            <tr>
                <td>
                    <?php echo $fila["id"]; ?>
                </td>
                <td>
                <img class="imagentabla" src="<?php echo $fila["ruta"]; ?>">
                </td>
                <td>
                    <?php echo $fila["Nombre"]; ?>
                </td>
                <td>
                    <?php echo "$".$fila["Precio"]; ?>
                </td>
                <td>
                    <?php echo $fila["Talla"]; ?>
                </td>
                <td>
                    <?php echo $fila["Color"]; ?>
                </td>
                <!-- <td><a href="EliminarUsuarios.php?id_usuarios=<?php //echo $fila["id"]; ?>">Eliminar</a></td>-->

                <td><a class="eliminarproducto" href="#" onclick="validar('EliminarProductos.php?id_producto=<?php echo $fila['id']; ?>')">Eliminar</a></td>

            </tr>

            <?php
        }
        ?>
    </table><br><br><br><br>

<!--Funcion para validar la eliminacion de los datos -->

<script>
function validar(url){
    var eliminar = confirm("Realmente deseas ELIMINAR el USUARIO");
    if(eliminar==true){
        window.location = url;
    }
}


</script>


    <div class="redes">
        <h1 class="h1">Contáctanos</h1><br>
    <div class="centrar">
       <a href="https://www.facebook.com/Hekadesign90" target="_blank"> <img class="imgRedes" src="../IMG/facebook.png" alt=""></a>
       <a href="https://www.instagram.com/hekadesign90/tagged/" target="_blank"> <img class="imgRedes" src="../IMG/instagram.png" alt=""></a>
       <a href="https://www.google.com.mx/maps/place/Albaz+shoes/@21.0108558,-89.6099221,20.16z/data=!4m6!3m5!1s0x8f56775f606442db:0x5d917fd8c70dec40!8m2!3d21.0107952!4d-89.6097682!16s%2Fg%2F11qgfxxx0l?entry=ttu" target="_blank"> <img class="imgRedes" src="../IMG/Ubicacion.png" alt=""></a>
    </div>

    </div>
</body>
</html>
<?php
session_start();

$usuario = $_POST["username"];
$contrasena = $_POST["password"];

//echo $usuario . "<br>" . $contrasena;


require "conexion.php";

$comparar = "SELECT * FROM administrador WHERE Usuario = '$usuario' AND Contrasena= '$contrasena'"; //Este codigo es para comprar si en la base de datos coincide con el usuario y contraseña que estoy poniendo en el login

$resultado = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['autentificado'] = true; //creacion de una cookie
    header("Location: administrador.php"); //te redirige a PanelMenu donde se ven todas las opciones 
}else{
    echo "
<script>
alert('ERROR EN LA AUTENTIFICACION');
location.href = 'UsuarioContraseña.php?errorusuario=SI';
</script>
"; 
}

mysqli_free_result($resultado);
mysqli_close($conectar);

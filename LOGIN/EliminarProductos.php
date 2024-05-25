<?php 
include "conexion.php";

$id_producto = $_GET["id_producto"];

$consulta = "DELETE FROM productos WHERE id = '$id_producto'";

$resultado = mysqli_query($conectar, $consulta);

if($resultado){
    echo '<script>
    alert("SE ELIMINO EL USUARIO CORRECTAMENTE");
    location.href = "administrador.php";
    </script>
    ';
}else{
    echo "Falló";
}

?>
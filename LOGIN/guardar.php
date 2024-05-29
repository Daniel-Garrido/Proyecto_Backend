<?php 

require "conexion.php";

$nombre = $_POST["Nombre"];
$precio = $_POST["Precio"];
$talla = $_POST["Talla"];
$color = $_POST["Color"];

$rutatemporal = $_FILES['Imagen']['tmp_name'];

$rutaservidor = "./vergaleria/";
$nombreimagen = $_FILES['Imagen']['name'];

//Con la variable $rutadestino ya tiene toda la url que hemos formado ejemplo = foto/imagen.jpg
$rutadestino = $rutaservidor ."/". $nombreimagen;

// Mover la imagen al directorio de destino

move_uploaded_file($rutatemporal, $rutadestino);


/* echo $carrera . "<br>" . $ingreso . "<br>" . $materia; */

$insertar = "INSERT INTO productos (Nombre,Precio,Talla,Color,ruta) VALUES ('$nombre','$precio','$talla','$color','$rutadestino')";

$query = mysqli_query($conectar, $insertar);

if($query){
    echo '
    <script>
    alert("SE GUARDO CORRECTAMENTE LOS DATOS");
    location.href="administrador.php";
    </script>    
    ';
}else{
    echo "no funciono";
}



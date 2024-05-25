<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traductor</title>
  <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
 
  <ul class="no-translate">
    <li><button class="btn3" onclick="translatePage('en')">Inglés</button></li>
    <li><button class="btn3" onclick="translatePage('es')">Español</button></li>
  </ul>

  <!-- Agregamos el link de de la API para la traduccion -->
  <script src="JS/Api-traductor.js"> </script>
</body>

</html>
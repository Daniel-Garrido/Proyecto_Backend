<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clima</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #4a90e2;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4a90e2;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #357ab8;
        }

        .result {
            margin-top: 20px;
        }

        .result h2 {
            color: #4a90e2;
        }

        .result p {
            font-size: 1.2em;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <?php include "traductor.php"; ?>
       
    <?php include "header.php"; ?> <br><br>

    <h1>Consulta de Clima</h1><br>
    <div class="container">

        <form method="POST" action="">
            <label for="city">Ciudad:</label>
            <input type="text" id="city" name="city" required>
            <label for="country">País:</label>
            <input type="text" id="country" name="country" required><br>
            <input type="submit" value="Consultar Clima">
        </form>

        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $city = urlencode($_POST['city']);
                $country = urlencode($_POST['country']);
                $api_key = '8e18e1451deee83580b09f875c9e1f11';
                $url = "http://api.openweathermap.org/data/2.5/weather?q={$city},{$country}&appid={$api_key}";

                $response = file_get_contents($url);

                if ($response === FALSE) {
                    echo "Error al obtener los datos del clima.";
                } else {
                    $data = json_decode($response, true);

                    if ($data && isset($data['main'])) {
                        $temp_kelvin = $data['main']['temp'];
                        $temp_min_kelvin = $data['main']['temp_min'];
                        $temp_max_kelvin = $data['main']['temp_max'];

                        $temp_celsius = $temp_kelvin - 273.15;
                        $temp_min_celsius = $temp_min_kelvin - 273.15;
                        $temp_max_celsius = $temp_max_kelvin - 273.15;
                        $humidity = $data['main']['humidity'];

                        echo "<h2>Clima en " . htmlspecialchars($_POST['city']) . ", " . htmlspecialchars($_POST['country']) . "</h2>";
                        echo "<p>Temperatura: " . round($temp_celsius, 2) . " °C</p>";
                        echo "<p>Temperatura Mínima: " . round($temp_min_celsius, 2) . " °C</p>";
                        echo "<p>Temperatura Máxima: " . round($temp_max_celsius, 2) . " °C</p>";
                        echo "<p>Humedad: {$humidity}%</p>";
                    } else {
                        echo "Error al obtener los datos del clima para " . htmlspecialchars($_POST['city']) . ", " . htmlspecialchars($_POST['country']) . ".";
                    }
                }
            }

            ?>

        </div>
    </div>

    <?php include "footer.php"; ?>
    
    <!-- Agregamos el link de de la API para la traduccion -->
    <script src="JS/Api-traductor.js"> </script>

</body>

</html>
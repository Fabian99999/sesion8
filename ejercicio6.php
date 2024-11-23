<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Celsius a Fahrenheit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Convertir Grados Celsius a Fahrenheit</h2>
        
        <!-- Formulario para la conversión de temperatura -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="celsius" class="form-label">Grados Celsius</label>
                <input type="number" name="celsius" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Convertir a Fahrenheit</button>
        </form>

        <?php
        // Función para convertir Celsius a Fahrenheit
        function convertirACelsius($celsius) {
            return ($celsius * 9/5) + 32;
        }

        // Convertir y mostrar el resultado si se envía el formulario
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $celsius = $_POST['celsius'];
            $fahrenheit = convertirACelsius($celsius);
            echo "<div class='alert alert-info mt-3'>$celsius °C son $fahrenheit °F</div>";
        }
        ?>
    </div>
</body>
</html>

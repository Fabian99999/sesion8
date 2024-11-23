<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar el Número Mayor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Encontrar el Número Mayor entre Tres Números</h2>

        <!-- Formulario para ingresar los tres números -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="num1" class="form-label">Número 1</label>
                <input type="number" name="num1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Número 2</label>
                <input type="number" name="num2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num3" class="form-label">Número 3</label>
                <input type="number" name="num3" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Encontrar Mayor</button>
        </form>

        <?php
        // Función para encontrar el número mayor entre tres números
        function encontrarMayor($a, $b, $c) {
            return max($a, $b, $c);
        }

        // Procesa el formulario al enviarlo y muestra el resultado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $mayor = encontrarMayor($num1, $num2, $num3);
            echo "<div class='alert alert-success mt-3'>El número mayor es: $mayor</div>";
        }
        ?>
    </div>
</body>
</html>

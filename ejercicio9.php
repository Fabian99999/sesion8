<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Calculadora Básica</h2>

        <!-- Formulario para la calculadora -->
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
                <label for="operacion" class="form-label">Operación</label>
                <select name="operacion" class="form-select" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <?php
        // Función para realizar operaciones básicas
        function calcular($num1, $num2, $operacion) {
            switch ($operacion) {
                case "suma":
                    return $num1 + $num2;
                case "resta":
                    return $num1 - $num2;
                case "multiplicacion":
                    return $num1 * $num2;
                case "division":
                    return $num2 != 0 ? $num1 / $num2 : "Error: División por cero";
                default:
                    return "Operación no válida";
            }
        }

        // Procesar el formulario y mostrar el resultado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            $resultado = calcular($num1, $num2, $operacion);
            echo "<div class='alert alert-success mt-3'>El resultado es: $resultado</div>";
        }
        ?>
    </div>
</body>
</html>

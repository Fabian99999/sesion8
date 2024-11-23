<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de tres números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Promedio de tres números</h2>
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
            <button type="submit" class="btn btn-primary">Calcular Promedio</button>
        </form>

        <?php
        function calcularPromedio($a, $b, $c) {
            return ($a + $b + $c) / 3;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $promedio = calcularPromedio($num1, $num2, $num3);
            echo "<div class='alert alert-success mt-3'>El promedio es: $promedio</div>";
        }
        ?>
    </div>
</body>
</html>

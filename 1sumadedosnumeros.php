<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos numeros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="mb-4">Suma de dos numeros</h2>
    <form method="POST" action="">
        <div class="mb 3">
            <label for="num1" class="form-label">Número 1</label>
            <input type="number" name="num1"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Número 2</label>
            <input type="number" name="num2" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Sumar</button>
    </form>
    <?php
    function Sumar($a, $b) {
        return $a + $b;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = Sumar($num1, $num2);
        echo "<div class='alert alert-success mt-3'>La suma es: $resultado</div>";
    }
    ?>
</body>
</html>
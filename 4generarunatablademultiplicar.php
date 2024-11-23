<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Generar tabla de multiplicar</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="num" class="form-label">Ingrese un número</label>
            <input type="number" name="num" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generar</button>
    </form>
    <?php
function tablaMultiplicar($num) {
    $tabla = [];
    for ($i = 1; $i <= 10; $i++) {
        $tabla[] = "$num x $i = " . ($num * $i);
    }
    return $tabla;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['num'];
    $tabla = tablaMultiplicar($num);
    echo "<ul class='list-group mt-3'>";
    foreach ($tabla as $linea) {
        echo "<li class='list-group-item'>$linea</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
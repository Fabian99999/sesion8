<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un numero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="mb-4">Factorial de un Número</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="num" class="form-label">Ingrese un Número</label>
            <input type="number" name="num" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    function factorial($n) {
        if($n==0) return 1;
        return $n*factorial($n-1);
    }

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $num =$_POST['num'];
        
        $resultado = factorial($num);
        echo "<div class='alert alert-info mt-3'>El factorial de $num es:$resultado</div>";
    }
    ?>
</body>
</html>
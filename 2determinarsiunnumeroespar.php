<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea una funcion que determine si un numero es par o impar. </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Determinar si un numero es par o impar</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="num" class="form-label">Ingrese un número</label>
            <input type="number" name="num" class="form-control" required>
        </div>
        <button type="submit" class="btn-btn-primary">Comprobar</button>
    </form>

    <?php
    function esPar($num) {
        return $num %2==0;
    }

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $num = $_POST['num'];
        if(esPar($num)){
            echo"<div class='alert alert-success mt-3'>$num es un numero par.</div>";
        }else{
            echo "<div class='alert alert-danger mt-3'>$num es un numero impar.</div>";
        }
    }
    ?>
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invertir una Cadena de Texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Invertir una Cadena de Texto</h2>

        <!-- Formulario para invertir una cadena -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="cadena" class="form-label">Cadena de Texto</label>
                <input type="text" name="cadena" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Invertir Cadena</button>
        </form>

        <?php
        // Función para invertir una cadena de texto
        function invertirCadena($cadena) {
            return strrev($cadena);
        }

        // Invertir la cadena si se envía el formulario
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cadena = $_POST['cadena'];
            $cadenaInvertida = invertirCadena($cadena);
            echo "<div class='alert alert-info mt-3'>La cadena invertida es: $cadenaInvertida</div>";
        }
        ?>
    </div>
</body>
</html>

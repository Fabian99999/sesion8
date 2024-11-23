<?php 

$frutas = array("Manzana", "Banana", "Naranja");
$cantidad = count($frutas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Elementos del Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Contador de Frutas</h1>
        <p>El array contiene <strong><?php echo $cantidad; ?></strong> frutas.</p>
    </div>
</body>
</html>

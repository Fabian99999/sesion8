<?php 
// Definir el array de frutas
$frutas = array("Manzana", "Banana", "Naranja");

// Agregar "Mango" al array usando array_push
array_push($frutas, "Mango");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Elemento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Frutas</h1>
        <ul class="list-group">
            <?php foreach ($frutas as $fruta): ?>
                <li class="list-group-item"><?php echo $fruta; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>

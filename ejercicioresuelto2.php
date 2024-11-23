<?php 
$numero = 4.5678; 
$resultado = round($numero, 2); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redondeo de Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Redondeo de Número</h1>
        <p>El número <?php echo $numero; ?> redondeado a 2 decimales es: <strong><?php echo $resultado; ?></strong></p>
    </div>
</body>
</html>

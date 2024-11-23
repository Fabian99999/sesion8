<?php 

$fecha1 = "2024-11-01";
$fecha2 = "2024-11-22";

$timestamp1 = strtotime($fecha1);
$timestamp2 = strtotime($fecha2);

$diferenciaSegundos = abs($timestamp2 - $timestamp1);

$diferenciaDias = $diferenciaSegundos / (60 * 60 * 24);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferencia entre Fechas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Diferencia entre Dos Fechas</h1>
        <p>La fecha 1 es: <strong><?php echo $fecha1; ?></strong></p>
        <p>La fecha 2 es: <strong><?php echo $fecha2; ?></strong></p>
        <p>La diferencia en días entre las dos fechas es: <strong><?php echo $diferenciaDias; ?> días</strong></p>
    </div>
</body>
</html>

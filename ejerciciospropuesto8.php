<?php 
date_default_timezone_set("America/Los_Angeles"); 

$fechaHoraActual = date("Y-m-d H:i:s"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora Actual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Fecha y Hora Actual</h1>
        <p>La fecha y hora actual es: <strong><?php echo $fechaHoraActual; ?></strong></p>
    </div>
</body>
</html>

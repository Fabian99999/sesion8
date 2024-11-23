<?php 
$cadena = "Hola Mundo"; 
$cadenaMayusculas = strtoupper($cadena); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a Mayúsculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Convertir Cadena a Mayúsculas</h1>
        <p>La cadena original es: "<?php echo $cadena; ?>"</p>
        <p>La cadena en mayúsculas es: <strong><?php echo $cadenaMayusculas; ?></strong></p>
    </div>
</body>
</html>

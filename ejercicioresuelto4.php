<?php 
$cadena = "Hola Mundo"; 
$longitud = strlen($cadena); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Longitud de Cadena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Longitud de Cadena</h1>
        <p>La cadena "<?php echo $cadena; ?>" tiene <strong><?php echo $longitud; ?></strong> caracteres.</p>
    </div>
</body>
</html>

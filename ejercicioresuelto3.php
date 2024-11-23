<?php 
$min = 1; 
$max = 100; 
$random = rand($min, $max); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Número Aleatorio</h1>
        <p>El número aleatorio entre <?php echo $min; ?> y <?php echo $max; ?> es: <strong><?php echo $random; ?></strong></p>
    </div>
</body>
</html>

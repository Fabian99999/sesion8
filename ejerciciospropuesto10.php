<?php 

function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2); 
}
$radio = 5; 

$area = calcularAreaCirculo($radio);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo del Área de un Círculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Cálculo del Área de un Círculo</h1>
        <p>El radio del círculo es: <strong><?php echo $radio; ?> unidades</strong></p>
        <p>El área del círculo es: <strong><?php echo round($area, 2); ?> unidades cuadradas</strong></p>
    </div>
</body>
</html>

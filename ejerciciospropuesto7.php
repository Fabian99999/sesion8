<?php 
$cadena = "Hola Mundo, bienvenidos al Mundo PHP"; 
$subcadenaBuscar = "Mundo"; 
$subcadenaReemplazar = "Universo"; 
$cadenaReemplazada = str_replace($subcadenaBuscar, $subcadenaReemplazar, $cadena); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reemplazar Subcadena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Reemplazar Subcadena en Cadena</h1>
        <p>La cadena original es: "<?php echo $cadena; ?>"</p>
        <p>La cadena con el reemplazo es: <strong><?php echo $cadenaReemplazada; ?></strong></p>
    </div>
</body>
</html>

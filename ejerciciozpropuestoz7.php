<?php 

$productos = array(
    array("producto" => "Manzana", "precio" => 1.50),
    array("producto" => "Banana", "precio" => 1.20),
    array("producto" => "Naranja", "precio" => 1.80),
    array("producto" => "Pera", "precio" => 2.00),
    array("producto" => "Uva", "precio" => 2.50)
);

$total = 0;
foreach ($productos as $producto) {
    $total += $producto['precio'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar Precios de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Productos y Suma de Precios</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['producto']; ?></td>
                        <td><?php echo "$" . number_format($producto['precio'], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Total: $<?php echo number_format($total, 2); ?></h3>
    </div>
</body>
</html>

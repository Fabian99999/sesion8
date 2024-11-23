<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Sistema de Ventas de Productos</h2>

        <!-- Formulario para ingresar detalles de la venta -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                <input type="text" name="nombreProducto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="precioUnitario" class="form-label">Precio Unitario</label>
                <input type="number" step="0.01" name="precioUnitario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Total</button>
        </form>

        <?php
        // Función para calcular el total de la venta con descuento si aplica
        function calcularTotal($precioUnitario, $cantidad) {
            $subtotal = $precioUnitario * $cantidad;
            $descuento = 0;
            if ($subtotal > 100) {
                $descuento = $subtotal * 0.10; // Descuento del 10%
            }
            $total = $subtotal - $descuento;
            return array($subtotal, $descuento, $total);
        }

        // Procesar el formulario y mostrar el resultado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreProducto = $_POST['nombreProducto'];
            $precioUnitario = $_POST['precioUnitario'];
            $cantidad = $_POST['cantidad'];

            // Llamada a la función de cálculo
            list($subtotal, $descuento, $total) = calcularTotal($precioUnitario, $cantidad);

            echo "<div class='alert alert-info mt-3'>";
            echo "<h4>Detalle de la Venta</h4>";
            echo "<p><strong>Producto:</strong> $nombreProducto</p>";
            echo "<p><strong>Precio Unitario:</strong> $ $precioUnitario</p>";
            echo "<p><strong>Cantidad:</strong> $cantidad</p>";
            echo "<p><strong>Subtotal:</strong> $ $subtotal</p>";
            if ($descuento > 0) {
                echo "<p><strong>Descuento aplicado:</strong> $ $descuento</p>";
            }
            echo "<p><strong>Total a Pagar:</strong> $ $total</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>

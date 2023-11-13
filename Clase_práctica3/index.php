<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Clase Practica 3</h1>
    <h1>Lista de Productos</h1>
    
    <ul>
        <?php include 'productos.php'; ?>
        <?php foreach ($productos as $producto): ?>
            <li>
                <?php
                    $imagenPath = 'img/img_' . $producto['id'] . '.jpg'; 
                    if (file_exists($imagenPath)) {
                        echo "<img src=\"$imagenPath\" alt=\"$producto[nombre]\">";
                    } else {
                        echo "<p>Imagen no disponible: $imagenPath</p>";
                    }
                ?>
                <h2><?php echo $producto['nombre']; ?></h2>
                <p><?php echo $producto['descripcion']; ?></p>
                <p>Precio: $<?php echo $producto['precio']; ?></p>
                <button onclick="agregarAlCarrito(<?php echo $producto['id']; ?>)">Agregar al Carrito</button>
            </li>
        <?php endforeach; ?>
    </ul>

    <script src="script.js"></script>

</body>
</html>

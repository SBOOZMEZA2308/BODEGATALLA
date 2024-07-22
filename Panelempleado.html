<?php
    include_once 'Database.php';
    include_once 'Categoria.php';
    include_once 'Producto.php';

    $database = new Database();
    $db = $database->getConnection();

    $categoria = new Categoria($db);
    $producto = new Producto($db);

    $resultCategorias = $categoria->read();
    $resultProductos = $producto->read();
?>

    <!DOCTYPE html>
    <html lang="es-PE">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
        <title>Listado de Productos y Categorías</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1>Listado de Categorías</h1>
            <a href="galeria.php" class="btn btn-primary">Catalogo productos</a>
            <a href="index.php" class="btn btn-danger">Cerrar Sesion</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultCategorias->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        </tr>
                        <?php endwhile; ?>
                </tbody>
            </table>

            <h1 class="mt-5">Listado de Productos</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultProductos->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($row['precio']); ?></td>
                            <td><?php echo htmlspecialchars($row['categoria_nombre']); ?></td>
                        </tr>
                        <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>


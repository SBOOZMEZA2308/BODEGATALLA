<?php
    //Incluir archivo de conexión y clases
    require_once 'Database.php';
    require_once 'funciones.php';

    $database = new Database();
    $db = $database->getConnection();
   //Obtener listado de categorías y productos
    $categorias = obtenerCategorias($db);
    $productos = obtenerProductos($db);
?>

<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Todos los productos</title>
</head>
<body>
    
    <div class="container mt-5">
        <h2>Panel de Todo los Productos</h2>
        <a href="Panelempleado.php
        " class="btn btn-primary">Regresar</a><br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($productos as $index => $producto) : ?>
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ID<?php echo $index + 1; ?>: <?php echo $producto['nombre_producto']; ?></h5>
                        <p class="card-text"><?php echo $producto['nombre_categoria']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
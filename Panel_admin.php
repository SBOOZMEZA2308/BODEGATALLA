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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador - Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Panel Administrador - Productos</h1>
        <hr>
        <div class="mb-3">
            <a href="agregar_producto.php" class="btn btn-primary">Agregar Nuevo Producto</a>
            <a href="galeriaadmin.php" class="btn btn-primary">Catalogo productos</a>
            <a href="index.php" class="btn btn-danger">Cerrar Sesion</a>
        </div>

        <!-- Tabla de Productos -->
          <div class="row">
            <div class="col-md-8">
                <h2>Productos</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Categorias</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto) : ?>
                            <tr>
                                <td><?php echo $producto['id']; ?></td>
                                <td><?php echo $producto['nombre_producto']; ?></td>
                                <td><?php echo '$' . number_format($producto['precio'], 2); ?></td>
                                <td><?php echo $producto['nombre_categoria']; ?></td>
                                <td>
                                    <a href="editar_producto.php?id=<?php echo $producto['id']; ?>" class="btn btn-sm btn-warning">Editarㅤ</a>
                                    <a href="eliminar_producto.php?id=<?php echo $producto['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
          </div>

    </div>
                         
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
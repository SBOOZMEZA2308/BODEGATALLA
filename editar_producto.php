<?php
    //Incluir archivo de conexi+on y funciones
    require_once 'Database.php';
    require_once 'funciones.php';

    $database = new Database();
    $db = $database->getConnection();

    //Verificar si se recibió un ID válido por GET
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header("Location: index.php");
        exit;
    }

    $id_producto = $_GET['id'];

    //Obtener detalles del producto
    $sql_producto = "SELECT id, nombre, precio, categoria_id FROM productos WHERE id = ?";
    $stmt = $db -> prepare($sql_producto);
    $stmt -> bind_param("i", $id_producto);
    $stmt -> execute();
    $resultado = $stmt -> get_result();

    if ($resultado -> num_rows === 0){
        header("Location: index.php");
        exit;
    }

    $producto = $resultado -> fetch_assoc();

    //Obtener todas las categorias
    $categorias = obtenerCategorias($db);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <h1>Editar Producto</h1>
            <hr>

            <div class="row">
                <div class="col-md-6">
                    <form action="procesar_edicion.php" method="POST">
                        <input type="hidden" name="id_producto" value="<?php echo $producto['id']; ?>">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select class="form-select" name="categoria" id="categoria" required>
                                <option value="">Seleccionar categoria</option>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <option value="<?php echo $categoria['id']; ?>" <?php echo ($producto['categoria_id'] == $categoria['id'])? 'selected' : ' '; ?>><?php echo $categoria['nombre']; ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href="Panel_admin.php" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        
    </body>
</html>
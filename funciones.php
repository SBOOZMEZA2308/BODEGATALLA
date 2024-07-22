<?php
    //Función para obtener todas las categorias
    function obtenerCategorias($db){
        $sql = "SELECT id, nombre FROM categorias";
        $resultado = $db -> query($sql);
        $categorias = array();

        if ($resultado -> num_rows > 0){
            while ($row = $resultado -> fetch_assoc()){
               $categoria[] = $row; 
            }
        }
        return $categorias;
    }

    //Función para obtener todos los productos
    function obtenerProductos($db){
        $sql = "SELECT p.id, p.nombre AS nombre_producto, p.precio, c.nombre AS nombre_categoria FROM productos p INNER JOIN categorias c ON p.categoria_id = c.id";
        $resultado = $db->query($sql);
        $productos = array();

        if($resultado->num_rows > 0){
            while ($row = $resultado -> fetch_assoc()){
                $productos[] = $row;
            }
        }
        return $productos;
    } 

?>
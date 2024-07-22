<?php
    class Producto{
        private $conn;
        private $table_name = 'productos';

        public $id;
        public $nombre;
        public $precio;
        public $categoria_id;

        
        public function __construct($db){
            $this->conn = $db;
        }

        // Método para leer todas los productos.
        public function read(){
            $query = 'SELECT p.id, p.nombre, p.precio, c.nombre as categoria_nombre FROM ' .$this->table_name.' p LEFT JOIN categorias c ON p.categoria_id = c.id';
            $result = $this->conn->query($query);
            return $result;
        }
        // Método para crear un nuevo producto.
        public function create(){
            $query = "INSERT INTO $this->table_name (nombre, precio, categoria_id) VALUES (?, ?, ?)";

            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('sdi', $this->nombre, $this->precio, $this->categoria_id);

            if ($stmt->execute()){
                return true;
            } else{
                return false;
            }
        }
    }
?>
<?php
    class Categoria{
        private $conn;
        private $table_name = 'categorias';

        public $id;
        public $nombre;

        public function __construct($db){
            $this->conn = $db;
        }

        // Método para leer todas las categorias.
        public function read(){
            $query = "SELECT id, nombre FROM $this->table_name";
            $result = $this->conn->query($query);
            return $result;
        }

        // Método para crear una nueva categoría.
        public function create(){
            $query = "INSERT INTO $this->table_name (nombre) VALUES (?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('s', $this->nombre);

            if ($stmt->execute()){
                return true;
            } else{
                return false;
            }
        }
    }
?>
<?php

require_once 'config/database.php';

class ModeloBase{

    public $db;
    
    // Obtener la conexión a la BD desde el constructor 
    public function __construct(){
        $this->db = database::conectar();
    }

    public function conseguirTodos($tabla){
        // Hacer la consulta
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}
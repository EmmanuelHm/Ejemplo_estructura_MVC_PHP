<?php
require_once 'ModeloBase.php';

class Nota extends ModeloBase{

    public $usuario_id;
    public $titulo;
    public $descripcion;

    // Constructor
    // Se crea el constructor para tener la conexión con la BD
    public function __construct(){
        parent::__construct();
    }

    // Getters & Setters
    public function getUsuarioId(){
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    // Funciones CRUD
    public function guardar(){
        // Se escribe la consulta
        $sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE() )";

        // Se ejecuta la consulta
        $guardado = $this->db->query($sql);

        return $guardado;
    }
}
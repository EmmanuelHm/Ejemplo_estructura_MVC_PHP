<?php

class NotaController{
    
    public function listar(){
        // Cargar Modelo
        require_once 'models/nota.php';
        // Lógica acción del controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');

        // Crear una vista
        require_once 'views/nota/listar.php';

    }

    public function crear(){
        // Cargar Modelo
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo("Nota Ejecutada PHP MVC");
        $nota->setDescripcion("Se hizo una prueba MVC");

        $guardar = $nota->guardar();

        header('Location: index.php?controller=Nota&action=listar');
    }

    public function borrar(){
        
    }
}
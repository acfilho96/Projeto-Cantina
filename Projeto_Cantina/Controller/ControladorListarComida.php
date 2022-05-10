<?php
require "Model/Comida.php";
class ControladorListarComida{
    private $comida;
    public function __construct(){
        $this->comida = new Comida();
    }

    public function processaRequisicao(){
        $listarComidas =  $this->comida->listarTodos();
        require "View/ListarProdutos.php";
    }
}
    
    
?>
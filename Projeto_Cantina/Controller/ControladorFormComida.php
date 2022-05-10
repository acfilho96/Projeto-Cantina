<?php
require_once "IControlador.php";
require "Model/Comida.php";
class ControladorFormComida implements IControlador{
    
    public function processaRequisicao(){
        require "View/CadastrarComida.php";
    }
}
    
    
?>
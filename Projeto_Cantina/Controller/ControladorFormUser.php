<?php
require_once "IControlador.php";
require "Model/User.php";
class ControladorFormUser implements IControlador{
    
    public function processaRequisicao(){
        require "View/TelaCadastroUser.php";
    }
}
   
?>
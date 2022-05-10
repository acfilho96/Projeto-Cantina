<?php
require_once "IControlador.php";
require "Model/User.php";
class ControladorFormResp implements IControlador{
    
    public function processaRequisicao(){
        require "View/CadResp.php";
    }
}
   
?>
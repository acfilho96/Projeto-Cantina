<?php
require_once "IControlador.php";
require "Model/User.php";
class ControladorListarResp implements IControlador {
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function processaRequisicao(){
        $listarUser =  $this->user->listarTodos();
        require "View/ListarResp.php";
    }
}
?>
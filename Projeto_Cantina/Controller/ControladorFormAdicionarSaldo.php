<?php

require_once "IControlador.php";
require_once "Model/User.php";

class ControladorFormAdicionarSaldo implements IControlador{
    private $user;
    
    public function __construct(){
        $this->user = new User();
        
    }
    public function processaRequisicao(){
        $this->user->setId($_POST['id']);
        
        $this->user->pesquisarUser();
        $id = $this->user->getId();
        $nome = $this->user->getNome();
        $usuario = $this->user->getUsuario();
        $matricula = $this->user->getMatricula();
        $saldo = $this->user->getSaldo();

       

        require "View/AdicionarSaldo.php";
    }
}


?>
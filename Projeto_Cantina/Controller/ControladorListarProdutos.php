<?php
require_once "IControlador.php";
require_once "Model/Comida.php";
require_once "Model/User.php";
require_once "Model/UserDAO.php";

class ControladorListarProdutos implements IControlador{
    private $comida;
    private $user;
    public function __construct(){
        $this->comida = new Comida();
        $this->user = new User();
    }

    public function processaRequisicao(){
        
        $this->user->setId($_SESSION['id']);
        
        $this->user->pesquisarUser();
        $id = $this->user->getId();
        $nome = $this->user->getNome();
        $usuario = $this->user->getUsuario();
        $matricula = $this->user->getMatricula();
        $saldo = $this->user->getSaldo();
        $listarComidas =  $this->comida->listarTodos();
        require "View/ListarProdutosAluno.php";
    }
}
    
    
?>
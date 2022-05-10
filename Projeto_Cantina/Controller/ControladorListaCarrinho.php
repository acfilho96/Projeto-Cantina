<?php

require_once "Model/CarrinhoDAO.php";
require_once "Model/ItemCarrinho.php";
require_once "Model/User.php";
require_once "Model/UserDAO.php";
require_once "IControlador.php";
class ControladorListaCarrinho implements IControlador{
    private $carrinho;
    private $user;

    public function __construct(){
        $this->carrinho = new CarrinhoDAO();
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
  

        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        require "View/ListarCarrinho.php";
    }
}
    
    
?>
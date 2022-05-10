<?php

require_once "Model/CarrinhoDAO.php";
require_once "Model/ItemCarrinho.php";
require_once "Model/User.php";
require_once "Model/UserDAO.php";
require_once "IControlador.php";
class ControladorFormFinalizarCompra implements IControlador{
    private $carrinho;
    private $user;
    private $finalizar;
    private $total;

    public function __construct(){
        $this->carrinho = new CarrinhoDAO();
        $this->user = new User();
    }

    public function processaRequisicao(){
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        
        $this->user->setId($_SESSION['id']);
        
        $this->user->pesquisarUser();
        $id = $this->user->getId();
        $nome = $this->user->getNome();
        $usuario = $this->user->getUsuario();
        $matricula = $this->user->getMatricula();
        $saldo = $this->user->getSaldo();
       
        $total = $this->carrinho->getTotal();
        
        if ($saldo >= $total){
        $finalizar = ($saldo - $total);
        $saldo = $finalizar;
        $this->user->setId($_SESSION['id']);
        $this->user->setSaldo($saldo);
        $this->user->finalizarCompra();

        }else{
            header("Location: ./SaldoInsuficiente.php");
            exit();
          } 
        

        
          header("Location: ./FinalizadoComSucesso.php");
    }
}
    
    
?>
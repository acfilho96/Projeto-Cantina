<?php

require_once "Model/CarrinhoDAO.php";
require_once "Model/ItemCarrinho.php";
require_once "IControlador.php";

class ControladorAddItemCarrinho implements IControlador{
     private $carrinhoDAO; 
     
     public function __construct($carrinhoDAO){
         $this->carrinhoDAO = $carrinhoDAO;
     }

     public function processaRequisicao(){
        if (isset($_POST['codigo']) && preg_match("/^[0-9]+/",$_POST['codigo'])){
            //cria o objeto itemCarrinho
            $itemCarrinho = new ItemCarrinho($_POST['codigo'],1);
            //adiciona o itemCarrinho no carrinho
            $this->carrinhoDAO->adicionar($itemCarrinho);
        }
        header('Location:Carrinho', true,302);

     }

}

?>
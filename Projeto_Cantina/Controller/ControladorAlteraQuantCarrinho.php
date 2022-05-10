<?php

require_once "Model/CarrinhoDAO.php";
require_once "Model/ItemCarrinho.php";
require_once "IControlador.php";

class ControladorAlteraQuantCarrinho implements IControlador{
     private $carrinhoDAO;     
     
     public function __construct($carrinhoDAO){
         $this->carrinhoDAO = $carrinhoDAO;
     }

     public function processaRequisicao(){
        if (isset($_POST['codigo']) && preg_match("/^[0-9]+/",$_POST['codigo'])) {
            //cria o objeto itemCarrinho
            $itemCarrinho = new ItemCarrinho($_POST['codigo'],$_POST['quantidade']);
            //atualiza o itemCarrinho no carrinho
            $this->carrinhoDAO->atualizar($itemCarrinho);
        }
        header('Location:Carrinho', true,302);

     }

}

?>
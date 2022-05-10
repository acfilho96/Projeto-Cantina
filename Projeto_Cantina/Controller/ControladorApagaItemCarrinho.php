<?php

require_once "Model/CarrinhoDAO.php";
require_once "Model/ItemCarrinho.php";
require_once "IControlador.php";

class ControladorApagaItemCarrinho implements IControlador{
     private $carrinhoDAO;     
     
     public function __construct($carrinhoDAO){
         $this->carrinhoDAO = $carrinhoDAO;
     }

     public function processaRequisicao(){
        if (isset($_POST['codigo']) && preg_match("/^[0-9]+/",$_POST['codigo'])){
            //apaga do carrinho
            $this->carrinhoDAO->apagar($_POST['codigo']);
        }
        header('Location:Carrinho', true,302);

     }

}

?>
<?php
require_once "IControlador.php";
require "Model/Comida.php";
class ControladorNovaComida implements IControlador{
   private $comida;

   public function __construct(){
      $this->comida = new Comida();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->comida->setNome($_POST['nome']);
      $this->comida->setIngredientes($_POST['ingredientes']);
      $this->comida->setFornecedor($_POST['fornecedor']);
      $this->comida->setPreco($_POST['preco']);
      $this->comida->setTipo($_POST['tipo']);

      
      $this->comida->incluirComida();
 
      header('Location:ListarProdutos', true,302);
   }
}
   
   
?>
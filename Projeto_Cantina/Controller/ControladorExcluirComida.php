<?php
require "Model/Comida.php";
require_once "IControlador.php";
class ControladorExcluirComida implements IControlador{
   private $comida;

   public function __construct(){
      $this->comida = new Comida();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->comida->setCodigo($_POST['codigo']);
      
      $this->comida->excluirComida();
 
      header('Location:ListarProdutos', true,302);
   }
}
   
   
?>
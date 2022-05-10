<?php
require "Model/User.php";
require_once "IControlador.php";
class ControladorExcluirResp implements IControlador{
   private $user;

   public function __construct(){
      $this->user = new User();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->user->setId($_POST['id']);
      
      $this->user->excluirUser();
 
      header('Location:ListarResp', true,302);
   }
}
   
   
?>
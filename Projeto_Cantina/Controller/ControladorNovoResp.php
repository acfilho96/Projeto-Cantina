<?php
require "Model/User.php";
require_once "IControlador.php";
class ControladorNovoResp implements IControlador{
   private $user;

   public function __construct(){
      $this->user = new User();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto

      $this->user->setEmail($_POST['email']);
      $this->user->setUsuario($_POST['usuario']);
      $this->user->setNome($_POST['nome']);
      $this->user->setEndereco($_POST['endereco']);
      $this->user->setTelefone($_POST['telefone']);
      $this->user->setTipo($_POST['tipo']);
      $this->user->setMatricula($_POST['matricula']);
      $this->user->setSenha($_POST['senha']);



      
      $this->user->incluirUser();
 
      header('Location:LISTARRESP', true,302);
   }
}
   
   
?>
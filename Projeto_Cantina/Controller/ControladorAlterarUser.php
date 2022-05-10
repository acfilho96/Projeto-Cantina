<?php
require_once "IControlador.php";
require_once "Model/User.php";

class ControladorAlterarUser implements IControlador{
    private $user;
    public function __construct(){
        $this->user = new User();
    }
    public function processaRequisicao(){
        $this->user->setId($_POST['id']);
        $this->user->setEmail($_POST['email']);
        $this->user->setUsuario($_POST['usuario']);
        $this->user->setNome($_POST['nome']);
        $this->user->setEndereco($_POST['endereco']);
        $this->user->setTelefone($_POST['telefone']);
        $this->user->setTipo($_POST['tipo']);
        $this->user->setMatricula($_POST['matricula']);
      
        $this->user->alterarUser();
 
      header('Location:ListarUser', true,302);
    }

}


?>
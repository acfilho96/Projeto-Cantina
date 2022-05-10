<?php

require_once "IControlador.php";
require_once "Model/User.php";

class ControladorFormAlterarResp implements IControlador{
    private $user;
    public function __construct(){
        $this->user = new User();
    }
    public function processaRequisicao(){
        $this->user->setId($_POST['id']);
        $this->user->pesquisarUser();
        $id = $this->user->getId();
        $nome = $this->user->getNome();
        $endereco = $this->user->getEndereco();
        $telefone = $this->user->getTelefone();
        $email = $this->user->getEmail();
        $usuario = $this->user->getUsuario();
        $senha = $this->user->getSenha();
        $tipo = $this->user->getTipo();
        $matricula = $this->user->getMatricula();

       

        require "View/AlterarResp.php";
    }
}


?>
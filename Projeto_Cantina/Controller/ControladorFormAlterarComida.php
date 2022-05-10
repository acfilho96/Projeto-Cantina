<?php

require_once "IControlador.php";
require_once "Model/Comida.php";

class ControladorFormAlterarComida implements IControlador{
    private $comida;
    public function __construct(){
        $this->comida = new Comida();
    }
    public function processaRequisicao(){
        $this->comida->setCodigo($_POST['codigo']);
        $this->comida->pesquisaComida();
        $codigo = $this->comida->getCodigo();
        $nome = $this->comida->getNome();
        $ingredientes = $this->comida->getIngredientes();
        $fornecedor = $this->comida->getFornecedor();
        $preco = $this->comida->getPreco();
        $tipo = $this->comida->getTipo();

        require "View/AlterarComida.php";
    }
}


?>
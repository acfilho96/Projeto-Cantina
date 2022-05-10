<?php
require_once "IControlador.php";
require_once "Model/Comida.php";

class ControladorAlterarComida implements IControlador{
    private $comida;
    public function __construct(){
        $this->comida = new Comida();
    }
    public function processaRequisicao(){
        $this->comida->setCodigo($_POST['codigo']);
        $this->comida->setNome($_POST['nome']);
        $this->comida->setIngredientes($_POST['ingredientes']);
        $this->comida->setFornecedor($_POST['fornecedor']);
        $this->comida->setPreco($_POST['preco']);
        $this->comida->setTipo($_POST['tipo']);

        $this->comida->alterarComida();
 
      header('Location:ListarProdutos', true,302);
    }

}


?>
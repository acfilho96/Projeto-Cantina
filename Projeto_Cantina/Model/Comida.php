<?php
 require 'ComidaDAO.php';
 class Comida{
    private $codigo;
    private $nome;
    private $ingredientes;
    private $fornecedor;
    private $preco;
    private $tipo;

    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIngredientes(){
        return $this->ingredientes;
    }
    public function getFornecedor(){
        return $this->fornecedor;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setIngredientes($ingredientes){
        $this->ingredientes = $ingredientes;
    }
    public function setFornecedor($fornecedor){
        $this->fornecedor = $fornecedor;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function incluirComida(){
        $comidaDAO = new ComidaDAO();
        $comidaDAO->incluirComida($this);
   }
   public function listarTodos(){
       $comidaDAO = new ComidaDAO();
       return $comidaDAO->listarTodos();
   }
   public function excluirComida(){
    $comidaDAO = new ComidaDAO();
    $comidaDAO->excluirComida($this);
   } 
   public function pesquisaComida(){
    $comidaDAO = new ComidaDAO();
    $comidaDAO->pesquisaComida($this);
   } 
   public function alterarComida(){
    $comidaDAO = new ComidaDAO();
    $comidaDAO->alterarComida($this);
}
      
 }
?>
<?php
 require_once 'UserDAO.php';
 class User {
    private $id;
    private $email;
    private $usuario;
    private $senha;
    private $nome;
    private $endereco;
    private $telefone;
    private $tipo;
    private $matricula;
    private $saldo;


    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }  
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function incluirUser(){
        $userDAO = new UserDAO();
        $userDAO->incluirUser($this);
   }
   public function listarTodos(){
       $userDAO = new UserDAO();
       return $userDAO->listarTodos();
   }  
   public function excluirUser(){
    $userDAO = new UserDAO();
    $userDAO->excluirUser($this);
   }
   public function pesquisarUser(){
    $userDAO = new UserDAO();
    $userDAO->pesquisarUser($this);
   } 
   public function alterarUser(){
    $userDAO = new UserDAO();
    $userDAO->alterarUser($this);
   }
   public function adicionarSaldo(){
    $userDAO = new UserDAO();
    $userDAO->adicionarSaldo($this);
   }
   public function finalizarCompra(){
    $userDAO = new UserDAO();
    $userDAO->finalizarCompra($this);
   }


}
?>
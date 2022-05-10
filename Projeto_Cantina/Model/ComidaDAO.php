<?php
require "Conexao.php";
class ComidaDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from trabalho.comida");
            
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listarComidas=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $comida = new Comida();
            $comida->setCodigo($linha['codigo']);
            $comida->setNome($linha['nome']);
            $comida->setIngredientes($linha['ingredientes']);
            $comida->setFornecedor($linha['fornecedor']);
            $comida->setpreco($linha['preco']);
            $comida->setTipo($linha['tipo']);
            $listarComidas[$i] = $comida;
            $i++;
          }
        return $listarComidas;
       }
       catch(PDOException $e){
        return array();
       }
    }
    
    public function incluirComida($comida){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into trabalho.comida (codigo, nome, ingredientes, fornecedor, preco, tipo) values (:codigo, :nome, :ingredientes, :fornecedor, :preco, :tipo)");
            $sql->bindParam("codigo",$codigo);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("ingredientes",$ingredientes);
            $sql->bindParam("fornecedor",$fornecedor);
            $sql->bindParam("preco",$preco);
            $sql->bindParam("tipo",$tipo);
            $codigo = $comida->getCodigo();
            $nome = $comida->getNome();
            $ingredientes = $comida->getIngredientes();
            $fornecedor = $comida->getFornecedor();
            $preco = $comida->getPreco();
            $tipo = $comida->getTipo();
            $sql->execute();
            echo "incluido com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $comida->setCodigo($last_id);
            echo "o numero gerado foi ",$last_id;
            return $last_id;
         }
         catch(PDOException $e){
             //return "entrou no catch".$e->getmessage();
             return 0;
         }
     }

     public function excluirComida($comida){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from trabalho.comida where codigo=:codigo");
            $sql->bindParam("codigo",$codigo);
            $codigo = $comida->getCodigo();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }
     public function pesquisaComida($comida){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from trabalho.comida where codigo=:codigo");
            $sql->bindParam("codigo",$codigo);
            $codigo = $comida->getCodigo();
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $comida->setCodigo($linha['codigo']);
            $comida->setNome($linha['nome']);
            $comida->setIngredientes($linha['ingredientes']);
            $comida->setFornecedor($linha['fornecedor']);
            $comida->setPreco($linha['preco']);
            $comida->setTipo($linha['tipo']);

          }
        
       }
       catch(PDOException $e){
        
       }
    }
    public function AlterarComida($comida){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update trabalho.comida set codigo=:codigo, nome=:nome, ingredientes=:ingredientes, fornecedor=:fornecedor, preco=:preco, tipo=:tipo where codigo=:codigo");
            $sql->bindParam("codigo",$codigo);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("ingredientes",$ingredientes);
            $sql->bindParam("fornecedor",$fornecedor);
            $sql->bindParam("preco",$preco);
            $sql->bindParam("tipo",$tipo);
            $codigo = $comida->getCodigo();
            $nome = $comida->getNome();
            $ingredientes = $comida->getIngredientes();
            $fornecedor = $comida->getFornecedor();
            $preco = $comida->getPreco();
            $tipo = $comida->getTipo();
            $sql->execute();
            echo "alterado com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $comida->setCodigo($last_id);
            echo "o numero gerado foi ",$last_id;
            return $last_id;
         }
         catch(PDOException $e){
             //return "entrou no catch".$e->getmessage();
             return 0;
         }
     }

}
?>
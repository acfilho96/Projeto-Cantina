<?php
require_once "Conexao.php";
class UserDAO{

    public function listarTodos(){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from trabalho.user");
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listarUser=array();
           $i=0;

           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $user = new User();
            $user->setId($linha['id']);
            $user->setEmail($linha['email']);
            $user->setUsuario($linha['usuario']);
            $user->setNome($linha['nome']);
            $user->setEndereco($linha['endereco']);
            $user->setTelefone($linha['telefone']);
            $user->setTipo($linha['tipo']);
            $user->setMatricula($linha['matricula']);
            $user->setSaldo($linha['saldo']);
            $listarUser[$i] = $user;
            $i++;
          }
        return $listarUser;
       }
       catch(PDOException $e){
        return array();
       }
    }
    
    public function incluirUser($user){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into trabalho.user (email, usuario, senha, nome, endereco, telefone, tipo, matricula, saldo) values (:email, :usuario, :senha, :nome, :endereco, :telefone, :tipo, :matricula, :saldo)");

            $sql->bindParam("email",$email);
            $sql->bindParam("usuario",$usuario);
            $sql->bindParam("senha",$senha);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("endereco",$endereco);
            $sql->bindParam("telefone",$telefone);
            $sql->bindParam("tipo",$tipo);
            $sql->bindParam("matricula",$matricula);
            $sql->bindParam("saldo",$saldo);

            $email = $user->getEmail();
            $usuario = $user->getUsuario();
            $senha = $user->getSenha();
            $nome = $user->getNome();
            $endereco = $user->getEndereco();
            $telefone = $user->getTelefone();
            $tipo = $user->getTipo();
            $matricula = $user->getMatricula();
            $saldo = $user->getSaldo();

            $sql->execute();

            echo "incluido com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId($last_id);
            echo "o numero gerado foi ",$last_id;
            return $last_id;
         }
         catch(PDOException $e){
             //return "entrou no catch".$e->getmessage();
             return 0;
         }
     }

     public function excluirUser($user){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from trabalho.user where id=:id");
            $sql->bindParam("id",$id);
            $id = $user->getId();
            
            $sql->execute();
            
         }
         catch(PDOException $e){
             echo "entrou no catch".$e->getmessage();
             exit();
         }
     }
     public function pesquisarUser($user){
        //vai ao banco de dados e pega todos os livros
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from trabalho.user where id=:id");
            $sql->bindParam("id",$id);
            $id = $user->getId();
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           $listarUser=array();
           $i=0;
           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $user->setId($linha['id']);
            $user->setEmail($linha['email']);
            $user->setUsuario($linha['usuario']);
            $user->setNome($linha['nome']);
            $user->setEndereco($linha['endereco']);
            $user->setTelefone($linha['telefone']);
            $user->setTipo($linha['tipo']);
            $user->setMatricula($linha['matricula']);
            $user->setSaldo($linha['saldo']);
            $listarUser[$i] = $user;
            $i++;
          }
        
       }
       catch(PDOException $e){
        
       }
    }
    public function alterarUser($user){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update trabalho.user set id=:id, email=:email, usuario=:usuario, senha=:senha, nome=:nome, endereco=:endereco, telefone=:telefone, tipo=:tipo, matricula=:matricula, saldo=:saldo where id=:id");
            $sql->bindParam("id",$id);
            $sql->bindParam("email",$email);
            $sql->bindParam("usuario",$usuario);
            $sql->bindParam("senha",$senha);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("endereco",$endereco);
            $sql->bindParam("telefone",$telefone);
            $sql->bindParam("tipo",$tipo);
            $sql->bindParam("matricula",$matricula);
            $sql->bindParam("saldo",$saldo);
            $id = $user->getId();
            $email = $user->getEmail();
            $usuario = $user->getUsuario();
            $senha = $user->getSenha();
            $nome = $user->getNome();
            $endereco = $user->getEndereco();
            $telefone = $user->getTelefone();
            $tipo = $user->getTipo();
            $matricula = $user->getMatricula();  
            $saldo = $user->getSaldo();                      
            $sql->execute();
            echo "alterado com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId($last_id);
            echo "o numero gerado foi ",$last_id;
            return $last_id;
         }
         catch(PDOException $e){
             //return "entrou no catch".$e->getmessage();
             return 0;
         }
    }
     public function adicionarSaldo($user){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update trabalho.user set id=:id, usuario=:usuario, nome=:nome, matricula=:matricula, saldo=:saldo where id=:id");
            $sql->bindParam("id",$id);
            $sql->bindParam("usuario",$usuario);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("matricula",$matricula);
            $sql->bindParam("saldo",$saldo);
            $id = $user->getId();
            $usuario = $user->getUsuario();
            $nome = $user->getNome();
            $matricula = $user->getMatricula();
            $saldo = $user->getSaldo();                      
            $sql->execute();
            echo "Adicionado com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId($last_id);
            echo "o numero gerado foi ",$last_id;
            return $last_id;
         }
         catch(PDOException $e){
             //return "entrou no catch".$e->getmessage();
             return 0;
         }
       }
       public function finalizarCompra($user){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("update trabalho.user set saldo=:saldo where id=:id");
            $sql->bindParam("id",$id);
            $sql->bindParam("saldo",$saldo);
            $id = $user->getId();
            $saldo = $user->getSaldo();                      
            $sql->execute();
            echo "Compra realizada com sucesso!";
            return 0;
         }
         catch(PDOException $e){
             //return "entrou no catch".$e->getmessage();
             return 0;
         }
       }

     


}
?>
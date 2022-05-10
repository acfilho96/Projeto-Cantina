<?php
if (!isset($_SESSION)) session_start();


  include('../Model/ConexaoLogin.php');
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (empty($_POST['usuario']) || empty($_POST['senha'])) {
      header("Location: ../View/Login.php");
      exit;
  }

  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

  $query = "select id, email, usuario, nome, endereco, telefone, tipo, matricula, saldo from user where usuario = '{$usuario}' and senha = '{$senha}'";

  $result = mysqli_query($conexao, $query);
  $resultado = mysqli_fetch_assoc($result);
  $row = mysqli_num_rows($result);
  
  if($row==1){
    $_SESSION['id'] = $resultado['id']; 
    $_SESSION['email'] = $resultado['email'];  
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['endereco'] = $resultado['endereco'];
    $_SESSION['telefone'] = $resultado['telefone'];
    $_SESSION['tipo'] = $resultado['tipo'];
    $_SESSION['matricula'] = $resultado['matricula'];
    $_SESSION['saldo'] = $resultado['saldo'];
   
    
      
      if($_SESSION['tipo'] == 3){
      header("Location: ../LISTARPRODUTOS");
      exit();
      }elseif($_SESSION['tipo'] == 2){
      header("Location: ../LISTARUSER");
      exit();
      }elseif($_SESSION['tipo'] == 1){
      header("Location: ../LISTARPRODUTOSALUNO");
      exit();
      }
  }else{
  $_SESSION['nao_autenticado'] = true;
  header("Location: ../Login.php");
  exit();
}

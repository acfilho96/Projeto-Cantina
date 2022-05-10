<?php 
include('VerificaLogin.php');
if (!isset($_SESSION)) session_start();
$tituloPagina = "Alteração de Usuario";
require 'Cabecalho.php';
?>

<div class="col-sm-3 sidenav">                    
                    <hr>
                    <h4>Olá, <?php echo $_SESSION['nome'];?> </h4> 
                          
                    <p><a href="./View/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair </a></p>                                            <br>
                    
                    <br />
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="LISTARPRODUTOS">Produtos</a></li>
                        <li class="active"><a href="LISTARRESP">Responsáveis</a></li>
                    </ul>
                    <br />                    
  </div>           

<div class="col-sm-9">

<div class="container-fluid bg-3">  
    
  <h2 style="text-align: center; 
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  padding: 3%;
  border-style: outset;
  border-radius: 0px; 
  border-color: rgb(155, 155, 155);"><b>Alterar Cadastro</b></h2>
  <br>
        

  <h2>Informações Pessoais</h2>
  <br>
  <form name="AltResp" method = "post" action="AlterarResp">
    <div class="form-group">
      <label for="id">Id do Usuário:</label>
      <input type="text" class="form-control" id="id" placeholder="Informe o Id do usuario" name="id" value = "<?php echo $id ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Informe o email" name="email" value = "<?php echo $email ?>" required>
    </div>
    <div class="form-group">
        <label for="usuario">Usuário:</label>
        <input type="text" class="form-control" id="usuario" placeholder="Informe o usuario" name="usuario" value = "<?php echo $usuario ?>" required>
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" placeholder="Informe a senha" name="senha" value = "<?php echo $senha ?>" required>
    </div>
    <div class="form-group">
      <label for="nome">Nome do Usuario:</label>
      <input type="text" class="form-control" id="nome" placeholder="Informe o nome do usuario" name="nome" value = "<?php echo $nome ?>" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" placeholder="Informe o endereço" name="endereco" value = "<?php echo $endereco ?>" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" placeholder="Informe o telefone" name="telefone" value = "<?php echo $telefone ?>" required>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <input type="text" class="form-control" id="tipo" placeholder="Tipo" name="tipo" value = "<?php echo $tipo ?>" required>
    </div>
    <br>
    <br>
    <p style="text-align: center;">
        <button type="submit" class="btn btn-success"> Alterar </button>
    </p>
    <br>
  </form>

  </div>
</div>
<?php require "Rodape.php";?>
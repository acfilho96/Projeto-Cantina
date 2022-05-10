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

                        <li class="active"><a href="LISTARUSER">Usuários</a></li>
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
  border-color: rgb(155, 155, 155);"><b>Adicionar Saldo</b></h2>
  <br>
        
  <h2>Forma de Pagamento</h2>
  <div class="media" style="margin-left: 2%"><input type="radio" name="remember">
                        <label class="media-left">  <img src="simboloCartao-removebg-preview.png" height="35px;">

                        </label>
                        <div class="media-body">
                            <h4 class="media-heading">Nubank ****6789</h4>
                            <p>Débito</p>
                            
                        </div>
                        <div class="media-right">
                            <button type="button" class="btn btn-danger">
                                Remover
                            </button>
                        </div>


                        <hr>
                        <label><input type="radio" name="remember"> Cartão de Débito</label>
                        <label><input type="radio" name="remember"> Cartão de Credito</label>
                        <br><br>
                        
                        <div class="form-group">
                            <label for="numero">Número do Cartão:</label>
                            <input type="text" class="form-control" id="numero" placeholder="Informe o número do cartão" name="num">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome do Titular:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Informe o nome do titular do cartão" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="data">Data de Vencimento:</label> 
                            <input type="text" class="form-control" id="vencimento" placeholder="Informe o a data de vencimento do cartão" name="data">
                        </div>
                        <div class="form-group">
                            <label for="codigo">Código de Segurança:</label> 
                            <input type="text" class="form-control" id="cod" placeholder="Informe o código de seg. do cartão" name="cod">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF do Titular:</label> 
                            <input type="text" class="form-control" id="cpf" placeholder="Informe o CPF do titular do cartão" name="cpf">
                        </div>


                    </div>
                    <br>

                    <hr>
       
  <h2>Informações do aluno</h2>
  <br>
  <form name="AdcSaldo" method = "post" action="AdicionarSaldo">
    <div class="form-group">
      <label for="id">Id do Usuário:</label>
      <input type="text" class="form-control" id="id" placeholder="Informe o Id do usuario" name="id" value = "<?php echo $id ?>" required>
    </div>
    <div class="form-group">
        <label for="usuario">Usuário:</label>
        <input type="text" class="form-control" id="usuario" placeholder="Informe o usuario" name="usuario" value = "<?php echo $usuario ?>" required>
    </div>
    <div class="form-group">
      <label for="nome">Nome do Usuario:</label>
      <input type="text" class="form-control" id="nome" placeholder="Informe o nome do usuario" name="nome" value = "<?php echo $nome ?>" required>
    </div>
    <div class="form-group">
        <label for="matricula">Matricula:</label>
        <input type="text" class="form-control" id="matricula" placeholder="Matricula" name="matricula" value = "<?php echo $matricula ?>" required>
    </div>
    <hr>
    <h3>Saldo atual: R$ <?php echo $saldo?> </h3>
    <hr>
    <div class="form-group">
        <label for="saldo">Quanto deseja adicionar?</label>
        <input type="text" class="form-control" id="saldo" placeholder="Informe o valor desejado" name="saldo" required>
        
    </div>
    <br>
    <br>
    <p style="text-align: center;">
        <button type="submit" class="btn btn-success"> Adicionar </button>
    </p>
    <br>
  </form>

  </div>
</div>
<?php require "Rodape.php";?>
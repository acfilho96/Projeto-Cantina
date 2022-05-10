<?php 
include('VerificaLogin.php');

$tituloPagina = "Cadastro de Comida";
require 'Cabecalho.php';
?>

<div class="col-sm-3 sidenav">                    
                    <hr>
                    <h4>Olá, <?php echo $_SESSION['nome'];?> </h4> 
                          
                    <p><a href="./View/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair </a></p>                                            <br>
                    
                    <br />
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="LISTARPRODUTOS">Produtos</a></li>
                        <li><a href="LISTARRESPONSAVEL">Responsáveis</a></li>
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
  border-color: rgb(155, 155, 155);"><b>Cadastro de Alimento</b></h2>
  <br>
        

  <form name="CadComida" method = "post" action="incluirComida">
    <div class="form-group">
      <label for="nome">Nome do alimento:</label>
      <input type="text" class="form-control" id="nome" placeholder="Informe o nome do alimento" name="nome" required>
    </div>
    <div class="form-group">
        <label for="ingredientes">Ingredientes:</label>
        <input type="text" class="form-control" id="ingredientes" placeholder="Informe os ingredientes" name="ingredientes" required>
      </div>
    <div class="form-group">
        <label for="fornecedor">Fornecedor:</label>
        <input type="text" class="form-control" id="fornecedor" placeholder="Informe o fornecedor" name="fornecedor">
     </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" placeholder="Informe o preço do produto" name="preco" required>
      </div>
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <input type="text" class="form-control" id="tipo" placeholder="Informe o tipo do produto" name="tipo" required>
      </div>
      <br>
      <br>
        <p style="text-align: center;">
            <button type="submit" class="btn btn-success"> Cadastrar </button>
        </p>
        <hr>
    
        <br>
  </form>
  </div>
</div>
<?php require "Rodape.php";?>
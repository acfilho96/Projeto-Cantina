<?php 
if (!isset($_SESSION)) session_start();
require_once 'Cabecalho.php';

?>

<body>
      
<div class="col-sm-3 sidenav" style="
        color: rgb(87, 106, 109);
        background-color:#f1f1f1;
        width: 25%;  
        height: 988px;     
        margin-left: 1%;
        margin-top: 0%;
        padding: 5%;

        ">

    
        <h2 style="text-align: center; ">Efetuar Login</h2>
      
        <hr>
        <?php
  if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="btn btn-danger">
          <p> Usuário ou senha inválidos.</p>
        </div>
        <?php 
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
  <form name="Login" method = "post" action="Validacao.php">
    
      <div class="form-group">
        <label for="usuario">Usuário:</label>
        <input type="text" class="form-control" id="usuario" placeholder="Informe o usuario" name="usuario" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" placeholder="Informe a senha" name="senha" required>
      </div>
      
      <br>
        <p style="text-align: center;">
            <button type="submit" class="btn btn-success"> Entrar </button>
        </p>
        <hr>
        <p class="linkCadastro" style="text-align: center;">
            <a href="./TelaCadastroEscola.php">
              <b> Cadastrar Escola </b></a
            >
        </p>
      </div>
        <br>
  </form>
  
    <h1 style="text-align: center; margin-top: 0%; padding-top: 2%; color:rgb(97, 97, 97); "><b> Food School </b>
    </h1><h4 style="text-align: center; margin-top: 0%; color:rgb(97, 97, 97); "><b> Uma forma eficaz de controlar a alimentação do seu filho </b></h4>
    <br>
    <br>
    <br>
    <h4 style=" margin-left: 300px; padding: 4%; background-color: #80262662; color:rgb(90, 55, 55); "> <b> Objetivo do sistema </b> <br> <br> <i> O sistema oferece uma melhora na gestão financeira e controle sobre a alimentação do seu filho</i></h4> <br>
    <h4 style=" margin-left: 300px; padding: 4%; background-color: #5087ce4d; color:rgb(90, 55, 55); "> <b> Vantagens do sistema </b> <br> <br> <i> Com o HomeFood você consegue determinar quais alimentos o seu filho poderá comprar, pode verificar os preços e depositar o valor ideal, e o melhor, pode fazer isso de onde estiver, só precisa de conexão a internet.</i></h4> <br>
    <h4 style=" margin-left: 300px; padding: 4%; background-color: #bbce504d; color:rgb(90, 55, 55); "> <b> Vantagens do sistema </b> <br> <br> <i> Com o HomeFood você consegue determinar quais alimentos o seu filho poderá comprar, pode verificar os preços e depositar o valor ideal, e o melhor, pode fazer isso de onde estiver, só precisa de conexão a internet.</i></h4>

    
    <br><br><br><br><br><br><br>
    

<?php require "Rodape.php";?>
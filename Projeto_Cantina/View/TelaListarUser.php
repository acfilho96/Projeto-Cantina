<?php 
include('VerificaLogin.php');
if (!isset($_SESSION)) session_start();
require "Cabecalho.php";
?>
<?php



if($_SESSION['usuario'] == $_SESSION['email']){ ?>
      
  <div class="col-sm-3 sidenav">                    
                    <hr>
                    <h4>Olá, <?php echo $_SESSION['nome'];?> </h4> 
                          
                    <p><a href="./View/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair </a></p>                                            <br>
                    
                    <br />
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="LISTARUSER">Alunos</a></li>
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
  border-color: rgb(155, 155, 155);"><b>Alunos</b></h2>
  <br>

  <p style="text-align: center;">
  <a href="NOVOUSER"  class="btn btn-primary">Novo Aluno</a>
  </p>
  <table class="table table-striped" style= "width: 100%;
                margin-left: auto;
                margin-right: auto;
                ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Usuário</th>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>Saldo</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listarUser);$i++){ ?>
        <?php if ($listarUser[$i]->getTipo()==1){ ?>
           <tr>
           <td><?php echo $listarUser[$i]->getId(); ?></td>
           <td><?php echo $listarUser[$i]->getUsuario(); ?></td>
           <td><?php echo $listarUser[$i]->getNome(); ?></td>
           <td><?php echo $listarUser[$i]->getMatricula(); ?></td>
           <td>R$ <?php echo $listarUser[$i]->getSaldo(); ?></td>
           <td>
           <form method="post" action="FormAdicionarSaldo" >
             <input type="hidden" name="id" value="<?php echo $listarUser[$i]->getId();?>">
             <input type="submit" class="btn btn-success btn-sm" value= "Adicionar saldo">
           </form>
           </td>
           <td>
           <form method="post" action="FormAlterarUser" >
             <input type="hidden" name="id" value="<?php echo $listarUser[$i]->getId();?>">
             <input type="submit" class="btn btn-primary btn-sm" value= "Editar">
           </form>
           </td>
           <td>
           <form method="post" action="ExcluirUser" onSubmit="return confirma();">
             <input type="hidden" name="id" value="<?php echo $listarUser[$i]->getId();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           </tr>   
      <?php } ?>
      <?php } ?>
    </tbody>
  </table>
  </div>
  </div> 
  <?php

     
 require "Rodape.php";

exit();
} ?> 
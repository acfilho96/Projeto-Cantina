<?php 
include('VerificaLogin.php');
if (!isset($_SESSION)) session_start();
require "Cabecalho.php";
?>

  <div class="col-sm-3 sidenav">                    
                    <hr>
                    <h4>Olá, <?php echo $_SESSION['nome'];?> </h4> 
                          
                    <p><a href="./View/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair </a></p>                                            <br>
                    
                    <br />
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="LISTARPRODUTOS">Produtos</a></li>
                        <li><a href="LISTARRESP">Responsáveis</a></li>
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
  border-color: rgb(155, 155, 155);"><b>Produtos</b>
</h2>
<br>
<p style="text-align: center;">
<a href="NOVACOMIDA"  class="btn btn-primary">Novo Produto</a>
</p>
  <h2 style="text-align: center; 
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  padding: 3%;"><b>Comidas</b></h2>
  
  <table class="table table-striped" style= "width: 100%;
                margin-left: auto;
                margin-right: auto">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ingredientes</th>
        <th>Fornecedor</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listarComidas);$i++){ ?>
        <?php if ($listarComidas[$i]->getTipo()==1){ ?>
           <tr>
           <td><?php echo $listarComidas[$i]->getCodigo(); ?></td>
           <td><?php echo $listarComidas[$i]->getNome(); ?></td>
           <td><?php echo $listarComidas[$i]->getIngredientes(); ?></td>
           <td><?php echo $listarComidas[$i]->getFornecedor(); ?></td>
           <td>R$ <?php echo $listarComidas[$i]->getPreco(); ?></td>
           <td>
           <form method="post" action="ExcluirComida" onSubmit="return confirma();">
             <input type="hidden" name="codigo" value="<?php echo $listarComidas[$i]->getCodigo();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           <td>
           <form method="post" action="FormAlterarComida" >
             <input type="hidden" name="codigo" value="<?php echo $listarComidas[$i]->getCodigo();?>">
             <input type="submit" class="btn btn-primary btn-sm" value= "Alterar">
           </form>
           </td>
           </tr>  
           <?php } ?> 
      <?php } ?>
    </tbody>
  </table>
  <hr>
  <?php
  
  ?>
    <h2 style="text-align: center; 
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  padding: 3%;"><b>Bebidas</b></h2>
 
  <table class="table table-striped" style= "width: 100%;
                margin-left: auto;
                margin-right: auto">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ingredientes</th>
        <th>Fornecedor</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listarComidas);$i++){ ?>
        <?php if ($listarComidas[$i]->getTipo()==2){ ?>
           <tr>
           <td><?php echo $listarComidas[$i]->getCodigo(); ?></td>
           <td><?php echo $listarComidas[$i]->getNome(); ?></td>
           <td><?php echo $listarComidas[$i]->getIngredientes(); ?></td>
           <td><?php echo $listarComidas[$i]->getFornecedor(); ?></td>
           <td>R$ <?php echo $listarComidas[$i]->getPreco(); ?></td>
           <td>
           <form method="post" action="ExcluirComida" onSubmit="return confirma();">
             <input type="hidden" name="codigo" value="<?php echo $listarComidas[$i]->getCodigo();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           <td>
           <form method="post" action="FormAlterarComida" >
             <input type="hidden" name="codigo" value="<?php echo $listarComidas[$i]->getCodigo();?>">
             <input type="submit" class="btn btn-primary btn-sm" value= "Alterar">
           </form>
           </td>
           </tr>  
           <?php } ?> 
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>
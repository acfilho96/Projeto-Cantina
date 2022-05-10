<?php 
include('VerificaLogin.php');
if (!isset($_SESSION)) session_start();
require 'Cabecalho.php';
?>

  <div class="col-sm-3 sidenav">                    
                    <hr>
                    <h4>Olá, <?php echo $_SESSION['nome'];?> </h4> 
                    <h4>Saldo R$ <?php echo $saldo;?> </h4>
                    <p><a href="./View/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair </a></p>                                            <br>
                    
                    <br />
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="LISTARPRODUTOSALUNO">Produtos</a></li>
                        <li class="active"><a href="CARRINHO">Carrinho</a></li>
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
  border-color: rgb(155, 155, 155);"><b>Carrinho</b></h2>
  <br>

  <table class="table table-striped" style= "width: 100%;
                margin-left: auto;
                margin-right: auto">
    <thead>
      <tr>
        <th>código</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>SubTotal</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($itensCarrinho as $item): ?>
           <tr>
           <td><?php echo $item->getProduto()->getCodigo(); ?></td>
           <td><?php echo $item->getProduto()->getNome(); ?></td>
           <td>R$ <?php echo number_format($item->getProduto()->getPreco(),2,',','.'); ?></td>
           <td>
           <form action="CarrinhoAltQuant" method="post">
              <input type="hidden" name="codigo" value="<?php echo $item->getProduto()->getCodigo(); ?>">
              <input type="text" name="quantidade" value="<?php echo $item->getQuantidade(); ?>" size="2" >
              <button type="submit" class="btn btn-primary btn-xs">Alterar</button>
           </form>
           </td>
           <td>R$ <?php echo number_format($item->getSubTotal(),2,',','.'); ?></td>
           <td>
           <form method="post" action="ApagaItemCarrinho" >
             <input type="hidden" name="codigo" value="<?php echo $item->getProduto()->getCodigo(); ?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           </tr>   
      <?php endforeach; ?>
    </tbody>
    <tfoot>
       <tr>
          <td colspan="4"><b>Total</b></td>
          <td>R$ <?php echo number_format($carrinho->getTotal(),2,',','.'); ?></td>  
       </tr>
       <tr>
        <td> 
          <form method="post" action="FinalizarCompra" >
             <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
             <input type="hidden" name="codigo" value="<?php echo $carrinho->getTotal();?>">
             <input type="submit" class="btn btn-success btn-sm" value= "Finalizar Compra">
           </form>
           <h4>Saldo atual: R$ <?php echo $saldo;?> </h4>
        </td> 
       </tr>
    </tfoot>
  </table>
                
<?php require "Rodape.php";?>
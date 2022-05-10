<?php
//esta classe cria um carrinho contendo uma lista de itens do carrinho
require_once "ICarrinho.php";
require_once "ItemCarrinho.php";
class CarrinhoDAO implements ICarrinho{
   private $itens=array();

   public function __construct(){
      $this->itens = $this->restaura();
   }

   public function estaNoCarrinho($codigo){
       //verifica de um item (pelo id) já está no carrinho
       //o indice do array é o id do produto
       return isset($this->itens[$codigo]);
   }

   public function adicionar($item){
    //adiciona um novo item no carrinho
       $codigo = $item->getProduto()->getCodigo();
       if (!$this->estaNoCarrinho($codigo))
           $this->itens[$codigo] = $item;
       else
       //se o item já existir e for selecionado novamente, incrementa a quantidade em 1
           $this->itens[$codigo]->setQuantidade($this->itens[$codigo]->getQuantidade()+1);
   }

   public function atualizar($item){
    //altera um item do carrinho quando a quandidade é alterada
    $codigo = $item->getProduto()->getCodigo();
    if ($this->estaNoCarrinho($codigo)){
       if ($item->getquantidade()==0){
           $this->apagar($codigo);
           return;
       }
       $this->itens[$codigo] = $item;
    }
   }

   public function apagar($codigo){
    //exclui um item do carrinho
    if ($this->estaNoCarrinho($codigo))
        unset($this->itens[$codigo]);
   }

   public function getTotal(){
       // retorna o total de todos os produtos do carrinho
       $total = 0;
       foreach($this->itens as $item){
           $total += $item->getSubTotal();
       }
       return $total;
   }

   public function getItensCarrinho(){
       return $this->itens;
   }

   public function __destruct(){
       //salva os itens do carrinho na sessão para não perder os dados
       // quando o objeto for destruido
       $_SESSION['carrinho2'] = serialize($this->itens);
   }

   public function restaura(){
       // restaura a informação quando estivermos em outra página
       // verifica se esse carrinho existe na sessão
       // se sim retorna o carrinho, se não retorna um array vazio
       if (isset($_SESSION['carrinho2'])){
           return unserialize($_SESSION['carrinho2']);
       }
       else
         return array(); 

   }
}

?>